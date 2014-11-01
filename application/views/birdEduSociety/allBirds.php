<link rel="stylesheet" href="<?php echo base_url().'content/uploads/styles/bootstrap.css'; ?>">


<div class="block" style="padding: 3% 5% 3% 5%;min-height: 400px;">
    
 <?php if(!empty($birds)){ ?>   
    <div style="text-align: center;padding: 10px 0px 20px 0px;">
        <h1 style="color:#000;font-size: 30px;">All Birds</h1>            
    </div>
   
    <div class="row">
      <?php foreach($birds as $allbirds){
          $id = $allbirds->id;
          $title = $allbirds->post_title;
        $image = $allbirds->image;
        $content_summary = $allbirds->post_summary;?>   
        <a href="<?php echo base_url().'index.php/view/bird/'.$id; ?>">
            <div class="col-lg-3" style="width: 20%;float: left;margin: 1.5%;padding: 1%; min-height: 280px;outline: 1px solid #fff;">
            <img src="<?php echo base_url().'content/uploads/images/thumb_'.$image; ?>" alt="" width="300" class="img_inner fleft">
            <h3><?php echo $title; ?></h3>
            <p><?php echo $content_summary; ?></p> 
            </div></a>
     <?php } ?>
    </div>
    
    
 <?php } else {
     echo '<div style="text-align: center; font-size:55px;color:red;"><h1 style="color:red;"> Sorry ! No birds are available to show.</h1></div>';
    } ?>   
    
</div>
<div style="clear: both;"></div>
