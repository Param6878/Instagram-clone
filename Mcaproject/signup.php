<?php
include 'connect.php';

if (isset($_POST['sign'])) {
    $email = $_POST['email'];
    $username = $_POST['user_name'];
    $pass = $_POST['password'];


    $sql = "SELECT*FROM `insta_record` WHERE username='$username'";
    $result = $con->query($sql);

    
    if (empty($email) || empty($username) || empty($pass)) {
        echo " <div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong> please enter all fileds</strong>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden=true>&times;</span>
      </button>
       </div>";
    } 
    elseif ($result) {
        
        if ($result->num_rows > 0) {
            echo " <div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>This username already takken</strong>!please change your username
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden=true>&times;</span>
            </button>
            </div>";
        } else {
            $sql = "INSERT INTO `insta_record` (email,username,password) VALUES ('$email', '$username', '$pass')";
            $result1 = mysqli_query($con, $sql);
            echo " <div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong> You have created successfully,</strong> please login now!!
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden=true>&times;</span>
            </button>
            </div>";
        }
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram-clone</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="image/instagram.png">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="utility.css">
</head>

<body>

    <div class="container flex flex_direction align">

        <img src="image/logo1.jpg" alt="logo">

        <div class="min-con flex align flex_direction">



            <div class="text">
                <span>Sing up to see photos and videos from your friends</span>
            </div>

            <div class="login-face flex justify">
                <button class="btn flex align justify"><img src="image/facebook.png" alt="logo"> log in with Facebook</button>
            </div>

            <div class="line-or flex align">
                <div class="line"></div>
                <span>or</span>
                <div class="line"></div>
            </div>
            <form action="" method="post">
                <div class="form flex align flex_direction">
                    <input type="text" name="email" placeholder="Mobile nuber or email address" autocomplete="off">
                    <input type="text" name="full_name" placeholder="Full name" autocomplete="off">
                    <input type="text" name="user_name" placeholder="Username" autocomplete="off">
                    <input type="password" name="password" placeholder="Password" autocomplete="off">
                </div>

                <div class="about flex align flex_direction">
                    <span>People who use our service may have uploaded your contact information to Instagram. <a class="link
                    " href="">Lear more</a> </span>

                    <span class="sec-span">By signing up, you agree to our Terms, Privacy Policy and Cookies Policy.</span>
                </div>

                <div class="sign-up-btn">
                    <button name="sign">Sign UP</button>
                </div>
            </form>
        </div>
    </div>

    <div class="login flex align justify">
        <span>Have an account? <a class="link" href="index.php">Log in</a> </span>
    </div>

    <div class="get-app flex align justify flex_direction">
        <span>Get the app.</span>
        <div class="store flex justify align">
            <img class="play" src="image/play.png" alt="">
            <img class="micro" src="image/micro.png" alt="">
        </div>
    </div>

    <footer class="footer flex flex_direction justify align">
        <div class="upper_footer flex">
            <div class="upper">Meta</div>
            <div class="upper">Aabout</div>
            <div class="upper">Blog</div>
            <div class="upper">Jobs</div>
            <div class="upper">Help</div>
            <div class="upper">Api</div>
            <div class="upper">Privacy</div>
            <div class="upper">Terms</div>
            <div class="upper">Top Accounts</div>
            <div class="upper">Locations</div>
            <div class="upper">Instagram Lite</div>
            <div class="upper">Contact Uploading & Non-Users</div>
            <div class="upper">Meta Verified</div>
        </div>

        <div class="lower_footer flex">
            <div class="lower flex align">
                <select name="language" id="select">
                    <option value="eng">English</option>
                    <option value="eng">English</option>
                    <option value="eng">English</option>
                    <option value="eng">English</option>
                    <option value="eng">English</option>
                    <option value="eng">English</option>
                    <option value="eng">English</option>
                </select>
            </div>
            <div class="lower">© 2023 Instagram from Meta</div>
        </div>

    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>