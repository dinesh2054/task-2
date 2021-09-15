<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Managers</title>
</head>
<body>
    <?php
        session_start();
        include "include/admin_navbar.php";
    ?>
    <section class=" section-t4">
        <div class="container">
            <div class="title-box-d">
                <h3 class="title-d">Property Managers</h3>
            </div>
            <div class="container">
                <div class="row align-items-center" style="padding: 15px;">
                    <?php
                       $query= "select user_name, user_image, contact, email, user_type from user where user_type='land owner';";
                       $result = mysqli_query($con,$query);
                       if(mysqli_num_rows($result)>0){
                           while($row= mysqli_fetch_assoc($result)){
                               ?>
                               <div class="col-md-5" >
                                    <div class="card"  style=" padding: 15px; height: 380px">
                                        <div class="col-md-8">
                                            <div class="col-md-4">
                                                
                                                <img class="rounded center" height="60" width="80" src='images/<?php echo $row['user_image'] ?>' alt="">
                                            </div>
                                            <div class="row">
                                                <div class="card-body">
                                                    <h3 class="card-title">
                                                        <?php echo $row['user_name']; ?>
                                                    </h3>
                                                    <p class="card-text"><b>Type:</b> <?php echo $row['user_type']; ?></p>
                                                    <p class="card-text"><b>Contact:</b> <?php echo $row['contact']; ?></p>
                                                    <p class="card-text"><b>Email:</b> <?php echo $row['email']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <?php
                           }
                       }else{ echo ""; }
                    ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>