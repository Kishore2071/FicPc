function myFunction() {
          var url = window.location.pathname;
          var filename = url.substring(url.lastIndexOf('/')+1);
          if(filename=="index.php"){
                function myFunction() {
                    var element = document.getElementById("home");
                    element.classList.add("active");
                }
                myFunction();

            }else if(filename=="signin.php"){
                function myFunction() {
                    var element = document.getElementById("signin");
                    element.classList.add("active");
                }
                myFunction();
            }else if(filename=="signup.php"){
                function myFunction() {
                    var element = document.getElementById("signup");
                    element.classList.add("active");
                }
                myFunction();
            }
            
}
myFunction();