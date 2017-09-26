<?php
//1.POST受信
$title   = $_POST["title"];
$url     = $_POST["url"];
$comment = $_POST["comment"];



//2.DB接続
try {
  $pdo = new PDO('mysql:dbname=gs_db_22;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//３．
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(id, title, url, comment,　indate )VALUES(NULL, :a1, :a2, :a3, sysdate())");
$stmt->bindValue(':a1', $title, PDO::PARAM_STR);
$stmt->bindValue(':a2', $url, PDO::PARAM_STR);
$stmt->bindValue(':a3', $comment, PDO::PARAM_STR);
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
