<?php
include "connectdb.php";
$newUser = $newPassword = " ";

function test_input_data($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);

  return $data;
}

//validam datele introduse
if($_SERVER["REQUEST_METHOD"] == "GET") {
  echo "error";
}elseif ($_SERVER["REQUEST_METHOD"] == "POST"){
  $newUser = test_input_data($_POST["newUserName"]);
  $newPassword = test_input_data($_POST["newPassword"]);



//verificam datele introduse

if(empty($newUser)) {
  echo "nume necesar";
}elseif(empty($newPassword)) {
  echo "password";
}else {

  //verificam ca userul sa nu existe deja in db
  $result = $pdo->query("SELECT userName FROM useraccounts");
  /*while ($user = $result->fetch(PDO::FETCH_ASSOC)) {
    print_r($user);
  }*/
  foreach($result as $user) {
    if($newUser === $user) {
      echo "user deja existent";
    }else{
      $prep = $pdo->prepare("INSERT INTO useraccounts (userName, userPassword) VALUES(:user, :password)");
      $prep->execute([":user" => $newUser, ":password" => $newPassword]);
      return;
    }
  }
}
}
 ?>
