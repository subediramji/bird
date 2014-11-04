<link rel="stylesheet" href="<?php echo base_url().'content/uploads/styles/bootstrap.css'; ?>">
<div class="block" style="padding: 3% 5% 3% 5%;min-height: 400px;">
<?php if(!empty($pagequery))
{foreach ($pagequery as $page) {
                    ?>
                  
                         <div style="text-align: center;padding: 10px 0px 20px 0px;">
        <h1 style="color:#000;font-size: 30px;"> <?php echo $page->page_name ; ?></h1>            
    </div>
                      
                        <div >

                            <p ><?php echo $page->page_content; ?></p>        
                        </div>
                   

                <?php }} else {
     echo '<div style="text-align: center; font-size:55px;color:red;"><h1 style="color:red;"> Sorry ! No page are available to show.</h1></div>';
    } ?>





</div>
            <div class="clear"></div>
            <!class full is closed here>