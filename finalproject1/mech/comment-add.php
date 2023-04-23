<?php
require_once ("dbcon.php");
$commentId = isset($_POST['comment_id']) ? $_POST['comment_id'] : "";
$comment = isset($_POST['comment']) ? $_POST['comment'] : "";
$commentSenderName = isset($_POST['name']) ? $_POST['name'] : "";
$subject = isset($_POST['subject']) ? $_POST['subject'] : "";
$date = date('Y-m-d H:i:s');

$sql = "INSERT INTO tbl_comment1(parent_comment_id,comment,comment_sender_name,date,subject) VALUES ('" . $commentId . "','" . $comment . "','" . $commentSenderName . "','" . $date . "','" . $subject . "')";

$result = mysqli_query($con, $sql);

if (! $result) {
    $result = mysqli_error($con);
}
echo $result;
?>
