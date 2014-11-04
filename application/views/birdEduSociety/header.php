<!DOCTYPE html>
<html>
  <head>
   <meta charset="utf-8">
   
    <meta name="description" content=" Bird Education Society - Nepal is a pure non-profit organization.">
    <meta name="keywords" content="BES, bcdbes, besnepal, besnepal.org, NGO, ngo in nepal, sauraha, chitwan, bes nepal">
    

    <?php if(isset($meta))
{
     foreach ($meta as $data)
     {
         $title[] = $data->value;
     }
}
?>  
    <link rel="shortcut icon" href="<?php echo base_url().'content/uploads/images/'.$title[4]; ?>">
	<title><?php echo $title[1]; ?></title>
   
<link rel="stylesheet" href="<?php echo base_url().'content/uploads/styles/style.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url().'content/uploads/styles/grid.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url().'content/uploads/styles/reset.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url().'content/uploads/styles/superfish.css'; ?>">
     <link rel="stylesheet" href="<?php echo base_url().'content/uploads/styles/slider.css'; ?>">
     
     <script src="<?php echo base_url().'content/uploads/scripts/jquery.js'; ?>"></script>
     <script src="<?php echo base_url().'content/uploads/scripts/jquery-migrate-1.1.1.js'; ?>"></script>
     <script src="<?php echo base_url().'content/uploads/scripts/superfish.js'; ?>"></script>
     <script src="<?php echo base_url().'content/uploads/scripts/jquery.carouFredSel-6.1.0-packed.js'; ?>"></script>
     
     <script src="<?php echo base_url().'content/uploads/scripts/jquery.equalheights.js'; ?>"></script>
     <script src="<?php echo base_url().'content/uploads/scripts/jquery.easing.1.3.js'; ?>"></script>
     <script src="<?php echo base_url().'content/uploads/scripts/tms-0.4.1.js'; ?>"></script>
     <script src="<?php echo base_url().'content/uploads/scripts/jquery.ui.totop.js'; ?>"></script>
<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">

    <![endif]-->
     <script>
      $(window).load(function(){
      $('.slider')._TMS({
              show:0,
              pauseOnHover:false,
              prevBu:'.prev',
              nextBu:'.next',
              playBu:false,
              duration:800,
              preset:'fade', 
              pagination:true,//'.pagination',true,'<ul></ul>'
              pagNums:false,
              slideshow:8000,
              numStatus:false,
              banners:true,
          waitBannerAnimation:false,
        progressBar:false
      })  
      });
      
      
      
      
          $(window).load (
    function(){$('.carousel1').carouFredSel({auto: false,prev: '.prev',next: '.next', width: 960, items: {
      visible : {min: 3,
       max: 3},
height: 'auto',
 width: 300,

    }, responsive: true, 
    
    scroll: 1, 
    
    mousewheel: false,
    
    swipe: {onMouse: true, onTouch: true}});
    
    
    } );   
    
    jQuery(document).ready(function() {
    $().UItoTop({ easingType: 'easeOutQuart' });
    });

     </script>
    </head>
            
     
     <body  class="page1">
<!--==============================header=================================-->
 <header> 
  <div class="container_12">
    <div class="grid_12"> 
        <?php if(!empty($headerlogo)){
            foreach($headerlogo as $logo){
                $hlogo = $logo->description;
            }
        } ?>
        <?php if(!empty($headertitle)){
            foreach($headertitle as $title){
                $htitle = $title->description;
            }
        } ?>
        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url().'content/uploads/images/'.$hlogo; ?>" style="width: 80px; float: left;"alt="Bird education society"></a> <h1 style="float: left; padding-top: 27px;"><?php echo $htitle; ?> </h1>
         <div class="menu_block">
           <nav  class="" >
            <ul class="sf-menu">
                   <li class="current"><a href="#">Home</a></li>
                   <li class="with_ul"><a href="#">About Us </a>
                     <ul>
                         <li><a href="#"> Testimonials</a></li>
                         <li><a href="#">Archive</a></li>
                     </ul>
                   </li>
                   <li><a href="#">Services</a></li>
                   <li><a href="#">Blog</a></li>
                   <li><a href="<?php echo base_url().'index.php/view/contactUs'; ?>">Contacts </a></li>
                 </ul>
              </nav>
           <div class="clear"></div>
           </div>
           <div class="clear"></div>
      </div>
    </div>
</header>
