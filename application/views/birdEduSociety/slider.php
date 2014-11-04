 <?php if(!empty($slide)){ ?>

<div class="top_block">
 <div class="slider-relative">
    <div class="slider-block">  
      <div class="slider">
        <ul class="items">
            <?php foreach ($slide as $sliderImg){
    $image = $sliderImg->slide_image;
    $title = $sliderImg->slide_name;
    $content = $sliderImg->slide_content;              
                ?>
            <li><img src="<?php echo base_url().'content/uploads/sliderImages/'.$image; ?>" width="1000" alt="">
            <div class="banner"><?php echo $title; ?> <p><?php echo $content; ?></p></div>
          </li>
            <?php } ?>
          
        </ul>
      </div> 
    </div>
  </div>

 </div>
 <?php } ?>