<?php
/**
 * Version details.
 *
 * @package    clickap
 * @subpackage program
 * @copyright  2018 Click-AP <elaine@click-ap.com>
 * @license    http://www.click-ap.com/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$plugin->version  = 2018020902;
$plugin->requires = 2011091600;
$plugin->component = 'clickap_program';
$plugin->dependencies = array('clickap_base'=>ANY_VERSION);