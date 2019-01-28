<?php
 
class ResumeController extends Controller
{
	public function __construct($model, $action)
	{
		parent::__construct($model, $action);
		$this->_setModel($model);		
	}
	
	public function index()
	{
        // $this->_view->set('page','Resume');
        $this->_view->set('pagetitle', 'Resume');
        // $this->_view->set('breadcrumb', '<a href="./">Resume</a>');
		return $this->_view->output();		
	} 

}