<script>
    $(document).ready(function(){
        var mybodyid = $('body').attr('id');
        var mynavid = '#nav' + mybodyid;
        $(mynavid).attr('class','youarehere');
    });
</script>
<nav id="siteNav">
    <ul>
        <li id="navpart1"><a href="items.php">All Items</a></li>
        <li id="navpart2"><a href="rings.php">Rings</a></li>
        <li id="navpart3"><a href="necklaces.php">Necklaces</a></li>
        <li id="navpart4"><a href="earrings.php">Earrings</a></li>
        <li id="navpart5"><a href="bracelets.php">Bracelets</a></li>
        <li id="navpart6"><a href="belts.php">Belts</a></li>
    </ul>
</nav>