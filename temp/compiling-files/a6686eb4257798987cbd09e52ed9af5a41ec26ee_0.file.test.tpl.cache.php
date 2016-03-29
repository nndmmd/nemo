<?php
/* Smarty version 3.1.29, created on 2016-03-14 08:56:41
  from "/var/www/html/tinylara/app/views/test.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56e67cc9143d16_19494358',
  'file_dependency' => 
  array (
    'a6686eb4257798987cbd09e52ed9af5a41ec26ee' => 
    array (
      0 => '/var/www/html/tinylara/app/views/test.tpl',
      1 => 1457945749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e67cc9143d16_19494358 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '94161240456e67cc912ff29_44052019';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $_smarty_tpl->tpl_vars['f1']->value;?>
</title>
</head>
<body>
  <div class="article">
    <h1><?php echo $_smarty_tpl->tpl_vars['f2']->value;?>
</h1>
    <div class="content">
      <?php echo $_smarty_tpl->tpl_vars['f3']->value;?>

    </div>
  </div>
  <ul class="foobar">
    <li>FooBar</li>
    <li><?php echo $_smarty_tpl->tpl_vars['f4']->value;?>
</li>
  </ul>
</body>
</html>
<?php }
}
