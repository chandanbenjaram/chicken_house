<?php
class PagesController extends AppController {
	var $name = 'Pages';
	var $helpers = array('Ajax', 'Html', 'Session');


	function home() {
    $title_for_view = "Home"; 
	$this->layout = 'ajax';
    }
	function aboutus() {
    $title_for_view = "AboutUs";
	$this->layout = 'ajax';
    }
	function contactus() {
    $title_for_view = "ContactUs"; 
	$this->layout = 'ajax';
    }
	function locations() {
    $title_for_view = "Locations"; 
	$this->layout = 'ajax';
    }
	
	function submit() {
		
		$formData = $this->params["form"];
		Configure::write('debug', 0);
				 if (!empty($formData)) {
					if ($this->Page->save($formData)) {
						}
						}
						else {
						 $this->redirect(array('action' => 'Submit'));
  	   }	
	}
}
?>