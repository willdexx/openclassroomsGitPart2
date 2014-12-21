<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Openclassrooms Activite</title>
    <style type="text/css">
        .main-container{width:80%; margin:0 auto;}
        form{margin:10px 0}
        form input[type="text"]{padding:2px 5px}
        form input[type="submit"]{padding:2px 10px; height:23px; background:#e6e6e6; border:1px solid #adadad; color:#333}
        .success{background-color:#dff0d8; color:#3c763d; margin:10px 0 0 0; padding:15px; border:1px solid #d6e9c6}
        form input[type="submit"]:hover{background:#dedede; cursor: pointer}
        .error{background-color:#f2dede; color:#a94442; margin:10px 0 0 0; padding:15px; border:1px solid #ebccd1}
    </style>
    </style>
</head>

<body>
    <div class="main-container">
        <h1>Formulaire simple</h1>
        <?php include( dirname(__FILE__).DIRECTORY_SEPARATOR.'form-process.php' ); ?>
        <?php include( dirname(__FILE__).DIRECTORY_SEPARATOR.'form.php' ); ?>
    </div>
</body>
</html>