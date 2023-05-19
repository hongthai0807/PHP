<html lang="en" style="--highlight-bg:rgba(17, 142, 232); --highlight-color:#fff; --box-highlight:rgba(17,142,232,0.8);">

<head>
<<<<<<< HEAD
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form>
  <fieldset disabled>
    <legend>Disabled fieldset example</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Disabled input</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Disabled select menu</label>
      <select id="disabledSelect" class="form-select">
        <option>Disabled select</option>
      </select>
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
        <label class="form-check-label" for="disabledFieldsetCheck">
          Can't check this
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
=======
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Untitled</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
</head>

<body style="background: url(http://127.0.0.1:8000/images/background-login.webp);background-repeat: no-repeat;background-size: cover;">
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 style="color: aliceblue;font-weight: bold;font-size: 31px;/* line-height: 47px; */">Log in</h2>
                    <p contenteditable="true" style="font-weight: bold;color: red;font-style: italic;font-size: 1.3em;">Welcome !</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4" style="width: 16vw">
                    <div class="card mb-5">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4">
                              <i class="fa-solid fa-user fa-2xl"></i>
                            </div>
                            <form class="text-center" method="post" action="" style="margin: 6vh auto 0">
                                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" /></div>
                                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" /></div>
                                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Login</button></div>
                                <p class="text-muted">Forgot your password?</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://kit.fontawesome.com/b6daa7a43d.js" crossorigin="anonymous"></script>
>>>>>>> af569838cad442dea2f66b5617ac9a778f705f25
</body>

</html>
