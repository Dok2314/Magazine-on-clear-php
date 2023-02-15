<?php

function testAction()
{
    echo 'IndexController.php > testAction';
}

function indexAction(Smarty $smarty)
{
    $smarty->assign('pageTitle', 'Главная страница сайта');

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}