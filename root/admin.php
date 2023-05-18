<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tutor Home</title>
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">
        <meta name="description" content="">
         <meta name="author" content="LibertyL">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        
    </head>
    <body>
        <!--<h1>Tutor Homepage</h1>-->
        <?php include('components/header.php'); ?>

        
        <?php 
            include('checkAdmin.php');
            //showMenu();
        ?>

        <!--dummy text-->
            <h1>Welcome Admin</h1><hr>
        <main>
            <div class="info">
                <h2>Welcome to Ace Training</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam nisi, accusamus consequuntur vitae sunt exercitationem porro id, fugit eum laborum nemo quia. Dolore autem architecto voluptatibus illum perspiciatis, quas nisi.</p>
            
                <h3>Manage your courses</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam nisi, accusamus consequuntur vitae sunt exercitationem porro id, fugit eum laborum nemo quia. Dolore autem architecto voluptatibus illum perspiciatis, quas nisi.</p>
            
                <h3>Enroll Students</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam nisi, accusamus consequuntur vitae sunt exercitationem porro id, fugit eum laborum nemo quia. Dolore autem architecto voluptatibus illum perspiciatis, quas nisi.</p>
        

                <h3>Upload documents and quizzess</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam nisi, accusamus consequuntur vitae sunt exercitationem porro id, fugit eum laborum nemo quia. Dolore autem architecto voluptatibus illum perspiciatis, quas nisi.</p>
            
                <h3>And more probably!</h3>
            </div>
        </main>
        <div>
            <?php include('components/footer.php'); ?>
        </div>
        <script src="" async defer></script>
    </body>
</html>
