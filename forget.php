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
                        Password assistance
                         </h1>
                         <p style="margin-left: 18px;">
                         Enter the email address or mobile phone number associated with your Amazon account.
                         </p>
                         <form action="update.php" method="post">
				<div class="form-group">
					<label style="margin-left: 18px;">Enter Current Password:</label>
					<input type="password" name="old_password" class="form-control" required>
				</div>
				<div class="form-group">
					<label style="margin-left: 18px;">Enter New Password:</label>
					<input type="password" name="new_password" class="form-control" required>
				</div>
				<button type="submit" name="update" class="btnn">Update Password</button>
			</form>
                      
                        
                        
                    </div>
                    <h5>Has your email or mobile number changed?</h5>
                    <span>If you no longer use the email address associated with your Amazon account, you may contact <a href="#">Customer Service</a>  for help restoring access to your account.</span>
                    
                <div class="col-md-4"></div>
            </div>
            
        </div>
    </section>

    
</body>
</html>

