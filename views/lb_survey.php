<div id="next-survey" class="lbcontent hide">
    <h2>Survey</h2>
    <div class="modal-body">
        <form>
            <div class="control-group mb20">
                <h3>Lorem ipsum dolor sit amet.</h3>
                <label style="margin-right:18px">
                    <input type="radio" name="isToolHelpful" id="isToolHelpfulYes" value="Yes" onclick="javascript: toolHelpful('Yes');">Yes
                </label>
                <label>
                    <input type="radio" name="isToolHelpful" id="isToolHelpfulNo" value="No" onclick="javascript: toolHelpful('No');">No
                </label>
            </div>
            
            <div class="control-group">
                <h3> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                 <label style="margin-right:18px">
                    <input type="radio" name="enrollPlan" id="enrollPlanYes" value="Yes" onclick="javascript: planEnroll('Yes');">
                    &nbsp;Yes
                </label>
                <label>
                    <input type="radio" name="enrollPlan" id="enrollPlanNo" value="No" onclick="javascript: planEnroll('No');">
                    &nbsp;No
                </label>
            </div>

            <div class="btrow">
                <a href="#" class="bt blueBtn rnd recBtn" onclick="parent.$.fancybox.close()">Submit</a>
                <a href="#" onclick="parent.$.fancybox.close()">Cancel</a>
            </div>

        </form>
    </div>
</div>