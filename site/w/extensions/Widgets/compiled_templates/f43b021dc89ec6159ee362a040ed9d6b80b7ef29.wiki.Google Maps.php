<?php /* Smarty version Smarty-3.1.7, created on 2013-06-06 16:24:34
         compiled from "wiki:Google Maps" */ ?>
<?php /*%%SmartyHeaderCode:130562396751b09ba25f3044-07965578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f43b021dc89ec6159ee362a040ed9d6b80b7ef29' => 
    array (
      0 => 'wiki:Google Maps',
      1 => 2147483647,
      2 => 'wiki',
    ),
  ),
  'nocache_hash' => '130562396751b09ba25f3044-07965578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'static' => 0,
    'lat' => 0,
    'lng' => 0,
    'mapDivID' => 0,
    'width' => 0,
    'height' => 0,
    'zoom' => 0,
    'marker' => 0,
    'm' => 0,
    'xml' => 0,
    'centermarker' => 0,
    'maptypecontrol' => 0,
    'largemapcontrol' => 0,
    'smallmapcontrol' => 0,
    'smallzoomcontrol' => 0,
    'scalecontrol' => 0,
    'overviewmapcontrol' => 0,
    'hierarchicalmaptypecontrol' => 0,
    'maptype' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51b09ba29ac23',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b09ba29ac23')) {function content_51b09ba29ac23($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/var/www/cni/site/w/extensions/Widgets/smarty/libs/plugins/function.counter.php';
if (!is_callable('smarty_modifier_validate')) include '/var/www/cni/site/w/extensions/Widgets/smarty_plugins/modifier.validate.php';
?><?php if (!isset($_smarty_tpl->tpl_vars['static']->value)){?><?php echo smarty_function_counter(array('name'=>"mapDivID",'assign'=>"mapDivID"),$_smarty_tpl);?>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
google.load("maps", "2.s");
// Call this function when the page has been loaded
google.setOnLoadCallback(function() {
	if (google.maps.BrowserIsCompatible()) {
		var center = new GLatLng('<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['lat']->value);?>
', '<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['lng']->value);?>
');
		// Create and Center a Map
		var map = new google.maps.Map2(document.getElementById("map<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mapDivID']->value, ENT_QUOTES, 'UTF-8', true);?>
"),
			{size: new google.maps.Size('<?php echo (($tmp = @preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['width']->value))===null||$tmp==='' ? '420' : $tmp);?>
', '<?php echo (($tmp = @preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['height']->value))===null||$tmp==='' ? 350 : $tmp);?>
')}
		);
		map.setCenter(center, 13);
		map.setZoom(Number('<?php echo (($tmp = @preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['zoom']->value))===null||$tmp==='' ? 16 : $tmp);?>
'));
		map.enableScrollWheelZoom();

		var createMarker = function(markerLatLng,MarkerTitle,markerIcon,markerPopup) {
			var marker=new google.maps.Marker(markerLatLng,{title:MarkerTitle,icon:markerIcon});
			if (markerPopup) {
				GEvent.addListener(marker, "click", function() {
					marker.openInfoWindowHtml(markerPopup);
				});
			}
			return marker;
		}
		<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['marker']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
			var markerIcon=new GIcon(G_DEFAULT_ICON);
			<?php if (isset($_smarty_tpl->tpl_vars['m']->value['letter'])){?>markerIcon.image="http://www.google.com/mapfiles/marker<?php echo str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['m']->value['letter']));?>
.png";<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['m']->value['icon'])){?>markerIcon.image='<?php echo smarty_modifier_validate($_smarty_tpl->tpl_vars['m']->value['icon'],'url');?>
';<?php }?>
			var markerLatLng = new GLatLng('<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['m']->value['lat']);?>
', '<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['m']->value['lng']);?>
');
			var markerPopup="";
			<?php if (isset($_smarty_tpl->tpl_vars['m']->value['text'])){?>markerPopup='<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['m']->value['text']);?>
';<?php }?>
			var marker = new createMarker(markerLatLng,'<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['m']->value['title']);?>
',markerIcon,markerPopup);
			
		map.addOverlay(marker);
		<?php } ?>
		<?php if (isset($_smarty_tpl->tpl_vars['xml']->value)){?>map.addOverlay(new GGeoXml('<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['xml']->value);?>
'));<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['centermarker']->value)){?>map.addOverlay(new google.maps.Marker(center));<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['maptypecontrol']->value)){?>map.addControl(new GMapTypeControl());<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['largemapcontrol']->value)){?>map.addControl(new GLargeMapControl());<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['smallmapcontrol']->value)){?>map.addControl(new GSmallMapControl());<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['smallzoomcontrol']->value)){?>map.addControl(new GSmallZoomControl());<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['scalecontrol']->value)){?>map.addControl(new GScaleControl());<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['overviewmapcontrol']->value)){?>map.addControl(new GOverviewMapControl());<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['hierarchicalmaptypecontrol']->value)){?>map.addControl(new GHierarchicalMapTypeControl());<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['maptype']->value)){?>map.setMapType(<?php if ($_smarty_tpl->tpl_vars['maptype']->value=='satellite'){?>G_SATELLITE_MAP<?php }elseif($_smarty_tpl->tpl_vars['maptype']->value=='hybrid'){?>G_HYBRID_MAP<?php }else{ ?>G_NORMAL_MAP<?php }?>);<?php }?>

	}
});
</script>
<div id="map<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mapDivID']->value, ENT_QUOTES, 'UTF-8', true);?>
" style="width: <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '420' : $tmp);?>
px; height: <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['height']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? 350 : $tmp);?>
px"><?php }?><img src="http://maps.googleapis.com/maps/api/staticmap?sensor=false&center=<?php echo str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['lat']->value));?>
,<?php echo str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['lng']->value));?>
&zoom=<?php echo (($tmp = @str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['zoom']->value)))===null||$tmp==='' ? 16 : $tmp);?>
&size=<?php echo (($tmp = @str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['width']->value)))===null||$tmp==='' ? '420' : $tmp);?>
x<?php echo (($tmp = @str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['height']->value)))===null||$tmp==='' ? 350 : $tmp);?>
&markers=<?php if (isset($_smarty_tpl->tpl_vars['centermarker']->value)){?><?php echo str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['lat']->value));?>
,<?php echo str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['lng']->value));?>
%7C<?php }?><?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['marker']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
$_smarty_tpl->tpl_vars['m']->_loop = true;
?><?php echo str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['m']->value['lat']));?>
,<?php echo str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['m']->value['lng']));?>
%7C<?php } ?>&maptype=<?php echo (($tmp = @str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['maptype']->value)))===null||$tmp==='' ? 'roadmap' : $tmp);?>
" width="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '420' : $tmp);?>
" height="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['height']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? 350 : $tmp);?>
"><?php if (!isset($_smarty_tpl->tpl_vars['static']->value)){?></div><?php }?><?php }} ?>