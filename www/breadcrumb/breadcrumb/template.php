<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
    return "";

$strReturn = '';

$strReturn .= '<div class="breadcrumbs"><div class="container"><div class="breadcrumbs-body">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);

    if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
    {
        $strReturn .= '
				<a class="breadcrumbs__link" href="'.$arResult[$index]["LINK"].'" title="'.$title.'">'.$title.'</a>
				<span class="breadcrumbs__sepp">|</span>';


    }
    else
    {
        $strReturn .= '
			<span class="breadcrumbs__item">'.$title.'</span>';
    }
}

$strReturn .= '<div style="clear:both"></div></div></div></div>';

return $strReturn;



