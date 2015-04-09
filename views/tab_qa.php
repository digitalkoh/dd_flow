<section id="qa">
	<div class="container clearfix">
        <div class="col-a col-w50">
            <div class="maintext cev-parent">
                <div id="question-wrapper" class="rnd">
                    
                    <?php include 'inc/inc_qa_video.php' ?>
                    
                    <h2><!-- dynamic text --></h2>
                    <a href="#" class="icon q-sm-wht fancybox">WHy text?</a>
                </div>
                <div id="question-arrow" class="cev-child"></div>
                <div class="clear"></div>
            </div><!-- /.maintext -->
		</div><!--/.col-a-->
        
        <div class="col-b col-w50">
            <div class="maintext">
                <form name="response" class="response">
                    
                    <script>
                        function buildQA(){
                            var source = DD_QA_TXT.qanda;
                            
                            for(var i = 0; i < source.length; i++){
                                var div = '<div class="flowgroup',
                                    whytxt = '<div id="lbtext-whydoweask' + (i+1) + '" class="lbcontent hide">';
                                
                                if(i === 0){div += ' firstflow'}
                                if(source[i] === source[source.length-1]){div += ' lastflow'}
                                
                                div += '" data-flowid=' + (i+1) + '><ol>';
                                
                                for(var j = 0; j < source[i].a.length; j++){
                                    div += '<li><input type="radio" name="q' + (i+1) + '" value="q' + (i+1) + '-a' + (j+1) + '" id="q' + (i+1) + '-a' + (j+1) + '" /><label for="q' + (i+1) + '-a' + (j+1) + '"><span></span><p>' + source[i].a[j] + '</p></label></li>';
                                }
                                
                                div += '</ol></div>';
                                
                                if(source[i].why[0] !== ""){
                                     whytxt += '<h2>' + source[i].why[0] + '</h2>'
                                }
                                
                                whytxt += '<p>' + source[i].why[1] + '</p>';
                                
                                document.writeln(div);
                                $("#qa").append(whytxt)
                            }
                        }

                        buildQA()
                    </script>
                    
                     <div class="btrow">
                        <a href="#" class="icon qa-prev">Back</a>
                        <a href="#" class="icon qa-next">Next</a>
                    </div>
                </form>
            </div><!-- /.maintext -->
		</div><!--/.col-b-->
        
	</div><!--/.container-->
</section>