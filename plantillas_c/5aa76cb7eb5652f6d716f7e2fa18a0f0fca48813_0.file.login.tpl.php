<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-10 16:59:01
  from '/var/www/loginPracticaJavierAso/plantillas/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e417dc551f6b7_71069735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5aa76cb7eb5652f6d716f7e2fa18a0f0fca48813' => 
    array (
      0 => '/var/www/loginPracticaJavierAso/plantillas/login.tpl',
      1 => 1581348878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e417dc551f6b7_71069735 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 5 : Programación orientada a objetos en PHP -->
<!-- Ejemplo Tienda Web: login.php -->
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Ejemplo Tema 5: Login Tienda Web con Plantillas</title>
  <link href="tienda.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id='login'>
    <form action='login.php' method='post'>
    <fieldset >
        <legend>Login</legend>
        <div><span class='error'>
                  <?php if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            <?php }?>
                
            </span></div>
        <div class='campo'>
            <label for='usuario' >Usuario:</label><br/>
            <input type='text' name='usuario' id='usuario' maxlength="50" /><br/>
        </div>
        <div class='campo'>
            <label for='password' >Contraseña:</label><br/>
            <input type='password' name='password' id='password' maxlength="50" /><br/>
        </div>

        <div class='campo'>
            <input type='submit' name='enviar' value='Enviar' />
        </div>
    </fieldset>
    </form>
        <hr/>
        
          
    </div>
</body>
</html>
<?php }
}
