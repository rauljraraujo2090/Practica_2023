<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsAp</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <!-- Style of the plugin -->
     <link rel="stylesheet" href="components/Font Awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="whatsapp-chat-support.css">

</head>
<body>
   
    <!-- Button Whatsapp Structure -->
  <div class="whatsapp_chat_support wcs_fixed_right" id="button-w">
    <div class="wcs_button_label">
            Contáctanos
        </div>  
    <div class="wcs_button wcs_button_circle">
        <span><img src="whatsap/whatsapp.png"></span>
    </div>  
    
    <div class="wcs_popup">
        <div class="wcs_popup_close">
            <span class="fa fa-close"></span>
        </div>
        <div class="wcs_popup_header">
        <i class="fa-brands fa-whatsapp"></i>
            <strong>Servicio al cliente</strong>
            
            <div class="wcs_popup_header_description">¿Necesidad de ayuda? Chatea con nosotros en Whatsapp</div>

        </div>  
        <div class="wcs_popup_input" 
            data-number="528123861273"
            data-availability='{ "monday":"07:00-22:30", "tuesday":"07:00-22:30", "wednesday":"07:7030-22:30", "thursday":"07:00-22:30", "friday":"07:00-22:30", "saturday":"09:00-18:30", "sunday":"09:00-22:30" }'>
            <input type="text" placeholder="Escribir pregunta!" />
            <i class="fa fa-play"></i>
        </div>
        <div class="wcs_popup_avatar">
            <img src="whatsap/raul.jfif" alt="">
        </div>
    </div>
</div>


    <!-- jQuery 1.8+ -->
<script src="components/jQuery/jquery-1.11.3.min.js"></script>
    <!-- Plug-->
<script src="components/moment/moment.min.js"></script>
<script src="components/moment/moment-timezone-with-data.min.js"></script> <!-- spanish language (es) -->
<script src="whatsapp-chat-support.js"></script>
<script>
   $('#button-w').whatsappChatSupport({
        defaultMsg : '',
    });
</script>

</body>
</html>
