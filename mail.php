<?

if ($_POST['submit']) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: MyWeb';
    $to = 'm.amin.jaafari@gmail.com';
    $subject = 'پیام';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if (@mail($to, $subject, $body, $from)) {
        echo '<p>ممنون، پیام شما ارسال شد، به زودی پاسخ خواهم داد.</p>';
    } else {
        echo '<p>مشکلی پیش اومده، لطفا برگردید و دوباره امتحان کنید!</p>';
    }
}

?>