
<?php 
var_dump($_POST);
if(isset($_POST['submit'])){
    $to = "istanbul.uka@gmail.com"; // Здесь нужно написать e-mail, куда будут приходить письма
    $from = "mail@istanbul.kz"; // this is the sender's Email address  $_POST['message']
    // $name = $_POST['name']; 
    $subject = "Форма отправки сообщений с сайта";
    $subject2 = "Copy of your form submission";
    $message = "Клиент c номером " . $_POST['email'] . " оставил заявку на звонок!" . "\n\n" .;
    $message2 = "Here is a copy of your message " . $email . "\n\n" .;
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    $test = mail($to,$subject,$message,$headers);
    var_dump($test);
   // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - Отключено!
    echo "Сообщение отправлено. Спасибо Вам " . $email . ", мы скоро свяжемся с Вами.";
	echo "<br /><br /><a href='https://istanbul.kz'>Вернуться на сайт.</a>";

}

?>
<!--Переадресация на главную страницу сайта, через 3 секунды-->
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="https://istanbul.kz");}
window.setTimeout("changeurl();",2000);
</script>