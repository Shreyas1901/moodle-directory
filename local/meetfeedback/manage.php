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
 * Version details
 *
 * @package    local_meetfeedback
 * @copyright  1999 onwards Martin Dougiamas (http://dougiamas.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');
//require_once ('local/meetfeedback/classes/form/edit.php');

$PAGE->set_url('/local/meetfeedback/manage.php');
$PAGE->set_context(context_system::instance());
$PAGE->set_title('Feedback');

//$mform = new edit();

echo $OUTPUT->header();

/*$templatecontext = (object)[
    'texttodisplay' => 'here is some text',
];
echo $OUTPUT->render_from_template('templates/manage.mustache',$templatecontext); */

//$mform->display();;


echo $OUTPUT->footer();


