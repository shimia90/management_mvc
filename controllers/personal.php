<?php
class Personal extends Controller {
    
    public function __construct() {
        parent::__construct();
        $this->view->title = 'Personal Management';
    }
    
    public function index() {
        $this->view->js     =   array(
            'personal/js/jquery-ui.min.js',
            'personal/js/custom.js',
            'personal/js/jquery.floatThead.min.js',
            'personal/js/moment.min.js',
            'personal/js/jquery.daterangepicker.js',
            'personal/js/timestack.min.js',
            'personal/js/highcharts.js'
        );
        $this->view->css    =   array(
            'personal/css/daterangepicker.css',
            'personal/css/jquery-ui.min.css',
            'personal/css/timestack.css'
        );
        $this->view->render('personal/index');
    }
}