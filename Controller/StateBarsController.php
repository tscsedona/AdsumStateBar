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
    
    public $uses = array('State', 'Attendee', 'AttendeeMetum');
    
    /**
     * add() method
     * 
     * Associates a new State Bar number with an Attendee
     */
    public function add() {
        if ($this->request->is('post')) {
            $reformat = $this->reformatDataAsMetum($this->request->data);

			if ($this->AttendeeMetum->save($reformat)) {
				$this->Session->setFlash(__('The state bar number has been associated with the attendee.'), 'flash/success');
				$this->redirect(array('controller' => 'attendees', 'action' => 'index', 'plugin' => false));
			} else {
				$this->Session->setFlash(__('The state bar number could not be saved. Please, try again.'), 'flash/error');
			}
            
		}
        $attendees = $this->Attendee->find('list');
        $states = $this->State->find('list');
        
        $this->set(compact('states', 'attendees'));
    }
    
    /**
     * Reformat add() POST data in the AttendeeMetum format
     * 
     * @param type $data
     * @todo move this to the model
     */
    protected function reformatDataAsMetum($data) {
        $state = $this->State->findById($data['StateBars']['state_id'], array('fields' => 'abbreviation'));
        $reformatted = array(
            'AttendeeMetum' => array(
                'attendee_id' => $data['StateBars']['attendee_id'],
                'key'         => 'State.bar',
                'value'       => $state['State']['abbreviation'] . '-' . $data['StateBars']['bar-number']
            )
        );
        return $reformatted;
#        Debugger::dump($state);
#        Debugger::dump($data);
#        Debugger::dump($reformatted);
    }
    
}