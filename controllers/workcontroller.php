<?php
 
class WorkController extends Controller
{
	public function __construct($model, $action)
	{
		parent::__construct($model, $action);
		$this->_setModel($model);		
	}
	
	public function index()
	{
        // $this->_view->set('page','Work');
        $this->_view->set('pagetitle', 'Work');
        // $this->_view->set('breadcrumb', '<a href="./">Work</a>');
		return $this->_view->output();		
	} 

}