<?php
 
class AboutController extends Controller
{
	public function __construct($model, $action)
	{
		parent::__construct($model, $action);
		$this->_setModel($model);		
	}
	
	public function index()
	{
        // $this->_view->set('page','About');
        $this->_view->set('pagetitle', 'About');
        // $this->_view->set('breadcrumb', '<a href="./">About</a>');
		return $this->_view->output();		
	} 

}