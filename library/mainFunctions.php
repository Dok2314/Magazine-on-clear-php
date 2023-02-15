<?php

/**
 * @param string $controllerName название контроллера
 * @param string $actionName название функции обработки страницы
 * @return void
 */
function loadPage(Smarty $smarty, $controllerName, $actionName = 'index')
{
    include_once PATH_PREFIX . $controllerName . PATH_POSTFIX;

    $function = $actionName . 'Action';
    $function($smarty);
}

function loadTemplate(Smarty $smarty, $templateName)
{
    $smarty->display($templateName . TEMPLATE_POSTFIX);
}

function d($value = null, $die = 1)
{
    echo '<br />Debug: <br /><pre>';
    var_dump($value);
    echo '</pre>';

    if($die) die;
}