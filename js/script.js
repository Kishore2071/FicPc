function myFunction() {
          var url = window.location.pathname;
          var filename = url.substring(url.lastIndexOf('/')+1);
          console.log("started");
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
            }else if(filename=="aboutus.php"){
                function myFunction() {
                    var element = document.getElementById("about");
                    element.classList.add("active");
                }
                myFunction();
            }else if(filename=="contact.php"){
                function myFunction() {
                    var element = document.getElementById("contact");
                    element.classList.add("active");
                }
                myFunction();
            }else{
                function myFunction() {
                    var element = document.getElementById("home");
                    element.classList.add("active");
                }
                myFunction();
            }
}
myFunction();