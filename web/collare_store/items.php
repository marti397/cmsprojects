<!DOCTYPE html>
<html>
	<head>
		<title>COLLARE</title>
		<meta charset="UTF-8">
        <?php include("headheader.php"); ?>
	</head>
    <body id="part1">
        <!-- site header-->
		<?php include("header.php"); ?>
        <!-- site navigation -->
        <?php include("sitenav.php"); ?>
        <!-- end site navigation -->
        
        <!--Start main content-->
        <div id="mainPanel">
            <?php include("filters.php"); ?>
            <div id="mainItemsPics">
                <?php include("earringsList.php"); ?>
                <?php include("ringsList.php"); ?>
                <?php include("necklacesList.php"); ?>
                <?php include("braceletsList.php"); ?>
                <?php include("beltsList.php"); ?>
            </div>
        </div>
        <!--End main content-->
        <!--Footer-->
        <?php include("footer.php"); ?>
    </body>
</html>