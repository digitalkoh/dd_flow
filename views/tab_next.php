<section id="result" class="nextsteps">
   <?php include 'inc/inc_nav.php'; ?>
    
	<div class="container clearfix">
        <div class="col-a col-w100">
            <div class="block bb1">
                <div class="col-nested col-w25"><h3 class="label">TextTextText.</h3><h2>Text</h2></div>
                <div class="col-nested col-w75">
                    
                    <div class="col-nested col-w100" id="nextOptions">
                        <a href="#next-email" class="icon rnd mail-lg fancybox-form">Text.</a>
                        <a class="icon rnd check-lg">TextText <strong>Text</strong>.</a>
                        <a href="#next-survey" class="icon rnd talk-lg fancybox-form">Text.</a>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!-- /.block -->
            
            <div class="block mb10" id="remember">
                <div class="col-nested col-w25"><div class="icon-bulb"></div></div>
                <div class="col-nested col-w75"><?php echo _result_next_remember ?></div>
                <div class="clear"></div>
            </div><!-- /.block #remember -->
            
            
		</div><!--/.col-a-->
        
         <div class="col-b col-w30">
             <!-- blank -->
		</div><!--/.col-b-->
        
	</div><!--/.container-->

</section>

<?php include 'views/lb_email.php'; ?>
<?php include 'views/lb_survey.php'; ?>



