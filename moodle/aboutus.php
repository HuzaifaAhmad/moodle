<?php

require_once('config.php');


$PAGE->set_context(get_system_context());
$PAGE->set_pagelayout('admin');

$PAGE->set_title("About Nakhlah Institute");

$PAGE->set_heading("About Us");

$PAGE->set_url($CFG->wwwroot.'/aboutus.php');


echo $OUTPUT->header();
echo "Test";
echo $OUTPUT->footer();
?>
