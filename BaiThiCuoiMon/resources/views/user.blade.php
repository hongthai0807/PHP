@extends('layout.layout')

@section('title_page')

home page

@endsection

@section('mycss')

@endsection

@section('body_content')
<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">password</th>

    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($query as $row)
      <th scope="row">1</th>
      <td>{{$row->id}}</td>
      <td>{{$row->name}}</td>
      <td>{{$row->email}}</td>
      <td>{{$row->password}}</td>
      @endforeach  

    </tr>
  </tbody>
</table>




@endsection

@section('myscript')

@endsection