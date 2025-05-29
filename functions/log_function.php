 <?php
  /*
   if(isset($_POST['login_btn']))
   {
     require "../config/config.php";
     
     $username = trim(mysqli_real_escape_string($conn, $_POST['uname']));
     $password = trim(mysqli_real_escape_string($conn, $_POST['psw']));
     
     $check_user = mysqli_query($conn, "SELECT * FROM users_table where username='$username'");
      if(mysqli_num_rows($check_user)== 0)
      {
        header('location:../login.php?error=no-user');
      }
      else
      {
        $result = mysqli_fetch_array($check_user);
        $db_password = $result['password'];

        if(password_verify($password, $db_password))
        {
            header('location:dashbord.php');
        }
        else
        {
            header('location:../login.php?error=incorrect-password');
        }
      }
    } */

  // Prepared statement

   if(isset($_POST['login_btn'])){

    require "../config/config.php";

     $username = trim($_POST['uname']);
     $password = trim($_POST['psw']);

     if(empty($username) || empty($password)){
      header('location: ../login.php?error=empty-fields');
     }

     // prepare and bind
     $stmt = $conn->prepare("SELECT * FROM users_table WHERE username = ?");
     $stmt->bind_param("s", $username);
     $stmt->execute();
     $result = $stmt->get_result();
    
     if($result->num_rows === 0){
       header('location: ../login.php?error=no-user');
       exit();
     }

     $user = $result->fetch_assoc();
     $db_password = $user['password'];

     if(password_verify($password, $db_password)){
       session_start();
       
       $_SESSION['user-id'] = $user['id'];
       $_SESSION['username'] = $user['username'];
       
       header('location:../dashboard.php');
     }
     else{
       header('location:../login.php?error=incorrect-password');
     }
   }
   
 
