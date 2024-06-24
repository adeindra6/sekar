<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="Style.css" />
    <title>Login & Registration</title>
  </head>
  <body>
    <div class="wrapper">
      <nav class="nav">
        <div class="nav-logo">
          <p>Healthy Life with Healthy Food</p>
        </div>
        <div class="nav-button">
          <button class="btn white-btn" id="loginBtn" onclick="window.location.href = '../RegistrasiForm/formUser.php'">
            Register User
          </button>
          <button class="btn white-btn" id="registerBtn" onclick="window.location.href = '../RegistrasiForm/formUMKM.php'">
            Register UMKM
          </button>
        </div>
        <div class="nav-menu-btn">
          <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
      </nav>

      <!----------------------------- Form box ----------------------------------->
      <div class="form-box">
        <!------------------- login form -------------------------->

        <div class="login-container" id="login">
          <div class="top">
<!--             
            <span
              >Don't have an account?
               <a href="#" onclick="register()">Sign Up</a></span
            >
            -->
            <header>Login</header>
          </div>
          <div class="input-box">
            <input
              type="text"
              class="input-field"
              placeholder="Username or Email"
            />
            <i class="bx bx-user"></i>
          </div>
          <div class="input-box">
            <input type="password" class="input-field" placeholder="Password" />
            <i class="bx bx-lock-alt"></i>
          </div>
          <div class="input-box">
            <input type="submit" class="submit" value="Sign In" />
          </div>
          <div class="two-col">
            <div class="one">
              <input type="checkbox" id="login-check" />
              <label for="login-check"> Remember Me</label>
            </div>
            <div class="two">
              <label><a href="#">Forgot password?</a></label>
            </div>
          </div>
        </div>

        <!------------------- registration form -------------------------->
        <div class="register-container" id="register">
          <div class="top">
            <span
              >Don't have an account?
               <a href="#" onclick="register()">Sign Up</a></span
            >
            <header>Sign Up</header>
          </div>
          <div class="input-box">
            <input
              type="text"
              class="input-field"
              placeholder="Username or Email"
            />
            <i class="bx bx-user"></i>
          </div>
          <div class="input-box">
            <input type="password" class="input-field" placeholder="Password" />
            <i class="bx bx-lock-alt"></i>
          </div>
          <div class="input-box">
            <input type="submit" class="submit" value="Sign In" />
          </div>
          <div class="two-col">
            <div class="one">
              <input type="checkbox" id="register-check" />
              <label for="register-check"> Remember Me</label>
            </div>
            <div class="two">
              <label><a href="#">Forgot password?</a></label>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      function myMenuFunction() {
        var i = document.getElementById("navMenu");

        if (i.className === "nav-menu") {
          i.className += " responsive";
        } else {
          i.className = "nav-menu";
        }
      }
    </script>

    <script>
      var a = document.getElementById("loginBtn");
      var b = document.getElementById("registerBtn");
      var x = document.getElementById("login");
      var y = document.getElementById("register");

      function login() {
        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
      }

      function register() {
        x.style.left = "-510px";
        y.style.right = "5px";
        a.className = "btn";
        b.className += " white-btn";
        x.style.opacity = 0;
        y.style.opacity = 1;
      }
    </script>
  </body>
</html>