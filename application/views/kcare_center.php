<style type="text/css">
    .height4 {
        margin-top: 20px;
        margin-left: 40px;
        height: 230px;
    }
    .img-responsive {
        display: block;
        max-width: 100%;
        height: auto;
    }
</style>
<div class="row-fluid">
    <div class="span12 subnav">
        <div class="span5 alex menu"><h2>K-Link Care Center</h2></div>           
    </div>
</div>

<div class="row">   
    <?php foreach ($look as $row): ?>                   
        <div class="span3">            
            <div class="thumbnail height4" style="background-color: #c2c2c2">
                <img class="img-responsive" src="<?php echo base_url() . $row->image; ?>" alt="">
                <div class="caption">
                    <p class="text-center"><?php echo $row->title; ?></p>                                            
                </div>
            </div>            
        </div>
    <?php endforeach; ?>   
</div>
<div class="col-md-12">
    <?php
    echo
    '<p class="text-center">';
    echo $pagination;
    echo '</p>';
    ?>
</div>
<hr>