<!doctype html>
<html lang="en">
    <head>
        <title>Landing Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="signup.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/0f1c57c0f5.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <div class="container">
                <a class="navbar-brand" href="#"><i class="fa-solid fa-laptop-code"></i>FIXPC</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="#">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us </a>
                    </li>
                  </ul>
                  <ul class="navbar-nav nav-right">
                    <li class="nav-item">
                      <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Sign Up</a>
                    </li>
                  </ul>
                </div>
              </div>
        </nav> 

        <div class="container signcon text-center signinbg">
          <form class="form-signin">
            <h1><i class="fa-solid fa-laptop-code"></i>FIXPC</h1>
            <h4 class="h3 mb-3 font-weight-normal">Please sign up</h4>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <label for="inputPassword" class="sr-only">Confirm Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Confirm Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
          </form>
        </div>
        
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>