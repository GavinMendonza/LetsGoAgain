<div class="container">
    <div class="col-sm-12">
        <a target="_blank" href="<?php echo $hotelItem['hotelWebSite'];?>" class="list-group-item clearfix">
            <div class="float-start">
                <h4 class="list-group-item-heading"><?php echo $hotelItem['hotelName'];?></h4>
                <p class="list-group-item-text"><?php echo $hotelItem['hotelDesc'];?></p>
            </div>
            <div class="d-inline float-end">
                <img src="<?php echo $hotelItem['hotelImage'];?>" alt="<?php echo $hotelItem['hotelName'];?> image" class="float-end img-responsive"   style="width: 115px; height: 65px; object-fit: cover;">
            </div>
        </a>
    </div>
</div>