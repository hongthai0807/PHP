@extends('layout.student')

@section('title_page')

home page

@endsection

@section('mycss')

@endsection

@section('body_content')

<div style="text-align: center;">History Feedback</div>
<table class="table">
@foreach($query as $row)

  <tbody>
    <tr>
    <td>{{$row->content}}</td>
    </tr>
  </tbody>
  @endforeach  

</table>


@endsection

@section('myscript')

@endsection
