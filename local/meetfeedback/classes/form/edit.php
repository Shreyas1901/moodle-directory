<?php
/**
 * Version details
 *
 * @package    local_meetfeedback
 * @copyright  1999 onwards Martin Dougiamas (http://dougiamas.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');

require_once("$CFG->libdir/formslib.php");

class edit extends moodleform {
    //Add elements to form
    public function definition() {
        global $CFG;

        $mform = $this->_form; // Don't forget the underscore!

        $radioarray=array();
        $radioarray[] = $mform->createElement('radio', 'yesno', '', get_string('yes'), 1, $attributes);
        $radioarray[] = $mform->createElement('radio', 'yesno', '', get_string('no'), 0, $attributes);
        $mform->addGroup($radioarray, 'radioar', '', array(' '), false);

        $mform->addElement('text', 'suggestions', 'Please enter your suggestions if any'); // Add elements to your form
        $mform->setType('suggestions', PARAM_NOTAGS);                   //Set type of element
        $mform->setDefault('suggestions', 'Please enter any suggestions');        //Default value

    }
    //Custom validation should be added here
    function validation($data, $files) {
        return array();
    }
}
