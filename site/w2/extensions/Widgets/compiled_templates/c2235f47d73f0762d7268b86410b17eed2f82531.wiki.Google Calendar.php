<?php /* Smarty version Smarty-3.1.7, created on 2013-10-18 10:07:51
         compiled from "wiki:Google Calendar" */ ?>
<?php /*%%SmartyHeaderCode:19683093795260ec57205672-93869059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2235f47d73f0762d7268b86410b17eed2f82531' => 
    array (
      0 => 'wiki:Google Calendar',
      1 => 2147483647,
      2 => 'wiki',
    ),
  ),
  'nocache_hash' => '19683093795260ec57205672-93869059',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'title' => 0,
    'pvttk' => 0,
    'id' => 0,
    'i' => 0,
    'color' => 0,
    'c' => 0,
    'height' => 0,
    'showtitle' => 0,
    'shownav' => 0,
    'showdate' => 0,
    'showtabs' => 0,
    'showcals' => 0,
    'showprint' => 0,
    'showtz' => 0,
    'weekstart' => 0,
    'lang' => 0,
    'view' => 0,
    'timezone' => 0,
    'bgcolor' => 0,
    'width' => 0,
    'border' => 0,
    'style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5260ec5762090',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5260ec5762090')) {function content_5260ec5762090($_smarty_tpl) {?><iframe src="//www.google.com/calendar/<?php if (isset($_smarty_tpl->tpl_vars['app']->value)){?>hosted/<?php echo str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['app']->value));?>
/<?php }?>embed?<?php if (isset($_smarty_tpl->tpl_vars['title']->value)){?>title=<?php echo str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['title']->value));?>
&amp;<?php }?><?php if (isset($_smarty_tpl->tpl_vars['pvttk']->value)){?>pvttk=<?php echo str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['pvttk']->value));?>
&amp;<?php }?><?php if (is_array($_smarty_tpl->tpl_vars['id']->value)){?><?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['id']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>src=<?php echo str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['i']->value));?>
&amp;<?php } ?><?php }else{ ?>src=<?php echo str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['id']->value));?>
&amp;<?php }?><?php if (is_array($_smarty_tpl->tpl_vars['color']->value)){?><?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['color']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>color=%23<?php echo str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['c']->value));?>
&amp;<?php } ?><?php }else{ ?>color=%23<?php echo str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['color']->value));?>
&amp;<?php }?>height=<?php echo (($tmp = @str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['height']->value)))===null||$tmp==='' ? 600 : $tmp);?>
&amp;showTitle=<?php if (isset($_smarty_tpl->tpl_vars['showtitle']->value)&&!$_smarty_tpl->tpl_vars['showtitle']->value){?>0<?php }else{ ?>1<?php }?>&amp;showNav=<?php if (isset($_smarty_tpl->tpl_vars['shownav']->value)&&!$_smarty_tpl->tpl_vars['shownav']->value){?>0<?php }else{ ?>1<?php }?>&amp;showDate=<?php if (isset($_smarty_tpl->tpl_vars['showdate']->value)&&!$_smarty_tpl->tpl_vars['showdate']->value){?>0<?php }else{ ?>1<?php }?>&amp;showTabs=<?php if (isset($_smarty_tpl->tpl_vars['showtabs']->value)&&!$_smarty_tpl->tpl_vars['showtabs']->value){?>0<?php }else{ ?>1<?php }?>&amp;showCalendars=<?php if (isset($_smarty_tpl->tpl_vars['showcals']->value)&&!$_smarty_tpl->tpl_vars['showcals']->value){?>0<?php }else{ ?>1<?php }?>&amp;showPrint=<?php if (isset($_smarty_tpl->tpl_vars['showprint']->value)&&!$_smarty_tpl->tpl_vars['showprint']->value){?>0<?php }else{ ?>1<?php }?>&amp;showTz=<?php if (isset($_smarty_tpl->tpl_vars['showtz']->value)&&!$_smarty_tpl->tpl_vars['showtz']->value){?>0<?php }else{ ?>1<?php }?>&amp;wkst=<?php echo (($tmp = @str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['weekstart']->value)))===null||$tmp==='' ? 1 : $tmp);?>
&amp;hl=<?php echo (($tmp = @str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['lang']->value)))===null||$tmp==='' ? 'en' : $tmp);?>
&amp;mode=<?php echo (($tmp = @str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['view']->value)))===null||$tmp==='' ? 'MONTH' : $tmp);?>
&amp;<?php if (isset($_smarty_tpl->tpl_vars['timezone']->value)){?>ctz=<?php echo str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['timezone']->value));?>
&amp;<?php }?><?php if (isset($_smarty_tpl->tpl_vars['bgcolor']->value)){?>bgcolor=%23<?php echo str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['bgcolor']->value));?>
<?php }?>" width="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '100%' : $tmp);?>
" height="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['height']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? 600 : $tmp);?>
" frameborder="0" scrolling="no"<?php if (isset($_smarty_tpl->tpl_vars['border']->value)){?> style="border: solid 1px #777"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['style']->value)){?> style="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['style']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>></iframe><?php }} ?>