<?php
# Google Calendars
#
# Tag :
#   <googlecalendar>docid</googlecalendar>
# Ex :
#   from url http://calendar.google.com/calendarplay?docid=6444586097901795775
#   <googlecalendar>6444586097901795775</googlecalendar>
#
# Enjoy !

$wgExtensionFunctions[] = 'wfGoogleCalendar';
$wgExtensionCredits['parserhook'][] = array(
        'name' => 'Google Calendar',
        'description' => 'Display Google Calendar',
        'author' => 'Kasper Souren',
        'url' => 'http://wiki.couchsurfing.com/en/Google_Calendar_MediaWiki_plugin'
);

function wfGoogleCalendar() {
        global $wgParser;
        $wgParser->setHook('googlecalendar', 'renderGoogleCalendar');
}

# The callback function for converting the input text to HTML output
function renderGoogleCalendar($input) {
        $input = htmlspecialchars($input);
        //$input = "6444586097901795775"
		$input = "accents.centrale%40gmail.com" ;
        $width = 425;
        $height = 350;

        //$output = '<iframe src="http://www.google.com/calendar/embed?src=g43t277um81su1tjvgvah609qk%40group.calendar.google.com&pvttk=db8cdde758254dbe5a511723cac5da46&title=CSC-NZ&chrome=NAVIGATION&height=600&epr=4" style=" border-width:0 " width="480" frameborder="0" height="600"></iframe>';
        $output = '<iframe src="http://www.google.com/calendar/embed?src='.$input.'&showTitle=0&showPrint=0&chrome=NAVIGATION&height=600&epr=4" style=" border-width:0 " width="100%" frameborder="0" height="600"></iframe>';
		//$ouptput = '<iframe src="https://www.google.com/calendar/embed?showTitle=0&showPrint=0&showCalendars=0&showTz=0&height=300&wkst=1&hl=fr&bgcolor=%23ffffff&src=accents.centrale%40gmail.com&color=%232952A3&ctz=Europe%2FParis" style=" border-width:0 " width="400" height="300" frameborder="0" scrolling="no"></iframe>' ;
 
		/*

        $output = '<embed style="width:'.$width.'px; height:'.$height.'px;" '
                .'id="CalendarPlayback" type="application/x-shockwave-flash" '
                .'src="http://calendar.google.com/googleplayer.swf?docId='
                .$input.'"> </embed>';
        */
        return $output;
}
?>