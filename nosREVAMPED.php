<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./Elcss.css">
</head>

<body>

</body>

</html>
<?php



if (isset($_POST["send"])) {
    $empfaenger = $_POST['empfaenger'];
    $betreff = $_POST['betreff'];
    $inhalt = $_POST['inhalt'];
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: Google";



    mail($empfaenger, $betreff, $inhalt, $headers);
    header('Location: uno.html');
exit;
}
?>

<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="generator" content="Bootply" />
    <h1 id="ede">Enviador Mail</h1>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/styles.css" rel="stylesheet">
</head>

<body>

    <div style="width:450px;margin:50px auto;">
        <div class="panel panel-primary">

            <div class="panel-body">
                <form action="" method="POST">
                    <input type="hidden" name="send">
                    <table style="width:400px;">
                        <tr>
                            <td class="no">Mail </td>

                            <td><input type="email" class="form-control" name="empfaenger" required /><br /></td>
                        </tr>
                        <tr>
                            <td class="no">Asunto:</td>

                            <td><input class="form-control" type="text" name="betreff" /><br /></td>
                        </tr>
                        <tr>

                            <td class="no">Contenido: </td>

                            <td><textarea style="width:300px;height:150px;" name="inhalt" class="form-control"></textarea><br /></td>
                        </tr>

                        <tr>
                            <td> </td>
                            <td><br />
                                <div id="div">

                                    <input type="submit" class="btn-primary" value="Send" id="send" />
                                </div>
                            </td>
                        </tr>

                    </table><br />

                </form>
            </div>
        </div>
    </div>


</body>


</html>