<?php
 
class ErrorController extends Controller
{
	public function __construct($model, $action)
	{
		parent::__construct($model, $action);
		$this->_setModel($model);		
	}
	
	public function index()
	{
        $this->_view->set('pagetitle', 'Error');
        return $this->_view->output();		
	} 

}