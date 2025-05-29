<?php

  //  if(isset($_POST['register_btn']))
  //  {
  //    require "../config/config.php";
     
  //    $full_name = trim(mysqli_real_escape_string($conn, $_POST['name']));
  //    $username = trim(mysqli_real_escape_string($conn, $_POST['uname']));
  //    $email = trim(mysqli_real_escape_string($conn, $_POST['email']));
  //    $password = trim(mysqli_real_escape_string($conn, $_POST['psw']));
  //    $confirm_password = trim(mysqli_real_escape_string($conn, $_POST['confirm_psw']));

  //    $check_user = mysqli_query($conn, "SELECT * FROM users_table where email='$email' OR username='$username'");
  //     if(mysqli_num_rows( $check_user)>0)
  //     {
  //       header('location:../register.php?error=user-exist');
  //     }
  //     else
  //     {
  //       if($password == $confirm_password)
  //       {
  //           $hashed_password = password_hash($password, PASSWORD_DEFAULT);
  //           $created_at = date("Y-m-d H:i:s");

  //           $insert = mysqli_query($conn, "INSERT INTO users_table (full_name, username, email, password, created_at) VALUES('$full_name', '$username', '$email',  '$hashed_password', '$created_at')");
  //           if(!$insert)
  //           {
  //             header('location:../register.php?error=failed');
  //           }
  //           else
  //           {
  //             header('location:../register.php?success');
  //           }

  //       }
  //       else
  //       {
  //         header('location:../register.php?error=wrong-password');
  //       }
  //     }
  //   } 

  if (isset($_POST['register_btn'])) {
    require "../config/config.php";

    $full_name = trim($_POST['name']);
    $username = trim($_POST['uname']);
    $email = trim($_POST['email']);
    $password = trim($_POST['psw']);
    $confirm_password = trim($_POST['confirm_psw']);

    // Validate inputs
    if (empty($full_name) || empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        header('location:../register.php?error=empty-fields');
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('location:../register.php?error=invalid-email');
        exit();
    }

    if ($password !== $confirm_password) {
        header('location:../register.php?error=password-mismatch');
        exit();
    }

    // Check password strength
    if (strlen($password) < 8 || !preg_match('/[A-Z]/', $password) || !preg_match('/\d/', $password)) {
        header('location:../register.php?error=weak-password');
        exit();
    }

    // Check if user exists using prepared statements
    $stmt = $conn->prepare("SELECT * FROM users_table WHERE email = ? OR username = ?");
    $stmt->bind_param("ss", $email, $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        header('location:../register.php?error=user-exist');
        exit();
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $created_at = date("Y-m-d H:i:s");

    // Insert user into the database using prepared statements
    $stmt = $conn->prepare("INSERT INTO users_table (full_name, username, email, password, created_at) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $full_name, $username, $email, $hashed_password, $created_at);

    if ($stmt->execute()) {
        header('location:../register.php?success');
    } else {
        header('location:../register.php?error=failed');
    }

    $stmt->close();
    $conn->close();
}
