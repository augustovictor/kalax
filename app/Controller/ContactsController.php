<?php
class ContactsController extends Controller {
 
    var $components = array('Email');
 
    function send() {
        if(!empty($this->data)) {
            $this->Contact->set($this->data);
 
            if($this->Contact->validates()) {
                $this->Email->from = $this->data['Contact']['name'] . ' <' . $this->data['Contact']['email'] . '>';
                $this->Email->to = 'info@kalax.on.ca';
                $this->Email->subject = 'Kalax website';
                $this->Email->send($this->data['Contact']['message']);
                // $this->Session->setFlash('Your message has been sent.');
                // Display the success.ctp page instead of the form again
                $this->redirect(array('controller' => 'pages', 'action' => 'home'));
            } else {
                $this->redirect(array('controller' => 'pages', 'action' => 'home'));
            }
        }
    }
 
    function book_call() {
        if(!empty($this->data)) {
            $this->Contact->set($this->data);
 
            if($this->Contact->validates()) {
                $this->Email->from = $this->data['Contact']['name'] . ' <' . $this->data['Contact']['email'] . '>';
                $this->Email->to = 'info@kalax.on.ca';
                $this->Email->subject = 'Call booked';
                $this->Email->send('Call ' . ucwords($this->data['Contact']['name']) . '(' . $this->data['Contact']['email'] . ')' . ' at ' .  $this->data['Contact']['time'] . '. ' . $this->data['Contact']['phone']);
                // $this->Session->setFlash('Your message has been sent.');
                // Display the success.ctp page instead of the form again
                $this->redirect(array('controller' => 'pages', 'action' => 'home'));
            } else {
                $this->redirect(array('controller' => 'pages', 'action' => 'home'));
            }
        }
    }
 
}

 ?>