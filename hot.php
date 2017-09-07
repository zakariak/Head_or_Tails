<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>


<?php
function hot() {

$result = mt_rand(1, 4);

if ($result == 1 ) {
 echo 'Kop!' ;
}

elseif ($result == 2) {
 echo  'Munt!';
}

else {
echo  'Remise!';
}
}
hot();
echo "<br><br>";

function hot2() {
  $result = mt_rand(1, 4);
  switch($result) {
    case '1':
      echo '<img src="http://www.returnofkings.com/wp-content/uploads/2016/09/cartoon-hitler.jpg" width="250px" height="250px"  alt="">';
      break;

      case '2':
        echo '<img src="https://elimihate.files.wordpress.com/2013/09/yolo.jpeg" width="250px" height="250px" alt="">';
        break;

    default:
      echo '<img src="http://kern.humdrum.net/wp-content/uploads/2013/03/ashes.jpg" width="250px" height="250px" alt="">';
      break;
  }
}
hot2();
?>
<img src="" alt="">
