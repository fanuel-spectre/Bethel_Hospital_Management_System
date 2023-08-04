<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    body{
        background-color: whitesmoke;
    }
    input{
        width:40%;
        height: 5%;
        border:1px;
        border-radius: 05px;
        padding: 8px 15px 8px 15px;
        margin: 10px 0px 15px 0px;
        box-shadow: 1px 1px 2px 1px grey;
    }
    
    
    </style>
</head>
<body>
    
    <center>
        <h1>Retrive Password</h1>
        <form action="" method="POST">
            <input type="text" name="email" placeholder="Enter Email to Search"/><br>
            <input type="submit" name="search" value="Search Data">

        </form>
        <?php
        $connection = mysqli_connect("localhost","root","");
        $db= mysqli_select_db($connection,'ayat');

        if(isset($_POST['search']))
        {
            $email = $_POST['email'];
            $query="SELECT * FROM user where email='$email'";
            $query_run=mysqli_query($connection,$query);
            while($row=mysqli_fetch_array($query_run))
            {
                ?>
                <from action="" method="POST">
                    <!-- <input type="hidden" name="id" value="<?php echo $row['id']?>" /><br>
                    <input type="text" name="firstname"value="<?php echo $row['firstname']?>" /><br>
                    <input type="text" name="lastname"value="<?php echo $row['lastname']?>" /><br>
                    <input type="text" name="email"value="<?php echo $row['email']?>" /><br>
                    <input type="text" name="phoneno"value="<?php echo $row['phoneno']?>" /><br>
                    <input type="text" name="adress"value="<?php echo $row['adress']?>" /> <br>
                    <input type="text" name="username"value="<?php echo $row['username']?>" /><br> -->
                   Your Password: <input type="text" name="password"value="<?php echo $row['password']?>" /> <br>    
                       <a class="btn btn-primary" href="loggin.php" >Get Back</a>            

            </form>
            <?php
            }

        }


        ?>


<hr>
<br>

    </center>
</body>
</html>