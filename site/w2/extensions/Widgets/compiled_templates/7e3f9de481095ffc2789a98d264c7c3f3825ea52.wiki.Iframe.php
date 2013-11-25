<?php /* Smarty version Smarty-3.1.7, created on 2013-06-06 16:24:34
         compiled from "wiki:Iframe" */ ?>
<?php /*%%SmartyHeaderCode:100311412751b09ba24a1eb6-80885608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e3f9de481095ffc2789a98d264c7c3f3825ea52' => 
    array (
      0 => 'wiki:Iframe',
      1 => 2147483647,
      2 => 'wiki',
    ),
  ),
  'nocache_hash' => '100311412751b09ba24a1eb6-80885608',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'border' => 0,
    'width' => 0,
    'height' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51b09ba259d6e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b09ba259d6e')) {function content_51b09ba259d6e($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_validate')) include '/var/www/cni/site/w/extensions/Widgets/smarty_plugins/modifier.validate.php';
?><iframe src="<?php echo smarty_modifier_validate($_smarty_tpl->tpl_vars['url']->value,'url');?>
" frameborder="<?php echo (($tmp = @smarty_modifier_validate($_smarty_tpl->tpl_vars['border']->value,'int'))===null||$tmp==='' ? 0 : $tmp);?>
" width="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? 400 : $tmp);?>
" height="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['height']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? 300 : $tmp);?>
"></iframe><?php }} ?>