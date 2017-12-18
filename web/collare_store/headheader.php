<!--My Stylesheet for the items page-->
<link rel="stylesheet" href="items.css" type="text/css" />
<!--Connection to JQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<!--Use of FancyBox JQuery plugin-->
<script type="text/javascript" src="fancyapps-fancyBox/source/jquery.fancybox.js"></script>
<link rel="stylesheet" type="text/css" href="fancyapps-fancyBox/source/jquery.fancybox.css" media="screen" />
<!--Use of MixItUp-->
<script type="text/javascript" src="mixitup-master/build/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="mixitup-master/src/jquery.mixitup.js"></script>
<!--FancyBox JQuery Scirpt-->
<script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox();
    });
</script>
<!--Mixitup JQuery Scirpt-->
<script type="text/javascript">
    $(function(){
        $('#mainItemsPics').mixItUp();  
    });    
</script>
<!--Style needed for MixitUp-->
<style>
    #mainItemsPics .mix{display: none;}
</style>
<!--Link to Favicon-->
<link rel="icon" type="image/x-icon" href="favicon/favicon.ico" />
<link rel="shortcut icon" href="favicon/favicon.ico" type="image/ico" />
