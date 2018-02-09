<?php

namespace block_admin_presets\event;

defined('MOODLE_INTERNAL') || die();

class preset_reverted extends \core\event\base {

    protected function init() {
        $this->data['crud'] = 'u';
        $this->data['edulevel'] = self::LEVEL_OTHER;
        $this->data['objecttable'] = 'block_admin_presets';
    }

    public static function get_name() {
        return get_string('eventpresetreverted', 'block_admin_presets');
    }

    public function get_description() {
        return "User {$this->userid} has reverted the preset with id {$this->objectid}.";
    }

    public function get_legacy_logdata() {
        return array($this->courseid, 'block_admin_presets', 'rollback', '',
            $this->objectid, $this->contextinstanceid);
    }
}
