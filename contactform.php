<?php
        /*
        $name = $_POST['full-name'];
        $phone = $_POST['phone-num'];
        $mailFrom = $_POST['e-mail'];
        $curso = $_POST['curso'];
        $plantel = $_POST['plantel'];
        $hora = $_POST['hora'];
        $datosCita = '\n'.$name.'\n'.$phone.'\n'.$mailFrom.'\n'.$curso.'\n'.$plantel.'\n'.$hora.'\n';
        */
        
        require_once('PHPMailer/PHPMailerAutoload.php');
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = '465';
        $mail->isHTML();
        $mail->Username = 'american.page.manager@gmail.com';
        $mail->Password = 'aws.page.manager.170719';
        $mail->SetFrom('aws.page.manager.170719');
        $mail->Subject = 'Nueva Cita';
        $mail->Body = 'hello world';
        $mail->AddAddress('rodrigoruiz425@gmail.com');

        $mail->Send();
        header("Location: index.php?mailsend");
?>