<?php

require('../../config.php');
require_once('../../lib/moodlelib.php');

require_login();

//get our config
$def_config = get_config('block_myblock');

$usercontext = context_user::instance($USER->id);
$PAGE->set_course($COURSE);
$PAGE->set_url('/blocks/myblock/view.php');
$PAGE->set_heading($SITE->fullname);
$PAGE->set_pagelayout($def_config->pagelayout);
$PAGE->set_title(get_string('pluginname', 'block_myblock'));
$PAGE->navbar->add(get_string('pluginname', 'block_myblock'));


// start output to browser
echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('pluginname', 'block_myblock'),2);


echo '<div><h3>' . get_string('welcome', 'block_myblock') . $def_config->firstname . '</h3></div>';
echo '<div><h3>' . get_string('welcome', 'block_myblock') . fullname($USER) . '</h3></div>';
echo '<br>' . $OUTPUT->user_picture($USER);

//send footer out to browser
echo $OUTPUT->footer();
return;


	