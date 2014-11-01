<div class="block" style="padding: 3% 5% 3% 5%;min-height: 400px;">
<?php
if($albumquery){ ?>
      <div style="text-align: center;padding: 10px 0px 20px 0px;">
        <h1 style="color:#000;font-size: 30px;">Gallery</h1>            
    </div>
    <?php
foreach ($albumquery as $data)
{
	$aid = $data->id;	
        
                  
	$result = $this->viewmodel->get_media_image($aid); 
        if($result)
        {
foreach( $result as $abc)
{
   ?> 
    

<div class="row">
   
    

    
        <div class="col-lg-3" style="width: 20%;float: left;margin: 1.5%;padding: 1%; outline: 1px solid #fff;">
            <a href="<?php echo base_url().'index.php/view/photo/'.$data->id;?>">
            <h3 style="color: #100;padding: 2%;"><?php echo $data->album_name; ?></h3>
             <?php //echo anchor('view/photo/'.$data->id,$data->album_name); ?> 
            <img src="<?php echo base_url();?>content/uploads/images/<?php echo $abc->media_type; ?>"  />
        </div>
</div> 
<?php }}
else 
 {      
 ?>     
<div class="row">
   
    

    
        <div class="col-lg-3" style="width: 20%;float: left;margin: 1.5%;padding: 1%; outline: 1px solid #fff;">
            <a href="<?php echo base_url().'index.php/view/photo/'.$data->id;?>">
            <h3 style="color: #100;padding: 2%;"><?php echo $data->album_name; ?></h3>
             <?php //echo anchor('view/photo/'.$data->id,$data->album_name); ?> 
           <img src="<?php  echo base_url();?>content/uploads/images/iSjv5logo.jpg"  />
        </div>
</div> 
 <?php    
 }}?> 
 <?php  }
 else{
      echo '<div style="text-align: center; font-size:55px;color:red;"><h1 style="color:red;"> Sorry ! No albums are available to show.</h1></div>';
 }?>
            </div>
            <div class="clear"></div>
            <!class full is closed here>