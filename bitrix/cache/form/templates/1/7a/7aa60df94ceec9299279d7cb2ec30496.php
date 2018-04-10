<?
if($INCLUDE_FROM_CACHE!='Y')return false;
$datecreate = '001523111630';
$dateexpire = '001525703630';
$ser_content = 'a:2:{s:7:"CONTENT";s:0:"";s:4:"VARS";a:1:{s:13:"FORM_TEMPLATE";s:799:"<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?=$FORM->ShowFormHeader();?>Ваше имя <?=$FORM->ShowRequired()?>     <?=$FORM->ShowInput(\'new_field_25311\')?> 
<div>Ваша фамилия      <?=$FORM->ShowInput(\'new_field_99668\')?> 
  <div>Email<?=$FORM->ShowRequired()?>              <?=$FORM->ShowInput(\'new_field_21769\')?></div>
 
  <div>Телефон                 <?=$FORM->ShowInput(\'new_field_83853\')?></div>
 
  <div>Дата рождения      <?=$FORM->ShowInput(\'new_field_13726\')?></div>

  <div>
    <br />
  </div>
 
  <div><?=$FORM->ShowSubmitButton("","")?></div>

  <div>
    <br />
  </div>

  <div><?=$FORM->ShowResultStatus("")?></div>
 
  <div></div>
 </div>
 <?=$FORM->ShowFormFooter();?>";}}';
return true;
?>