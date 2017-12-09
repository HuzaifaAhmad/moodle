<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '209.105.228.201';
$CFG->dbname    = 'kCj3Y0fS1Mhc';
$CFG->dbuser    = 'n2yIOPVL8pJ7';
$CFG->dbpass    = 'jrAfQkm0GEiQ';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
);

$CFG->loginhttps = true;
$CFG->cookiesecure = true;
$CFG->wwwroot   = 'http://nakhlahusa.org';
$CFG->dataroot  = '/var/www/vhosts/nakhlahusa.org/moodledata';
$CFG->admin     = 'admin';
$CFG->loginhttps     = false;
$CFG->cookiesecure     = false;
$CFG->smtphosts = '192.168.10.101';
$CFG->smtpsecure = '';
$CFG->smtpauthtype = 'LOGIN';
$CFG->smtpuser = '';
$CFG->smtppass = '';
$CFG->smtpmaxbulk = 1;
$CFG->dbsessions=false;

$CFG->directorypermissions = 0755;

require_once(dirname(__FILE__) . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
