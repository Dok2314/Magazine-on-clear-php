<?php /* Smarty version Smarty-3.1.6, created on 2023-02-15 10:34:19
         compiled from "../views/default/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190570612263ecb3930da7f4-53901185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dbdba5b3e744fb99042215648705161ce6110d6' => 
    array (
      0 => '../views/default/header.tpl',
      1 => 1676457259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190570612263ecb3930da7f4-53901185',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_63ecb3930dca2',
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63ecb3930dca2')) {function content_63ecb3930dca2($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css">
</head>
<body>
<div id="header">
    <h1>My shop - интернет магазин</h1>
</div>

<div id="leftColumn">
    <div class="menuCaption">
        <div class="leftMenu">Меню</div>
        пункт1 <br>
        пункт2 <br>
        пункт3 <br>
    </div>
</div>

<div id="centerColumn">
    Center Column<?php }} ?>