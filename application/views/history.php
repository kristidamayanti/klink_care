<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="row-fluid">
    <div class="span12 subnav">
        <div class="span4 alex menu"><h2>History's</h2></div>
        <div class="span4 menu offset4 pull-right"><p>home > history's</p></div>          
    </div>
</div>

<div class="row-fluid">          
    <div class="span7">
        <br>
        <div class="thumbnail">
            <img src="<?php echo base_url().'images/' ?>kcf-history.jpg" alt="">
        </div>
		<?php foreach($result as $row) : ?>
        <h3 class="alex white"><?php echo $row->judul; ?></h3>
        <p><?php echo $row->isi; ?></p>
		<?php endforeach; ?>
    </div>

    <div class="span4">
        <br>
        <div class="thumbnail">
            <img src="<?php echo base_url().'images/' ?>peletakan14_icon.jpg" alt="">
        </div>
        <div class="widget">
            <h3 class="alex">Information</h3>
            <p>K-LINK CARE FOUNDATION adalah Yayasan yang bergerak dibidang sosial,
                bertujuan untuk membantu masyarakat yang kurang mampu.</p>
            <p>Anda dapat melakukan donasi ke Rek BCA NO 450.307.8816 A/N YAYASAN K-LINK PEDULI </p>
        </div>
        <div class="widget">
            <h4 class="alex">General Inquiries</h4>

            <ul>
                <li> <i class="icon-map-marker"></i> K-LINK Tower Lt. 11. </li>
                <li> Jl Gatot Subroto Kav.59A Jakarta Selatan 12950</li>
            </ul>

            <ul>
                <li><i class="icon-headphones"></i> <p>+62 21 29027000</p></li>
                <li><i class="icon-envelope "></i> <p> info@k-linkcare.com</p></li>
                <li><i class="icon-globe"></i> <p> www.k-linkcare.com</p></li>
            </ul>

        </div>

       <div class="widget">
            <h4 class="alex">Working Hours</h4>
            <ul>
                <li><i class="icon-time"></i> Monday - Friday <span class="hours">10 am to 6 pm</span></li>
                <li><i class="icon-time"></i> Saturday <span class="hours">10 am to 2 pm</span></li>
                <li><i class="icon-ban-circle"></i> Sunday <span class="hours">Closed</span></li>
            </ul>
        </div>
    </div>
</div>

<hr>
