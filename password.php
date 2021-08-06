<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Amezon</title>
    <style>
.bg-f{
    display: block;
    border-radius: 4px;
    border: 1px #ddd solid;
    background-color: #fff;
        }
.bg-f h1{
    font-weight: 400;
    font-size: 33px;
    line-height: 1.2;
    margin-left: 18px;
        }
.img{
    background-position: -5px -130px;
    height: 75px;
    width: 131px;
    margin-left: 142px
        }
       
.btnn{
    display: block;
    position: relative;
    overflow: hidden;
    height: 38px;
    width: 396px;
    margin: 16px;
    background:#f0c14b;
        }
.btnn1{
    display: block;
    position: relative;
    overflow: hidden;
    height: 38px;
    width: 396px;
    margin: 16px;
    background:#e7e9ec;
    }
.a-button-text{
    background-color: transparent;
    border: 0;
    display: block;
    font-family: Arial,sans-serif;
    font-size: 13px;
    line-height: 29px;
    margin: 0;
    outline: 0;
    padding: 0 10px 0 11px;
    text-align: center;
    white-space: nowrap;
        }
.bg-f input{
    height: 38px;
    width: 396px;
    margin: 16px;
        }
.new h5{
    line-height: 1;
    font-size: 12px;
    color: #767676;
    font-weight: 400;
    z-index: 2;
    position: relative;
    display: inline-block;
    background-color: #fff;
    padding: 0 8px 0 7px;
}
.new::after{
    content: "";
    width: 100%;
    background-color: transparent;
    display: block;
    height: 1px;
    border-top: 1px solid #e7e7e7;
    position: absolute;
    top: 86%;
    margin-top: -1px;
    z-index: 1;
}
 /*        */
.by{
    margin:10px;
 }
 @media screen and (max-width: 600px) {
    .bg-f{
        width: 100%;
    }
    .bg-f input{
        width:88%;
    }
    .btnn1{
        width:299px;
    }
    .btnn {
        width:299px;
    }
    .img {
        margin-left:94px;
    }
 }
    </style>
</head>
<body>
    <section>
        <div class="container pt-3">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-5 pt-5">
                    <div class="logo">
                        <img src="image/download.png" class="img" alt="">
                    </div>
                    <div class="bg-f">
                        <h1 >
                             Sign-In
                         </h1>
                         <span style="margin-left: 18px;"><?php echo $_SESSION['email'];?> <a href="index.php" style="margin-left: 10px"> Change</a></span>
                         <form>
                             
                             <div class="form-group">
                                <label for="password" style="margin-left: 18px;">password</label> <span><a href="forget.php" style="margin-left: 150px">Forgot your password?</a></span>
                                <input type="password" name="password" class="form-control" id="" required >

                            </div>
                            
                            <button type="submit" name="login" class="btn btnn"><a href="welcome.php" style="color: #000;"> Sign-In</a></button>

                        </form>
                        <?php
				
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"amez");
					$query = "select * from users where password = '$_POST[password]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						if($row['password'] == $_POST['password']){
							
								$_SESSION['name'] = $row['name'];
								$_SESSION['password'] = $row['password'];
								header("Location:welcome.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Email</span></center>
								<?php
							}
						
					}
				}
			?>          
                    </div>
                    
                <div class="col-md-4"></div>
            </div>
            
        </div>
    </section>

    
</body>
</html>
