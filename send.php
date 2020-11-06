<?php
$to = "<mymail@example.com>";
$email = $_POST['email'];
$subject = $_POST["theme"];
$page = 'Страница спасибо за комментарий';
$message = '
<html>
<body>
	<center>	
		<table border=1 cellpadding=6 cellspacing=0 width=90% bordercolor="#DBDBDB">
			<tr><td colspan=2 align=center bgcolor="#E4E4E4"><B>Информация</B></td></tr>
			<tr>
				<td><b>Откуда</b></td>
				<td>'.$page.'</td>
			</tr>
			<tr>
				<td><b>Адресат</b></td>
				<td><a href="mailto:'.$email.'">'.$email.'</a></td>
			</tr>
			<tr>
				<td><b>Тема</b></td>
				<td>'.$subject.'</td>
			</tr>
			<tr>
				<td><b>Сообщение</b></td>
				<td>'.$_POST['message'].'</td>
			</tr>
		</table>
	</center>	
</body>
</html>'; 
$headers  = "Content-type: text/html; charset=utf-8\r\n";
if (!empty($email) && !empty($subject) && !empty($message)) {
$result = mail($to, $subject, $message, $headers);
}	
if ($result) {
	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Сообщение успешно отправлено!</strong> Вы можете закрыть это сообщение.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}else{
	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Сообщение не отправлено!</strong> Попробуйте еще раз.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>
<!--Переадресация на главную страницу сайта, через 3 секунды-->
<!-- <script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="https://istanbul.kz");}
window.setTimeout("changeurl();",2000);
</script> -->