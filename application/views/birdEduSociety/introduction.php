 <div class="page1_block">
   <div class="container_12">
       <?php if(!empty($intro)){ foreach ($intro as $introduction){
           $title = $introduction->post_title;
           $content = $introduction->post_content;
       }
?>
     <div class="grid_6">
      <h2><?php echo $title ?></h2><br>
      <img src="<?php echo base_url().'content/uploads/basicImages/page1_img5.jpg'; ?>" alt="" class="img_inner fleft">
      <div class="extra_wrapper style1"><p class="text1">if needed other texts</p>
     

      </div>
      <div class="clear"></div>
      <?php echo $content; ?><br>
      <a href="#" class="btn">More</a>
     </div>
       <?php }?>
    <!-- for news -->  
       <?php //if(!empty($news)){ ?>
     <div class="grid_5 prefix_1">
         
       <h2 class="ic1">Latest News</h2>
       <ul class="list">
           <?php foreach($news as $allnews){ 
               $date = $allnews->date;
               $title = $allnews->title;
               $details = $allnews->details;
               $timestamp = strtotime($date);
               $fullDate = date('Y-M-d', $timestamp);
               $mth = date('M', $timestamp);
               $day = date('d', $timestamp);
               $year = date('Y', $timestamp);
               ?>
               
           
         <li>
           <span>
             <time datetime="<?php echo $fullDate; ?>"><?php echo $day ?><span><?php echo $mth ?></span></time></span>
             <div class="extra_wrapper">
           <div class="col1"><a href="#"><?php echo $title; ?></a><time datetime="<?php echo $fullDate; ?>"><?php echo $fullDate; ?></time></div><?php echo $details; ?></div>
         </li>
           <?php } ?>
         
       </ul>
       <a href="<?php echo base_url().'index.php/view/news'; ?>" class="btn">More</a>
     </div>
       <?php// } ?>
   </div>
 </div>