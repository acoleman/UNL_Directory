<?php
$myself = htmlentities(str_replace('index.php', '', $_SERVER['PHP_SELF']), ENT_QUOTES);
UNL_Templates::$options['version'] = 3;

$template = 'Document';

if ($context->options['mobile'] === true) {
    $template = 'Popup';
}

$page = UNL_Templates::factory($template);

$page->doctitle = '<title>UNL | Peoplefinder</title>';

$page->head .= '
<meta name="description" content="UNL Peoplefinder is the Faculty, Staff and Student online directory for the University. Information obtained from this directory may not be used to provide addresses for mailings to students, faculty or staff. Any solicitation of business, information, contributions or other response from individuals listed in this publication by mail, telephone or other means is forbidden." />
<meta name="keywords" content="university of nebraska-lincoln student faculty staff directory vcard" />
<meta name="author" content="Brett Bieber, UNL Office of University Communications" />
<meta name="viewport" content="width = 320" />
<link rel="stylesheet" type="text/css" media="screen" href="'.UNL_PEOPLEFINDER_URI.'css/peoplefinder_default.css" />
<link media="only screen and (max-device-width: 480px)" href="'.UNL_PEOPLEFINDER_URI.'css/small_devices.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="'.UNL_PEOPLEFINDER_URI.'scripts/peoplefinder.js"></script>
';

if (isset($context->options['q']) 
    || isset($context->options['uid'])
    || isset($context->options['cn'])
    || isset($context->options['sn'])) {
    // Don't let search engines index these pages
    $page->head .= '<meta name="robots" content="NOINDEX, NOFOLLOW" />';
}

$page->breadcrumbs = '
<ul>
    <li><a href="http://www.unl.edu/" title="University of Nebraska&ndash;Lincoln">UNL</a></li>
    <li>Peoplefinder</li>
</ul>';

$page->titlegraphic = '<h1>UNL Peoplefinder</h1>';

$page->maincontentarea = $savvy->render($context->output);

$page->footercontent = 'UNL | Office of University Communications | <a href="http://www1.unl.edu/wdn/wiki/About_Peoplefinder" onclick="window.open(this.href); return false;">About Peoplefinder</a><br /><br />';
$page->footercontent .= 'Information obtained from this directory may not be used to provide addresses for mailings to students, faculty or staff.<br />Any solicitation of business, information, contributions or other response from individuals listed in this publication by mail, telephone or other means is forbidden.<br />';

echo $page;