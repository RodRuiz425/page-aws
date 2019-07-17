<?php
    if(isset($_POST['submit'])){

        $name = $_POST['full-name'];
        $phone = $_POST['phone-num'];
        $mailFrom = $_POST['e-mail'];
        $curso = $_POST['curso'];
        $plantel = $_POST['plantel'];
        $hora = $_POST['hora'];
        $datosCita = '\n'.$name.'\n'.$phone.'\n'.$mailFrom.'\n'.$curso.'\n'.$plantel.'\n'.$hora.'\n';

        $mailTo = 'rodrigo.ruiz.voca@outlook.com';
        $headers = 'Mail enviado por: '.$mailFrom;
        $txt = 'Cita programada por: '.$name.'\n\n'.$datosCita;
        $subject = 'Nueva Cita';

        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.php?mailsend");
    }
?>