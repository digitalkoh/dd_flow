<section id="result">
    <?php include 'inc/inc_nav.php'; ?>
	<div class="container clearfix">
        <div class="col-a col-w70 toggleColWidth-70-100">
            <div class="block bb1">
                <div class="col-nested col-w30 toggleColWidth-30-25"><h3 class="label">Suggested Plan</h3></div>
                <div class="col-nested col-w70 toggleColWidth-70-75"><h2>A Health Savings Account (HSA) Plan</h2></div>
                <div class="clear"></div>
            </div><!-- /.block -->
            
            <div class="block bb1">
                <div class="col-nested col-w30 toggleColWidth-30-25"><h3 class="label">Why this option?</h3></div>
                <div class="col-nested col-w70 toggleColWidth-70-75">
                    <h3>This plan may be a good fit if you:</h3>
                    <ul>
                        <li class="icon"><p>Prefer to pay less from your paycheck and more when you receive care</p></li>
                        <li class="icon"><p>Are not planning to have a major medical procedure or have a baby this year</p></li>
                        <li class="icon"><p>You are not enrolled in Medicare</p></li>
                        <li class="icon"><p>Are concerned about saving for health care expenses in retirement</p></li>
                        <li class="icon"><p>Want Hartford HealthCare to contribution to a Health Savings Account (HSA) to help pay your eligible medical expenses</p></li>
                        <li class="icon"><p>Want more control and flexibility of your health care spending</p></li>
                        <li class="icon"><p>Are comfortable having a higher deductible and a health care account to help pay for eligible medical expenses</p></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div><!-- /.block -->
            
            <div class="block mb10" id="remember">
                <div class="col-nested col-w30 toggleColWidth-30-25"><div class="icon-bulb"></div></div>
                <div class="col-nested col-w70 toggleColWidth-70-75"><?php echo _result_medical_remember ?></div>
                <div class="clear"></div>
            </div><!-- /.block #remember -->
            
            <div class="block bt1">
                <div class="col-nested col-w30 toggleColWidth-30-25"><h3 class="label">Additional Info</h3></div>
                <div class="col-nested col-w70 toggleColWidth-70-75"><?php echo _result_medical_additionalInfo ?></div>
                <div class="clear"></div>
            </div><!-- /.block -->
        
		</div><!--/.col-a-->
        
        
        <div class="col-b col-w30">
            <!-- IF PLM -->
            <?php include 'inc/inc_plm_text.php'; ?>
		</div><!--/.col-b-->
        
        
	</div><!--/.container-->

</section>

