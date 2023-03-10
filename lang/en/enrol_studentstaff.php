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
 * Strings for component 'enrol_studentstaff', language 'en'.
 *
 * @package    enrol_studentstaff
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @copyright  2023 Robert Russo
 * @copyright  2023 Louisiana State University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Basic stuff.
$string['pluginname'] = 'Student/Staff';
$string['pluginname_desc'] = 'This enrollment method will repeatedly check for staff roles enrolled in courses as students via the designated enrollment method and assign a designated role for them.';
$string['basicsettings'] = 'Basic Settings';
$string['studentstaffcrontask'] = 'Student/Staff enrollment';

// Privacy stuff.
$string['privacy:metadata'] = 'The LSU Student/Staff enrolment plugin does not store any personal data.';

// Settings.
$string['ss_enrol'] = 'Enrollment Provider';
$string['ss_siterolescheck'] = 'Site roles to check';
$string['ss_courserolescheck'] = 'Course roles to check';
$string['ss_courseroleassign'] = 'Course role to assign';
