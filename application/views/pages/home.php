
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:613px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="<?php echo site_url();?>/../assets/images/posts/logo.jpg" alt="Los Angeles" style=" left: -207px; top: 0px; z-index: -1; max-width: none; height: 613px; width: 1091.8px;">>
        </div>

        <div class="item">
            <img src="<?php echo site_url();?>/../assets/images/posts/logo2.png" alt="Chicago" style=" left: -207px; top: 0px; z-index: -1; max-width: none; height: 613px; width: 1091.8px;">>
        </div>

        <div class="item">
            <img src="<?php echo site_url();?>/../assets/images/posts/logo3.png" alt="New York" style= " left: -207px; top: 0px; z-index: -1; max-width: none; height: 613px; width: 1091.8px;">>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>