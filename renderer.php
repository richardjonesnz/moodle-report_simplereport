<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * A simple report plugin renderer
 *
 * @package   report_simplereport
 * @copyright  2020 Richard Jones {@link https://richardnz.net}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Developed for MoodleBites for Developers Level 1
 * by Richard Jones.
 */

defined('MOODLE_INTERNAL') || die;

class report_simplereport_renderer extends plugin_renderer_base {

 function display_events($eventrecords) {

        $data = new stdClass();

        foreach($eventrecords as $eventrecord) {
            $event = array();
            $event['timestart'] = $eventrecord->timestart;
            $event['name'] = $eventrecord->name;
            $event['description'] = $eventrecord->description;
            $data->events[] = $event;
        }

        echo $this->output->header();
        echo $this->render_from_template('report_simplereport/report', $data);
        echo $this->output->footer();
 }

}