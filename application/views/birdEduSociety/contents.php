<?php if(!empty($birds)){ ?>
<div class="content page1"><div class="ic"></div>
  <div class="container_12">
  <div class="grid_12">
    <a href="#" class="next"></a><a href="#" class="prev"></a>
    <h2>New Birds</h2>
  </div>
  <div class="clear"></div>
<ul class="carousel1">
    <?php foreach ($birds as $allbird){
        $title = $allbird->post_title;
        $image = $allbird->image;
        $content = $allbird->post_summary;

        ?>
	<li class="grid_4">
		<img src="<?php echo base_url().'content/uploads/images/thumb_'.$image; ?>" alt="" class="img_inner fleft">
		<div class="extra_wrapper pad1">
			<p class="col2"><a href="#"><?php echo $title; ?> </a></p><?php echo $content; ?>
		</div>
	</li>
        
    <?php } ?>

</ul>
  <a href="<?php echo base_url().'index.php/view/birds'; ?>" class="btn">More</a>
  </div>
</div>
<?php } ?>