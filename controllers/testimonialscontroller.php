<?php
 
class TestimonialsController extends Controller
{
	public function __construct($model, $action)
	{
		parent::__construct($model, $action);
		$this->_setModel($model);		
	}
	
	public function index()
	{
        // $this->_view->set('page','Testimonials');
        $this->_view->set('pagetitle', 'Testimonials');
        // $this->_view->set('breadcrumb', '<a href="./">Testimonials</a>');
		return $this->_view->output();		
	} 

}