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
App::uses('AttendeeMetum', 'AppModel', 'Model');

/**
 * StateBar Model
 */
class StateBar extends StateBarsAppModel {
    
    public $name = 'StateBar';
    
    public $useTable = 'attendee_meta';
    
    public function reformatDataAsMetum($data) {
        Debugger::dump($data);
    }
    
}