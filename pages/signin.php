<!doctype html>
<html lang="en">
    <head>
        <title>Signin Page</title>
        <?php include_once "../_templates/headlink.php" ?>    
        <link rel="stylesheet" href="signin.css">
    </head>
    <body>
        
        <?php include_once "../_templates/navbar.php" ?> 

        <div class="container signcon text-center signinbg">
          <form class="form-signin">
            <h1><i class="fa-solid fa-laptop-code"></i>FIXPC</h1>
            <h4 class="h3 mb-3 font-weight-normal">Please sign in</h4>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          </form>
        </div>
        <?php include_once "../_templates/b4jq.php" ?>
    </body>
</html>