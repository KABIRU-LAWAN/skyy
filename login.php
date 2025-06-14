<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Goggle Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 16px;
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 7px 15px;
      margin: 8px 0;
      display: inline-block;
      border: none;
      box-sizing: border-box;
      background: #f1f1f1;
      font-size: 16px;
      
    }

    /* Set a style for all buttons */
    button {
      box-sizing: border-box;
      background-color: #AC1754;
      color: white;
      padding: 15px 30px;
      margin: -5px 0 20px 0;
      border: none;
      cursor: pointer;
      /* float: right; */
      font-weight: bold;
      border-radius: 5px;
    }

    button:hover {
      opacity: 0.8;
    }

    .container {
      padding: 16px;
    }

   span.psw {
       padding-top: 30px; 
       float: right;
    } 

    span.reg{
      display: block;
      text-align: center;
      font-size: 16px;
    }


    /* The Modal (background) */
    .modal {
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgb(0, 0, 0);
      background-color: rgba(0, 0, 0, 0.4);
    }

    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 3% auto 22% auto;
      box-shadow: 0 0 10px silver;
      /* width: 90%; */
      max-width: 80%;
      border-radius: 10px;
      padding-top: 10px;
    }

    /* The Close Button (x) */
    .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: red;
      cursor: pointer;
    }

    
    /* Add Zoom Animation */
    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
      from {
        -webkit-transform: scale(0)
      }

      to {
        -webkit-transform: scale(1)
      }
    }

    @keyframes animatezoom {
      from {
        transform: scale(0)
      }

      to {
        transform: scale(1)
      }
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 399px) {
      span.psw {
        display: block;
        float: none;
      }

      input[type=text],
      input[type=password] {
         padding: 10px 18px; 
      }

      .modal-content{
        width: 90%;
        
      }
      
    }

     a{
       text-decoration: none;;
     }
    /* Alert message */
   
    .error_message{
      display: block;
      background-color: #ff9999;
      padding: 10px 20px;
      color: darkred;
      font-size: 18px;
      border-radius: 4px;
    }
  </style>
</head>

<body>

  <div id="id01" class="modal">     
    <form  action="functions/log_function.php" class="modal-content animate" method="POST">
    
      <div class="container">
      <?php
        if(isset($_GET['error']))
        {
          if($_GET['error'] == 'empty-fields')
          {
            echo "<span class='error_message'>Yuo do not enter Username or Password</span>";
          }

          if($_GET['error'] == 'no-user')
          {
            echo "<span class='error_message'>You dont have an account yet</span>";
          }

          if($_GET['error'] == 'incorrect-password')
          {
            echo "<span class='error_message'>Wrong Password</span>";
          }
          
        }
        ?>

         <h2 style="text-align: center; margin-bottom:35px">Loging Form</h2>
         <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" >

        <label for="psw"><b>Password</b></label>
        <input type="password" name="psw" placeholder="Enter Password" >
        <br><br>

        <button type="submit" name="login_btn">Login</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>

      <div class="container" style="background-color:#f1f1f1; border-radius: 5px; padding: 20px; margin-top: 40px">
          <span class="reg">Don't have an account yet?. <a href="register.php">Register</a></span>
        </div>
    </form>
  </div>
</body>
</html>