<div id="next-email" class="lbcontent hide">
    <h2>Text</h2>
    <div class="modal-body">
        <form>
            <div class="control-group">
                <label class="control-label">To:</label>
                <div class="controls">
                    <input type="text" class="input-large" placeholder="" id="toEmail" name="toEmail" value="" maxlength="200" autofocus="autofocus">
                </div>
            </div>			

 
            <div class="control-group">
                <label class="control-label">Subject:</label>
                <div class="controls">
                    <input type="text" class="input-large" placeholder="" id="subject" name="subject" value="" maxlength="60" autofocus="autofocus">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Message:</label>
                <div class="controls">
                    <textarea rows="3" cols="50" maxlength="5000px" name="message" id="message" onkeypress="return ( this.value.length < 5000 );"></textarea>
                </div>
            </div>

            <div class="control-group">
                <label id="initAttmntMsg" class="" style="display: none;">Attaching file. Please wait..</label>
                <div id="suggestionPdfDiv" class="controls" style="">	
                    <a href="#" target="_blank" class="icon pdf">suggestion.pdf</a>
                </div>
            </div>
            
            <div class="btrow">
                <a href="#" class="bt blueBtn rnd recBtn" onclick="parent.$.fancybox.close()">Send</a>
                <a href="#" onclick="parent.$.fancybox.close()">Cancel</a>
            </div>
        </form>
    </div>
</div>