<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, height=device-height, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bitz - Registar Usuario Nuevo</title>

    <link href='https://fonts.googleapis.com/css?family=Quicksand:300,400' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    <link rel="stylesheet" href="css/style.css">
    
    <link rel="shortcut icon" type="image/ico" href="img/favicon.ico"/>
    <link rel="manifest" href="manifest.json">

    <!-- Android -->
    <meta name="theme-color" content="#3498db">

    <!-- IOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- <link rel="apple-touch-icon" href="img/icons/icon-192x192.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/icons/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/icons/icon-192x192.png">
    <link rel="apple-touch-icon" sizes="167x167" href="img/icons/icon-152x152.png"> -->

    <!-- iPhone Xs Max (1242px x 2688px) --> 
    <!-- <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)" href="img/icons-ios/apple-launch-1242x2688.png"> -->
    <!-- iPhone Xr (828px x 1792px) --> 
    <!-- <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)" href="img/icons-ios/apple-launch-828x1792.png"> -->
    <!-- iPhone X, Xs (1125px x 2436px) --> 
    <!-- <link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" href="img/icons-ios/apple-launch-1125x2436.png"> -->
    <!-- iPhone 8 Plus, 7 Plus, 6s Plus, 6 Plus (1242px x 2208px) --> 
    <!-- <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3)" href="img/icons-ios/apple-launch-1242x2208.png"> -->
    <!-- iPhone 8, 7, 6s, 6 (750px x 1334px) --> 
    <!-- <link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" href="img/icons-ios/apple-launch-750x1334.png"> -->

    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <meta name="apple-mobile-web-app-title" content="Bitz">





</head>
<body>
    <div class="login-box">        
        <div><img src="img/BizLogin.png" alt="Biz"  class="avatar"></div>
        <form action="" method="post" class="needs-validation row register-form">
          <!-- USERNAME INPUT -->
            <div class="campos_login">
                <div class="form-group">
                    <input type="text" name="primerNombre_s"  id="primerNombre_s" placeholder="Primer Nombre" class="form-control" required>
                </div> 
            </div>
            <div class="campos_login">
                <div class="form-group">
                    <input type="text" name="segundoNombre_s"  id="segundoNombre_s" placeholder="Segundo Nombre" class="form-control" >
                </div> 
            </div>
            <div class="campos_login">
                <div class="form-group">
                    <input type="text" name="primerApellido_s"  id="primerApellido_s" placeholder="Primer Apellido" class="form-control" required>
                </div> 
            </div>
            <div class="campos_login">
                <div class="form-group">
                    <input type="text" name="segundoApellido_s"  id="segundoApellido_s" placeholder="Segundo Apellido" class="form-control" >
                </div> 
            </div>
            <div class="campos_login">
                <div class="form-group">
                    <input name="email_s" type="email" id="email_s" placeholder="Correo" class="form-control" required>
                </div> 
            </div>
            <div class="campos_login">
                <div class="form-group">
                    <input type="password" name="password_s" id="password_s" class="form-control password_s" placeholder="Contraseña" required>
                </div>	
            </div>
            <br>
            <input type="submit" value="Registrar">
            <div class="text_login">
                <a id="olvidoclave" style="cursor: pointer;"  href="recuperar.php">Recuperar Clave</a>
                &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a id="home" style="cursor: pointer;"  href="./">Home</a>
            </div>          
            <br><br>
                       
        </form>
    </div>

       
    
        <script src="js/libs/jquery.js"></script>
        <script src="js/app.js"></script>
    
</body>
</html>