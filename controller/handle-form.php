<?php
    use PHPMailer\PHPMailer\PHPMailer;	
    use PHPMailer\PHPMailer\Exception;
    
    require '../assets/phpmailer/src/Exception.php';
	require '../assets/phpmailer/src/PHPMailer.php';
	require '../assets/phpmailer/src/SMTP.php';

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $company_name = $_POST['company-name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $message = $_POST['message'];
        $to = 'aikido763@gmail.com';

        $mail = new PHPMailer;                         
        try {
            //Server settings
            $mail->isSMTP();                                      
            $mail->Host = 'smtp.gmail.com';  
            $mail->SMTPAuth = true;                               
            $mail->Username = 'cloudroshanp@gmail.com';                 
            $mail->Password = 'cloud_roshan';                           
            $mail->SMTPSecure = 'ssl';                            
            $mail->Port = 465;                                   
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            //Recipients
            $mail->setFrom('cloudroshanp@gmail.com', '');
            $mail->addAddress($email);

            //Content
            $mail->isHTML(true);                             
            $mail->Subject = 'Contact Company';
            $mail->Body    = 'Hello! Got my mail';

            if($mail->send()) {
                    header("Refresh: 2; url=../pages/company.php");
                    echo 'Mail has ben sent successfully!!';
            }

        }catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }
?>