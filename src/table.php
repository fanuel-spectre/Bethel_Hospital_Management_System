<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table width ="600" border="1" cellpadding="1" cellplacing="1">
        <tr>
            <th>name</th>
            <th>age</th>
            <th>nffe</th>
            <th>namdde</th>
            <th>phone</th>
            <tr>
            <?php
                        $con=mysqli_connect("localhost","root","","ayat");
                        $s=mysqli_query($con,"SELECT * FROM user");
                        while ($r=mysqli_fetch_array($s)){
                        ?>
                        <tr>
                          <th><?php echo $r['firstname'];?> </th>
                          <th><?php echo $r['lastname'];?> </th>
                          <th><?php echo $r['email'];?> </th>
                          <th><?php echo $r['phoneno'];?> </th>
                          <th><?php echo $r['adress'];?> </th>
                          <th><a href="#" data-toggle="modal" data-target="#contactModal3"><strong><i class="fa fa-info-circle"></i> Info</strong></a></th>
                        </tr>
                        <?php
                          }
                          ?>
                 </table>
      
                 <br><br>
                 <table width ="600" border="1" cellpadding="1" cellplacing="1">
        <tr>
            <th>name</th>
            <th>age</th>
            <th>nffe</th>
            <th>namdde</th>
            <th>phone</th>
            <tr>
            <?php
                        $con=mysqli_connect("localhost","root","","ayat");
                        $s=mysqli_query($con,"SELECT * FROM user");
                        while ($r=mysqli_fetch_array($s)){
                        ?>
                        <tr>
                          <th><?php echo $r['firstname'];?> </th>
                          <th><?php echo $r['lastname'];?> </th>
                          <th><?php echo $r['email'];?> </th>
                          <th><?php echo $r['phoneno'];?> </th>
                          <th><?php echo $r['adress'];?> </th>
                          <th><a href="#" data-toggle="modal" data-target="#contactModal3"><strong><i class="fa fa-info-circle"></i> Info</strong></a></th>
                        </tr>
                        <?php
                          }
                          ?>
                 </table>
      
</body>
</html>
<html>
    