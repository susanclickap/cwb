<?php
/**
 * Waiting enrolment plugin version specification.
 *
 * @package    enrol_waiting
 * @copyright  2017 Mary Chen  {@link http://www.click-ap.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2017042702;
$plugin->requires  = 2014050800;
$plugin->component = 'enrol_waiting';
$plugin->cron      = 600;