<?php 
    $cssURL =   PUBLIC_URL . 'css/';
    $jsURL  =   PUBLIC_URL . 'js/';
    
    // Js
    $fileJs = '';
    if(!(empty($this->js))) {
        foreach($this->js as $js) {
            $fileJs .= '<script type="text/javascript" src="'.VIEW_URL . $js .'"></script>';      
        }
    }
    
    // Css
    $fileCss = '';
    if(!(empty($this->css))) {
        foreach($this->css as $css) {
            $fileCss .= '<link rel="stylesheet" media="screen" href="'.VIEW_URL. $css .'" />';
        }
    }
    
    $title  =   (isset($this->title)) ? $this->title : 'Management System';
?>
<!DOCTYPE html>
<html> 
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <!-- Bootstrap -->
        <link href="<?php echo $cssURL; ?>bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo $cssURL; ?>bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo $cssURL; ?>styles.css" rel="stylesheet" media="screen">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <?php echo $fileCss; ?>
    </head>
<body>
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
            </a>
            <a class="brand" href="index.php">Admin Dashboard</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                	<li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Daily Duration Management <b class="caret"></b></a>
                        <ul class="dropdown-menu" id="menu1">
                            <li>
                                <a href="index.php?controller=personal&action=index">Personal Management</a>
                            </li>
                            <li>
                                <a href="#">Group Management</a>
                            </li>
                            <li>
                                <a href="#">All</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Project Management</a>  
                    </li>
                    <li>
                        <a href="#">Run Slide Automatic</a>  
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>