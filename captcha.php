<?php
   require('php-captcha.inc.php');
   $fonts = array('fonts/VeraBd.ttf', 'fonts/VeraIt.ttf', 'fonts/Vera.ttf');
   $captcha = new PhpCaptcha($fonts, 140, 50);
   $captcha->setNumChars(4);
   $captcha->SetNumLines(80);
   $captcha->UseColour(true);
   //$captcha->DisplayShadow(true);
   $captcha->SetMinFontSize(13);
   $captcha->SetMaxFontSize(19);
   $captcha->SetCharSet('A-Z,1-9');
   $captcha->Create();
?>
