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
 * Version information
 *
 * @package    local_upcommingcourse
 * @copyright  2023 Tarekul Islam
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

 require_once("$CFG->libdir/formslib.php");

class inputForm extends moodleform{
    protected $data;

    // public function __construct($aUrl,$data=NULL){
    //     $this->data=$data;
    //     parent::__construct($aUrl);
    // }

 
public function definition(){
   global $CFG;
   $type=['Programming', 'Design','Social','Science'];
   $form=$this->_form;

   $form->addElement('hidden',  'id',  get_string('id', 'string')); 
   $form->setType('id', PARAM_INT);
   $form->setDefault("id",$this->data->id ?? "");

   $form->addElement('text',  'title',  get_string('title', 'string'));
   $form->settype("title",PARAM_TEXT);
   $form->setDefault('title',$this->data->title ?? "");
   
   
   $form->addElement('text',  'description',  get_string('des', 'string'), PARAM_TEXT); 
   $form->settype("description",PARAM_TEXT);
   $form->setDefault("description",$this->data->description ?? "");

   $form->addElement('select',  'type',  get_string('type', 'string'), $type);
   $form->setType('type',PARAM_TEXT);
   $form->setDefault('type',0);

    $this->add_action_buttons();

}
}