<?php
/**
 * @package    block
 * @subpackage course_menu
 * course news
 * @copyright  2016 Mary Chen (mary@click-ap.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v2 or later
 */
require_once(dirname(__FILE__) . '/../../config.php');

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2018022301;
$plugin->requires  = 2014051211;
$plugin->component = 'block_course_menu';
$plugin->release  = 'CWB-1.0.2';
$plugin->dependencies = array('local_mooccourse' => '2016093001');