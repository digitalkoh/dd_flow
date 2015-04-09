<nav>
    <a href="?section=medical" class="bt recBtn rnd blueBtn <?php if ($_GET["section"] == "medical")echo " active" ?>">Plan 1</a>
    <a href="?section=dental" class="bt recBtn rnd blueBtn <?php if ($_GET["section"] == "dental")echo " active" ?>" id="ui-dd-option-dental">Plan 2</a>
    <a href="?section=vision" class="bt recBtn rnd blueBtn <?php if ($_GET["section"] == "vision")echo " active" ?>" id="ui-dd-option-vision">Plan 3</a>
    <a href="?section=next" class="bt recBtn rnd blueBtn <?php if ($_GET["section"] == "next")echo " active" ?>">Next Steps</a>
    <a href="index" class="bt recBtn rnd orgBtn">Start Over</a>
    <a href="#" class="bt icon print">Print this page</a>
    <div class="clear"></div>
</nav>

<div id="m-menu"></div>