<?php
/**
 * global setting for the My overview block.
 *
 * @package    block_mytoc(My Table Of Content)
 * @author     Maria Tan <maria@click-ap.com>
 * @copyright  2018 Click-AP {@link https://www.click-ap.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;
require_once($CFG->dirroot . '/blocks/mytoc/lib.php');

if ($ADMIN->fulltree) {
    $options = [
        BLOCK_MYTOC_TEACHCOURSES_VIEW => get_string('teachcourses', 'block_mytoc'),
        BLOCK_MYTOC_ENROLCOURSES_VIEW => get_string('enrolcourses', 'block_mytoc'),
        BLOCK_MYTOC_PROGRAMS_VIEW     => get_string('programs', 'block_mytoc')
    ];

    $settings->add(new admin_setting_configselect('block_mytoc/defaulttab',
        get_string('defaulttab', 'block_mytoc'),
        get_string('defaulttab_desc', 'block_mytoc'), BLOCK_MYTOC_ENROLCOURSES_VIEW, $options));
    
    $settings->add(new admin_setting_configtext('block_mytoc/coursesperpage', new lang_string('coursesperpage', 'block_mytoc'),
        new lang_string('coursesperpage_desc', 'block_mytoc'), 5, PARAM_INT));

        
    $allroles = array();
    $default  = array();
    foreach(role_fix_names(get_all_roles()) as $role){
        if($role->shortname == 'guest' or $role->shortname == 'user' or $role->shortname == 'frontpage'){
            continue;
        }
        $allroles[$role->id] = $role->localname;
        if($role->shortname == 'student'){
            $default['enrol'][] = $role->id;
        }else if($role->shortname == 'editingteacher'){
            $default['teach'][] = $role->id;
        }
    }
    $settings->add(new admin_setting_configmultiselect('block_mytoc/teachrole',
        new lang_string('teachrole', 'block_mytoc'), new lang_string('teachrole_desc', 'block_mytoc'),
        $default['teach'], $allroles));
    $settings->add(new admin_setting_configmultiselect('block_mytoc/enrolrole',
        new lang_string('enrolrole', 'block_mytoc'), new lang_string('enrolrole_desc', 'block_mytoc'),
        $default['enrol'], $allroles));
}