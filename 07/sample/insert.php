<?php
//1.POST受信
$name   = $_POST["name"];
$email  = $_POST["email"];
$naiyou = $_POST["naiyou"];



//2.DB接続
try {
  $pdo = new PDO('mysql:dbname=gs_db_22;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//３．
$stmt = $pdo->prepare("INSERT INTO gs_an_table(id, name, email, naiyou,
indate )VALUES(NULL, :a1, :a2, :a3, sysdate())");
$stmt->bindValue(':a1', $name, PDO::PARAM_STR);
$stmt->bindValue(':a2', $email, PDO::PARAM_STR);
$stmt->bindValue(':a3', $naiyou, PDO::PARAM_STR);
$status = $stmt->execute();

//４．
if($status==false){
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);

}else{
  //必ずスペース入れる
  header("Location: select.php");
  exit;

}
?>
