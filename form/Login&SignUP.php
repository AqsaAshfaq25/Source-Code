<?php
include('Pages/Config.php');
include('Pages/scripts.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./backg.css">
    <title>Document</title>
</head>
<body class="animation-area">
    <ul class="box-area">
        <li><img src="./tb-logo.png" alt=""></li>
        <li><img src="./tb-logo.png" alt=""></li>
        <li><img src="./tb-logo.png" alt=""></li>
        <li><img src="./tb-logo.png" alt=""></li>
        <li><img src="./tb-logo.png" alt=""></li>
        <li><img src="./tb-logo.png" alt=""></li>
     </ul>
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-3 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3"><span>Log In </span><span>Registration</span></h6> 
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" /> <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-2 pb-4">Log In</h4>
                                            <?php
                                                if(isset($_SESSION['message'])){
                                            ?>
                                            <div class="alert alert-warning" role="alert">
                                            <strong><?php $_SESSION['message'];?></strong>
                                            </div>
                                            <?php
                                              unset($_SESSION['message']);
                                              } 
                                            ?>
                                            <form action="./Login&SignUP.php" method="post">  
                                            <div class="form-group"> 
                                                <input type="email" name="UserEmail" class="form-style" placeholder="Your Email"
                                                 id="logemail" autocomplete="none"> <i class="input-icon fa fa-at"></i> 
                                            </div>
                                            <div class="form-group mt-3"> <input type="password" name="UserPass" class="form-style" 
                                                placeholder="Your Password" id="logpass" autocomplete="none"> 
                                                <i class="input-icon fa fa-lock"></i> 
                                            </div>
                                            <div class="mt-3 form-check mt-4">
                                                <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" style="margin-right: 230px;" for="exampleCheck1">Remember Me</label>
                                            </div>
                                            <!-- <a href="#" class="btn mt-4">Login</a> -->
                                            <button class="btn mt-4" name="UserLogin">Login</button>
                                            <p class="mb-0 mt-4 text-center"> <a href="#0" class="link text-decoration-none">Forgot Password?</a> </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-back" id="Back_Form">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Registration</h4>
                                            <p style="color:red;" class="text-bold" >
                                              <?php           
                                                   if(isset($error)){
                                                      echo $error;
                                                   } 
                                                ?>
                                            </p>
                                            <form action="./Login&SignUP.php" method="post" enctype="multipart/form-data">
                                            <div class="form-group"> 
                                                <input type="text" name="Uname" class="form-style" placeholder="Your Full Name" 
                                                id="logname" autocomplete="none" value="<?php if(isset($error)){  echo $UserName; } ?>"> 
                                                <i class="input-icon fa fa-user"></i>
                                            </div>
                                            <div class="form-group mt-3"> 
                                                <input type="email" name="Uemail" class="form-style" value="<?php if(isset($error)){
                                                  echo $UserEmail ;}?>" placeholder="Your Email" id="logemail" autocomplete="none"> 
                                                <i class="input-icon fa fa-at"></i> 
                                            </div>
                                            <div class="form-group mt-3"> 
                                                <input type="password" name="Upassword" class="form-style" value="<?php if(isset($error)){
                                                 echo $UserPassword ; } ?>" placeholder="Your Password" id="logpass" autocomplete="none"> 
                                                <i class="input-icon fa fa-lock"></i> 
                                            </div>
                                            <div class="form-group mt-3"> 
                                                <input type="Cpassword" name="confirmPass" class="form-style" value="<?php if(isset($error)){
                                                echo $confirmPassword; } ?>" placeholder="Confirm Password" id="logpass" autocomplete="none"> 
                                                <i class="input-icon fa fa-lock"></i> 
                                            </div>
                                            <div class="form-group mt-3">
                                                <i class='input-icon fas fa-user-circle'></i>
                                                <select class="form-select form-style" name="Role"   aria-label="Default select example">
                                                    <option value="null" disabled selected>Select Role</option>
                                                    <option  value="admin">Admin</option>
                                                </select> 
                                            </div>
                                            <div class="form-group mt-3">
                                                <i class="input-icon fa-solid fa-file"></i>
                                                <input type="file" name="picture" class="form-style" id="logpass" autocomplete="none"> 

                                            </div>
                                            <button class="btn mt-4" name="register">Register</button>
                                            </form>
                                            
                                            <!-- <a href="#" class="btn mt-4">Register</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- ######################## login Php ############################### -->
<?php
session_start();

if(isset($_POST['UserLogin'])){
    $UserEmail=mysqli_real_escape_string($conn,$_POST['UserEmail']);
    $UserPassword=mysqli_real_escape_string($conn,$_POST['UserPass']);

      $login="SELECT * FROM registration WHERE email='$UserEmail' AND Apassword = '$UserPassword'";
      $login_query_run=mysqli_query($conn,$login);
      $loginData=mysqli_num_rows($login_query_run);
      if($loginData)
      {
        $User_data=mysqli_fetch_assoc($login_query_run);
        $db_pass=$User_data['Apassword'];
        
        $_SESSION['full_name']=$User_data['full_name'];
        $_SESSION['picture']=$User_data['picture'];
        if($db_pass){
            echo "<script>window.location.href='./index.php';</script>";
        }else{
            echo "<script>window.location.href='./adminlogin.php';</script>";
        }
        //  $_SESSION['auth']= true;
        //  $adminData=mysqli_fetch_array($login_query_run);
        //  $adminName=$adminData['full_name'];
        //  $adminEmail=$adminData['email'];
        //  $_SESSION['auth-name']=[
        //     'full_name' => $adminName,
        //     'email' => $adminEmail,
        //  ];
        //  $_SESSION['message']="logged in successfully";
        //  echo "<script>window.location.href='./index.php'</script>"; 

      }
      else{
        $_SESSION['message']="invalid Credentials";
        echo "<script>window.location.href='./adminlogin.php'</script>";
      }
}

?>

<!-- ############################### Register Php ################################ -->
<?php
if(isset($_POST["register"])){
    $name= $_FILES['picture'];
    
    $imageName=$_FILES['picture']['name'];
    $tempName=$_FILES['picture']['tmp_name'];
    $destination="../assets/images/uploads/".$imageName;
    move_uploaded_file($tempName,$destination);
    // $sql="INSERT INTO registration(picture) VALUES ('$imageName')";
    // $que=mysqli_query($conn,$sql); 
    $UserName=mysqli_real_escape_string($conn,$_POST['Uname']);
    $UserEmail=mysqli_real_escape_string($conn,$_POST['Uemail']);
    $UserPassword=mysqli_real_escape_string($conn,$_POST['Upassword']);
    $confirmPassword=mysqli_real_escape_string($conn,$_POST['confirmPass']);
    $role=$_POST['Role'];
    // $profile=$_POST['Profile'];
    if(empty($UserName)){
        $error="* Name field is required";
    }
    elseif(empty($UserEmail)){
        $error="* Email field is required";
    }
    elseif(empty($UserPassword)){
        $error= "* password  is required";
    }elseif($UserPassword != $confirmPassword){
        $error="*  password  does not match";
    }elseif(strlen($UserName) < 5 || strlen($UserName) > 30){
        $error="name must be between 5 to 30 charachters ";
    }elseif(strlen($UserPassword ) < 6 || strlen($UserPassword ) > 18){
        $error="your password must be atleast 6  to 18 charachters ";
    }else{
        
        $insert = "INSERT INTO registration (`full_name`, `email`, `Apassword`, `picture`, `Urole`) 
        VALUES ( '$UserName' , '$UserEmail','$UserPassword','$imageName','$role')";
        $query= mysqli_query($conn, $insert);
        if($query){

            echo "<script>alert('you have successfully signin ')</script>";
            // echo "<script>alert('please login your account')</script>";
            echo "<script>window.location.href = './Login&SignUP.php';</script>"; 
        }else{

            echo "<script>window.location.href = 'adminregister.php';</script>"; 
            echo "sigup failed !";
        }
 }
   
}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>