
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
   <h1>hello world</h1>
   <?php
   $db = mysqli_connect("localhost", "root", "", "hello");
   $query = "SELECT * FROM hello ";
   $result = mysqli_query($db, $query);
   foreach ($result as $result) {
     echo '<p>'.$result['name'].' <span> '.$result['residence'].'<span><p><br>';
   };
    ?>
  </body>
</html>
