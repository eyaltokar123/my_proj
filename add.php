<?php
if(isset($_POST['submit'])){
    echo $_POST['dob'] . PHP_EOL;
    echo '<br />';
    echo $_POST['tob'];
}
?>
<script>
AIzaSyBuJtlvEV_DNye7PiUuaylzoc1TksdKNxA <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuJtlvEV_DNye7PiUuaylzoc1TksdKNxA&callback=loadMap">
</script>
<!DOCTYPE html>

<?php include('header.php'); ?>

<section class="container gray-text">
    <h4 class= "center">information</h4>
    <form class="white" action="add.php" method="POST">
        <label>date of birth: (comma seprated)</label>
        <input type="date" name="dob">
        <label>time of birth: (comma seprated)</label>
        <input type="hour" name="tob">
    <div class="center"> 
        
        <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        
</div>
    </form>

</section>

<?php include('footer.php'); ?>
</html>