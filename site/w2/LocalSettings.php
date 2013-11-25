<?php
# This file was automatically generated by the MediaWiki 1.19.2
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# http://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename      = "ACCENTS - A Club of CEntrale Nantes for Travelling Students";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs please see:
## http://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath       = "/w2";

// pour la gestion multilangues
//if(isset($_GET['langue']) && $_GET['langue']=='en' )
	$wgArticlePath  = "/wiki_en/$1";
//else
//	$wgArticlePath  = "/wiki/$1";


$wgUsePathInfo = true;
$wgScriptExtension  = ".php";
$wgRawHtml = true;

## The protocol and server name to use in fully-qualified URLs
$wgServer           = "http://accents.campus.ec-nantes.fr";
$wgServer           = "https://accents.campus.ec-nantes.fr";

## The relative URL path to the skins directory
$wgStylePath        = "$wgScriptPath/skins";

## The relative URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo             = "$wgStylePath/common/images/logo.png";
$wgFavicon 			= "$wgStylePath/common/images/logo.ico";

## UPO means: this is also a user preference option

$wgEnableEmail      = true;
$wgEnableUserEmail  = false; # UPO

$wgEmergencyContact = "accents@eleves.ec-nantes.fr";
$wgPasswordSender   = "accents@eleves.ec-nantes.fr";

$wgEnotifUserTalk      = false; # UPO
$wgEnotifWatchlist     = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype           = "mysql";
$wgDBserver         = "localhost";
$wgDBname           = "clubs_cni";
$wgDBuser           = "cni";
$wgDBpassword       = "DOFo9WtF";

# MySQL specific settings
// pour la gestion multilangues
//if(isset($_GET['langue']) && $_GET['langue']=='fr' )
//	$wgDBprefix         = "";
//else
	$wgDBprefix         = "wiki_en";

# MySQL table options to use during installation or update
$wgDBTableOptions   = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;

## Shared memory settings
$wgMainCacheType    = CACHE_NONE;
$wgMemCachedServers = array();
//$wgCacheDirectory = "cache";

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgDisableUploads = false; # Enable uploads
$wgEnableUploads  = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

$wgUploadPath = "images" ;
$wgUploadDirectory = "images" ;

$wgFileExtensions = array('gif','png','jpg','jpeg','svg','xls','doc','pdf');

# InstantCommons allows wiki to use images from http://commons.wikimedia.org
$wgUseInstantCommons  = false;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "fr_FR.utf8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
# $wgHashedUploadDirectory = false;
$wgHashedUploadDirectory = true;

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/Names.php
//if(isset($_GET['langue']) && $_GET['langue']=='en' )
	$wgLanguageCode = "en";
//else
//	$wgLanguageCode = "fr";

$wgSecretKey = "6d00d8a89a32796fcbdae3f9476834924cfa51e43b5b4a7dcea769333f619c3f";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "01775f6c6e7beef8";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook', 'vector':
$wgDefaultSkin = "vector";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl  = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

# Query string length limit for ResourceLoader. You should only set this if
# your web server has a query string length limit (then set it to that limit),
# or if you have suhosin.get.max_value_length set in php.ini (then set it to
# that value)
$wgResourceLoaderMaxQueryLength = 1000000;


# End of automatically generated settings.
# Add more configuration options below.

$wgShowExceptionDetails = true;
$wgExternalLinkTarget = '_blank';
 
# Private api keys for machine translation services
#$wgTranslateTranslationServices['Apertium']['key'] = '';
#$wgTranslateTranslationServices['Microsoft']['key'] = '';

# If you want graphs at Special:TranslationStats
#$wgTranslatePHPlot = "/path/to/phplot/phplot.php"

# For best experience these additional extensions are recommended:
// For localised language names
#include( "$IP/extensions/cldr/cldr.php" );

// Cleaner recent changes (affects formatting of Special:RecentChanges)
#include( "$IP/extensions/CleanChanges/CleanChanges.php" );
$wgCCUserFilter = false;
$wgCCTrailerFilter = true;

// right for members

// Group of exteriors
$wgGroupPermissions['*']['createaccount']    = true;
$wgGroupPermissions['*']['read']             = true;
$wgGroupPermissions['*']['edit']             = true;
$wgGroupPermissions['*']['createpage']       = true;
$wgGroupPermissions['*']['upload']      	 = true;
$wgGroupPermissions['*']['createtalk']       = false;
$wgGroupPermissions['*']['writeapi']         = true;

$wgGroupPermissions['accents_members']['autoconfirmed']    = true;

$wgGroupPermissions['sysop']['userrights'] = true;

unset ( $wgGroupPermissions['autoconfirmed'] );
unset ( $wgRevokePermissions['autoconfirmed'] );
unset ( $wgAddGroups['autoconfirmed'] );
unset ( $wgRemoveGroups['autoconfirmed'] );
unset ( $wgGroupsAddToSelf['autoconfirmed'] );
unset ( $wgGroupsRemoveFromSelf['autoconfirmed'] );

unset ( $wgGroupPermissions['bot'] );
unset ( $wgRevokePermissions['bot'] );
unset ( $wgAddGroups['bot'] );
unset ( $wgRemoveGroups['bot'] );
unset ( $wgGroupsAddToSelf['bot'] );
unset ( $wgGroupsRemoveFromSelf['bot'] );

// unset ( $wgGroupPermissions['translator'] );
// unset ( $wgRevokePermissions['translator'] );
// unset ( $wgAddGroups['translator'] );
// unset ( $wgRemoveGroups['translator'] );
// unset ( $wgGroupsAddToSelf['translator'] );
// unset ( $wgGroupsRemoveFromSelf['translator'] );


// Extension pour le calendrier
 require_once('extensions/googleCalendar.php');
 
 require_once( "extensions/googleAnalytics.php" );

//Extension for Google Maps
// $wgGoogleMapsKey = "AIzaSyArHfHk6zLS6QND2izzfgFqg8bOkAR_uxU";
// require_once( "$IP/extensions/GoogleMaps/GoogleMaps.php" );

# Validator
require_once( "$IP/extensions/Validator/Validator.php" );
require_once( "$IP/extensions/Maps/Maps.php" );

# Enables use of WikiEditor by default but still allow users to disable it in preferences
$wgDefaultUserOptions['usebetatoolbar'] = 1;
$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;
 
# Displays the Preview and Changes tabs
$wgDefaultUserOptions['wikieditor-preview'] = 1;
 
# Displays the Publish and Cancel buttons on the top right side
$wgDefaultUserOptions['wikieditor-publish'] = 1;

#Enables/disables user JavaScript pages. This enables a lot of neat customizations, but may increase security risk to users and server load.
//$wgAllowUserJs = true;
require_once( "$IP/extensions/WikiEditor/WikiEditor.php" );

# Enables use of WikiEditor by default but still allow users to disable it in preferences
$wgDefaultUserOptions['usebetatoolbar'] = 1;
$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;
 
# Displays the Preview and Changes tabs
$wgDefaultUserOptions['wikieditor-preview'] = 1;
 
# Displays the Publish and Cancel buttons on the top right side
$wgDefaultUserOptions['wikieditor-publish'] = 1;

#Enables/disables user JavaScript pages. This enables a lot of neat customizations, but may increase security risk to users and server load.
//$wgAllowUserJs = true;
require_once( "$IP/extensions/WikiEditor/WikiEditor.php" );


//Extension for Widgets
// require_once("extensions/Widgets/Widgets.php");
 
 // anti spam
	require_once("$IP/extensions/ConfirmEdit/QuestyCaptcha.php"); 
	$wgCaptchaClass = 'QuestyCaptcha';
	$wgCaptchaQuestions[] = array( 'question' => 'Copy the next word : accents', 'answer' => 'accents' );
	$wgCaptchaQuestions[] = array( 'question' => 'Copy the next word : centrale', 'answer' => 'centrale' );
	$wgCaptchaQuestions[] = array( 'question' => 'Copy the next word : nantes', 'answer' => 'nantes' );
	$wgCaptchaQuestions[] = array( 'question' => 'Copy the next word : international', 'answer' => 'international' );

require_once("$IP/extensions/Widgets/Widgets.php");	
	
?>
