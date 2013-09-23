<?php
/**
 * Adsum State Bars Plugin : Attendance Management Software (http://adsum.sedonaconference.org)
 * Copyright (c) 2013 The Sedona Conferencee® (https://thesedonaconference.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE file
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) The Sedona Conference® (https://thesedonaconference.org)
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('AttendeeMetaController', 'AppController', 'Controller');

/**
 * State Bar Controller
 *
 * Manage the storage of Attendee state bar information
 * as Attendee meta data.
 */
class StateBarsController extends StateBarsAppController {
    
   # public $scaffold;
    
    public $uses = array('State', 'Attendee');
    
    public function add() {
        $attendees = $this->Attendee->find('list');
        $states = $this->State->find('list');
        
        $this->set(compact('states', 'attendees'));
    }
    
}