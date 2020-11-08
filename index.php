<!-- <?php
  $insert = false;
  if(isset($_POST['name'])){
  
   $server = "localhost";
   $username = "root";
   $password = "";
  
   $con = mysqli_connect($server,$username,$password);
  
   if(!$con)
   {
       die("connect is not correct" .mysqli_connect_error());
   }
   // else
   // {
   //    echo "Succesfully connected";
   // }

   $name= $_POST['name'];
   $email= $_POST['email'];
   $message= $_POST['message'];

   $sql = "INSERT INTO `simulation`.`simulation` ( `name`, `email`, `message`, `dt`) VALUES ('Aryaan', 'aryaangkp53@gmail.com', 'Nice', current_timestamp());";

   if($con->query($sql) == true)
  {
    //  echo "successful";
    $insert = true;
  }
  else{
      echo "Error $sql <br> $con->error ";
      }

  $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <div class="container">
        <h1>Simulation</h1>
        <div class="row">
            <div class="col">
                <div class="feature_img">
                    <img src="Screenshot (8).png" width="100%" alt="">
                    <img src="play.png" class="play-btn" onclick="playVideo('bandicam 2020-11-07 22-07-49-912.mp4')">
                </div>
            </div>
        </div>
        <form action="index.php" method="post" class="form">
            
            <input type="text" name="name" id="name" placeholder="    enter your name"><br>
            
            <input type="email" name="email" id="email" placeholder="    enter your email"><br>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="    Give your suggestion"></textarea>    
            <br><button type="submit" class="btn">Submit</button>
            </form>
    </div>
    <div class="video-player" id="videoPlayer">
        <video width="100%"" controls autoplay id="myVideo">
            <source src="bandicam 2020-11-07 22-07-49-912.mp4" type="video/mp4">
        </video>
        <img src="close.png" class="close-btn" onclick="stopVideo()">
    </div>

   <script src="index.js"></script>
</body>
</html>

INSERT INTO `simulation` (`s.no`, `name`, `email`, `message`, `dt`) VALUES ('1', 'Aryaan', 'aryaangkp53@gmail.com', 'Nice', current_timestamp()); -->