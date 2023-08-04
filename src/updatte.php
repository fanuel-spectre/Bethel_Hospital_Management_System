<?php
mysql_connect("localhost","root","");
mysql_select_db("ayat");
$firstname = $_GET['a'];
$s=mysql_query("SELECT * from user where firstname='$firstname'");

?>
<table border=1>
    <form action="" method="post"></form>
 <?php while($r=mysql_fetch_array($s)){
                        ?>
                        <tr>
                        
                          <th><input type="hidden" name=firstname value="<?php echo $r['firstname'];?>">
                              <input type="text" name=lastname value="<?php echo $r['lastname'];?>"> </th>
                        </tr>
                        <tr>
                          <th><input type="text" name=email value="<?php echo $r['email'];?>"> </th>
                        </tr>
                        <tr>
                          <th><input type="text" name=phoneno value="<?php echo $r['phoneno'];?>"> </th>
                        </tr>
                        <tr>
                          <th><input type="text" name=adress value="<?php echo $r['adress'];?>"></th>
                         </tr>
                          <th><input type="submit" name="s" value="Change Now"></th>
                        </tr>
                        <?php
                          }
                          ?>
                          </table>
                          <?php
                          if(isset($_POST['s']))
                          {
                              $lastname=$_POST['lastname'];
                              $email=$_POST['email'];
                              $phoneno=$_POST['phoneno'];
                              $adress=$_POST['adress'];
                              $firstname=$_POST['firstname'];

                              mysql_connect("localhost","root","");
                              mysql_select_db("ayat");
                              mysql_query("update user set lastname='$lastname', email='$email', phoneno='$phoneno', adress='$adress' where firstname='$firstname'");
                             echo "<script>window.location.href='admin.php'</script>";

                          }
                          
                          ?>
                       
                                    