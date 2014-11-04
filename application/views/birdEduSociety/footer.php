<style>
    .copyright
{
    text-align: center;
    padding: 3% 3% 0% 3%;
    color: #888;
}
</style>
<footer>    
    <div class="container_12">
    <?php 
    foreach($gadget as $info) { 
        if ($info->display == "Footer") {?>
    <div class="box footer_box" style="color: #fff; width: 20%; float: left; margin: 0% 2% 0% 2%;"> 
        <div class="footer_heading" style="font-size:20px;"><?php echo $info->name; ?></div><hr>
        <div class="footer_content">
            <?php echo $info->type; ?>
        </div>
    </div>
    <?php } } ?>
   
      
      
    <div class="grid_12">
      <div class="socials">
        <a href="#"></a>
        <a href="https://www.facebook.com/pages/Bird-Education-Society-Nepal/143076489059802" target="_blank"></a>
        <a href="#"></a>
        <a href="#"></a>
      </div>
    </div>
    
    <div class="clear"></div>
  </div>
    
  <div class="copyright"> &COPY; 2014 Bird Education Society - Nepal. All rights reserved.<br>
      Powered by <a href="http://salyani.org" target="_blank"><b>SALYANI</b></a>
</div>
    
    
</footer>
</body>
</html>  