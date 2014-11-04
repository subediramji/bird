<link rel="stylesheet" href="<?php echo base_url().'content/uploads/styles/bootstrap.css'; ?>">


<div class="block" style="padding: 3% 5% 3% 5%;min-height: 400px;">
    
 <?php if(!empty($singleBird)){foreach($singleBird as $allbirds){
          
 $title = $allbirds->post_title; } ?>   
    <div style="text-align: center;padding: 10px 0px 20px 0px;">
        <h1 style="color:#000;font-size: 30px;"><?php echo $title; ?></h1>            
    </div>
   

      <?php foreach($singleBird as $allbirds){
          
          $title = $allbirds->post_title;
        $image = $allbirds->image;
        $content_summary = $allbirds->post_summary;?>   
       
            <img src="<?php echo base_url().'content/uploads/images/thumb_'.$image; ?>" alt="" width="400" class="img_inner fleft">
            <h3><?php echo $title; ?></h3>
            <p><?php echo $content_summary; ?></p> 
           
     <?php } ?>

    
    
 <?php } else {
     echo '<div style="text-align: center; font-size:55px;color:red;"><h1 style="color:red;"> Sorry ! No birds are available to show.</h1></div>';
    } ?>   
    
</div>
<div style="clear: both;"></div>
