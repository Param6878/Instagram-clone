<?php
include 'connect.php';

if (isset($_POST['login'])) {
    $username = $_POST['user_name'];
    $password = $_POST['password'];


    $sql = "SELECT*FROM `insta_record` WHERE username='$username' AND password='$password'";
    $result=mysqli_query($con, $sql);
    $num=mysqli_num_rows($result);
    
    if ($username =="" || $password =="" || $num != 1){
        echo " <div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>invaild</strong>!username or password   
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden=true>&times;</span>
            </button>
            </div>";
    }else{
        header('location:ahome.html'); 
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrgram</title>
    <link rel="icon" type="image" href="image/instagram.png">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="utility.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
</head>

<body>

    <div class="container flex justify">

        <!-- --------------------------left side--------------------------->

        <div class="left_side">
            <img src="image/home.png" alt="homelook">
        </div>

        <div class="slid_img" id="image_demo">
            <img src="image/pic1.png" id="pic1" class="active" alt="demo">
            <img src="image/pic2.png" id="pic2" alt="demo">
            <img src="image/pic3.png" id="pic3" alt="demo">
            <img src="image/pic4.png" id="pic4" alt="demo">
        </div>

        <!-- ------------------------right side--------------------------->

        <div class="right_side">

            <div class="topic flex justify flex_direction">
                <div class="in_logo flex justify">
                    <img src="image/logo1.jpg" alt="instagram">
                </div>
                <form action="" method="post">
                    <div class="username mx_2 justify flex">
                        <input type="text" name="user_name" id="username" placeholder="phone number, username or email">
                        <span id="user_masg"></span>
                    </div>
                    <div class="password mx_2 justify flex">
                        <input type="password" name="password" id="pass" placeholder="Password">
                        <span id="pass_masg"></span>
                    </div>


                    <div class="button mx_2 justify flex">
                        <a href="#"><input type="submit" name="login" value="login"></a>
                    </div>
                </form>

                <div class="or mx_2 justify flex">
                    <span class="line flex justify left_line"></span><span class="mid_or">OR</span><span class="line right_line"></span>
                </div>

                <div class="login  justify flex">
                    <a href="https://www.facebook.com/login/"><span class="flex align"><img class="facelogo" src="image/facebook.png" alt="facebook"> log in with
                            facebook</span></a>
                </div>

                <div class="forget mx_2 justify flex">
                    <span>Forget password?</span>
                </div>
            </div>

            <div class="create_acc">
                <span class="flex justify"> Don't have an account? <a class="face_link" href="signup.php">Sign up</a></span>
            </div>

            <div class="get_app flex justify flex_direction align">
                <span>Get the app.</span>
            </div>
            <div class="store flex justify align">
                <a href="https://play.google.com/store/apps/details?id=com.instagram.android&referrer=utm_source%3Dinstagramweb%26utm_campaign%3DloginPage%26ig_mid%3D0225D53B-C703-44CC-8257-87A51A622B60%26utm_content%3Dlo%26utm_medium%3Dbadge"><img class="playstore" src="image/play.png" alt="playstore"> </a>
                <a href="https://apps.microsoft.com/store/detail/instagram/9NBLGGH5L9XT?hl=en-in&gl=in"><img class="micro" src="image/micro.png" alt="microsoft"></a>
            </div>

        </div>
    </div>

    <!-- ------------------------------------footer--------------------------------- -->

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









    <script>
        setInterval(() => {
            changeimg()
        }, 3000);

        function changeimg() {

            var images = document
                .getElementById('image_demo')
                .getElementsByTagName('img')

            var i = 0;

            for (i = 0; i < images.length; i++) {

                var image = images[i];

                if (image.classList.contains('active')) {
                    image.classList.remove('active');

                    if (i == images.length - 1) {
                        var nextimg = images[0]
                        nextimg.classList.add('active')
                        break;
                    }

                    var nextimg = images[i + 1];
                    nextimg.classList.add('active');
                    break;
                }
            }
        }
      
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>