<?php
 
class HomeController extends Controller
{
	public function __construct($model, $action)
	{
		parent::__construct($model, $action);
		$this->_setModel($model);		
	}
	
	public function index()
	{
        // $this->_view->set('page','home');
        $this->_view->set('pagetitle', 'Home');
        // $this->_view->set('breadcrumb', '<a href="./">Home</a>');
		return $this->_view->output();		
	} 

}