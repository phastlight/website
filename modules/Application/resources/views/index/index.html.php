<?php $view->extend('::base.html.php'); ?>


<div class="box" id="homepage">
    
    <div class="box-header well">
        <h2>Welcome to the Phastlight, Webserver written in PHP 5.3 inspired by Node.js</h2>
    </div>
    
    <div class="box-content">
        
        <div class="page-header">
            <h3>Event driven PHP 5.3 server inspired by Node.js</h3>
        </div>     
        <div class="row-fluid">            
            <div class="span4">
                <h3></h3>
                <p></p>
            </div>
            <div class="span4">
                <h3></h3>
                <p></p>
            </div>
            <div class="span4">
                <h3></h3>
                <p></p>
            </div>
        </div>
        <div class="row-fluid">            
            <div class="span4">
                <h3></h3>
                <p></p>
            </div>
            <div class="span4">
                <h3></h3>
                <p></p>
            </div>
            <div class="span4">
                <h3></h3>
                <p></p>
            </div>
        </div>  
        <hr>
        
        
    </div>
    
</div>

    
    

<?php $view['slots']->start('include_js_body'); ?>
<script type="text/javascript" src="<?=$view['assets']->getUrl('js/home.js');?>"></script>
<?php $view['slots']->stop(); ?>
