<?php
include('includes/arrays.php');
if (isset($_GET['item'])) {
    $locationDetails = $array[$_GET['item']];
}
//echo $locationDetails['imageLink']; 
// echo $locationDetails['location'];
//echo $locationDetails['description'];

// echo $_GET['item'];
// echo $locationDetails;
?>
<link rel="stylesheet" href="styles.css">
<?php
include('includes/header.php');
?>
<!-- main start -->
<br><br>
<div class="container py-4 ">
    <div class="p-5 mb-4 text-center bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">This is <?php echo $locationDetails['location']; ?>! </h1>
            <p class="fs-4"><?php echo $locationDetails['description']; ?></p>
        </div>
    </div>

    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="rounded-3">
                <img class="w-100 img-responsive" src="<?php echo $locationDetails['imageLink1']; ?>" alt="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="rounded-3">
                <img class="w-100 img-responsive" src="<?php echo $locationDetails['imageLink2']; ?>" alt="">
            </div>
        </div>
    </div>
</div>
<!-- </div> -->
<?php
    foreach ($locationDetails['hotels'] as $hotelItem) {
        include('includes/hotelList.php');
    }
?>

<!-- main end -->
<?php
include('includes/footer.php');

?>