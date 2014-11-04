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
    <h1><a href="index.html"><img src="<?php echo base_url().'content/uploads/images/birdedu.png'; ?>" width="80" alt="Bird education society"></a> </h1>
         <div class="menu_block">
           <nav  class="" >
            <ul class="sf-menu">
                   <li class="current"><a href="index.html">Home</a></li>
                   <li class="with_ul"><a href="index-1.html">About Us </a>
                     <ul>
                         <li><a href="#"> Testimonials</a></li>
                         <li><a href="#">Archive</a></li>
                     </ul>
                   </li>
                   <li><a href="index-2.html">Services</a></li>
                   <li><a href="index-3.html">Blog</a></li>
                   <li><a href="index-4.html">Contacts </a></li>
                 </ul>
              </nav>
           <div class="clear"></div>
           </div>
           <div class="clear"></div>
      </div>
    </div>
</header>
<div class="top_block">
 <div class="slider-relative">
    <div class="slider-block">
      <div class="slider">
        <ul class="items">
            <li><img src="<?php echo base_url().'content/uploads/sliderImages/1.jpg'; ?>" width="1000" alt="">
            <div class="banner">They Need  Your <span>Love</span> and <i>Care</i><p>It is so easy to make them happy</p></div>
          </li>
          <li><img src="<?php echo base_url().'content/uploads/sliderImages/1.jpg'; ?>" alt="">
            <div class="banner"><p>Bird </p></div>
          </li>
          <li><img src="<?php echo base_url().'content/uploads/sliderImages/1.jpg'; ?>" alt="">
            <div class="banner"><p>want to see bird</p></div>
          </li>
          <li><img src="<?php echo base_url().'content/uploads/sliderImages/1.jpg'; ?>" alt="">
            <div class="banner"><p>all birds info</p></div>
          </li>
        </ul>
      </div>
    </div>
  </div>

 </div> 
 <div class="page1_block">
   <div class="container_12">
     <div class="grid_6">
      <h2>Welcome to Our Site</h2><br>
      <img src="<?php echo base_url().'content/uploads/basicImages/page1_img5.jpg'; ?>" alt="" class="img_inner fleft">
      <div class="extra_wrapper style1"><p class="text1">for more info about this free website template created by TemplateMonster.com </p>
     

      </div>
      <div class="clear"></div>
      Praesent quis orci eget diam viverra consequat. Fusce sagittis quam in pulvinar sollicitudin velit velit cursus nibh ullamcorper accumsan sem lectus ut sapien. Donec venenatis posuere velit aty convallis neque ullamcorper quis. Integer posuere ipsum eu risus sollicitudin nec varius eratylo luctus. Fusce fringilla erat ac urna pe llentesque congue. Nunc fringilla diam sit amet adipi scing bibendum turpis velit feugiat urna et pharetra neque nisi ac nunc. Vivamus est quam dapibuslok. ..ullamco rper imperdiet nec euismod ut arcu. Nulla facilisi. Etiam mauris lorem pulvinar vel con sequat ut pretium ac erat. Morbi facilisis elit eu nisl blandit ac blandit enim faucibu. Praesent quis orci eget diam viverra consequat. Fusce sagittis.<br>
      <a href="#" class="btn">More</a>
     </div>
     <div class="grid_5 prefix_1">
       <h2 class="ic1">Latest News</h2>
       <ul class="list">
         <li>
           <span>
             <time datetime="2013-01-01">27<span>APR</span></time></span>
             <div class="extra_wrapper">
           <div class="col1"><a href="#">Duis posuere consectetur pellentesqe;</a><time datetime="2013-01-01">April 27.03.13</time></div>Sed nisi turpis, pellentesque at ultrices in dapibus in magna. Nunc easi diam risus,placerat ut scelerisque  suscipit eu ante. Nullam vitae dolor ullcper felises</div>
         </li>
         <li>
           <span class="cnt">
             <time datetime="2013-01-01">28<span>APR</span></time></span> <div class="extra_wrapper">
           <div class="col1"><a href="#">Kuuis posuere consectetur pellentes;</a><time datetime="2013-01-01">April 28.03.13</time></div>Eed nisi turpis, pellentesque at ultrices in dapibus in magna. Nunc easi diam risulacerat ut scelerisque et suscipit eu ante. Nullam vitae dolor ullcper felises. </div>
         </li>
         <li>
           <span>
             <time datetime="2013-01-01">29<span>APR</span></time></span> <div class="extra_wrapper">
           <div class="col1"><a href="#">Opuis posuere honsectetur pellentesyt;</a><time datetime="2013-01-01">April 29.03.13</time></div>Koed nisi turpis, pellentesque at ultrices in dapibus in magna. Nunc easi diam risujo placerat ut scelerisque et suscipit eu ante. Ullam vitae dolor ullcper felises. </div>
         </li>
       </ul>
     </div>
   </div>
 </div>
<!--=======content================================-->

<div class="content page1"><div class="ic"></div>
  <div class="container_12">
  <div class="grid_12">
    <a href="#" class="next"></a><a href="#" class="prev"></a>
    <h2>Pets for Adoption</h2>
  </div>
  <div class="clear"></div>
<ul class="carousel1">
	<li class="grid_4">
		<img src="<?php echo base_url().'content/uploads/basicImages/carousel1_img1.jpg'; ?>" alt="" class="img_inner fleft">
		<div class="extra_wrapper pad1">
			<p class="col2"><a href="#">Praesent quis orcidiam viverralopr </a></p>Raes quis orci eget diam viverralopr con equat. Fusce sagit quam ihui hyhy kolo opirlo pulvinarhjkjo.
		</div>
	</li>
	<li class="grid_4">
		<img src="<?php echo base_url().'content/uploads/basicImages/carousel1_img2.jpg'; ?>" alt="" class="img_inner fleft">
		<div class="extra_wrapper pad1">
			<p class="col2"><a href="#">Aeraesent quis hoj rcieget diam iverral.</a></p>Loaesent quis orci diam viverralopr con equat. Lusce sagittis quam ihui hyhy opir pulvinarhjk velit.
		</div>
	</li>
	<li class="grid_4">
		<img src="<?php echo base_url().'content/uploads/basicImages/carousel1_img3.jpg'; ?>" alt="" class="img_inner fleft">
		<div class="extra_wrapper pad1">
			<p class="col2"><a href="#">Tyeraesent quis hojo rcieget iam iverralji.</a></p>Eroaesent quis orci ediam viverralopr con jikjulo poiu retyulo hyk equat. Usce sagittis ki quam ihui hyhy opirp. 
		</div>
	</li>
	<li class="grid_4">
		<img src="<?php echo base_url().'content/uploads/basicImages/carousel1_img4.jpg'; ?>" alt="" class="img_inner fleft">
		<div class="extra_wrapper pad1">
			<p class="col2"><a href="#">Aeraesent quis hoj rcieget diam iverral.</a></p>Loaesent quis orci diam viverralopr con equat. Lusce sagittis quam ihui hyhy opir pulvinarhjk velit.
		</div>
	</li>
	<li class="grid_4">
		<img src="<?php echo base_url().'content/uploads/basicImages/carousel1_img5.jpg'; ?>" alt="" class="img_inner fleft">
		<div class="extra_wrapper pad1">
			<p class="col2"><a href="#">Aeraesent quis hoj rcieget diam iverral.</a></p>Loaesent quis orci diam viverralopr con equat. Lusce sagittis quam ihui hyhy opir pulvinarhjk velit.
		</div>
	</li>
	<li class="grid_4">
		<img src="<?php echo base_url().'content/uploads/basicImages/carousel1_img6.jpg'; ?>" alt="" class="img_inner fleft">
		<div class="extra_wrapper pad1">
			<p class="col2"><a href="#">Aeraesent quis hoj rcieget diam iverral.</a></p>Loaesent quis orci diam viverralopr con equat. Lusce sagittis quam ihui hyhy opir pulvinarhjk velit.
		</div>
	</li>
</ul>
  </div>
</div>
<div class="bottom_block">
  <div class="container_12">
    <div class="grid_6">
      <h2>Pet Care Tips </h2><br>
      Praesent quis orci eget diam viverra consequat. Fusce sagittis quam in pulvinar sollicitudin velit velit cursus nibh ullamcorper accumsan sem lectus ut sapien. Donec venenatis posuere velit a convallis neque ullamcorper quis. Integer posuere ipsum eu risus sollicitudin nec varius erat luctus. Fusce fringilla erat ac urna pe llentesque congue. Nunc fringilla, diam sit amet adipi scing bibendum turpis velit feugiat urna, et pharetra neque nisi ac nunc. Vivamus est quam dapibus ullamco rper imperdiet nec, euismod ut arcu. Nulla facilisi. Etiam mauris lorem pulvinar vel con sequat ut pretium ac erat. Morbi facilisis elit eu nisl blandit ac blandit enim faucibus. Praesent quis orci eget diam viverra consequat. Fusce sagittis. 
    </div>
    <div class="grid_4 prefix_2">
      <h2 class="ic1">Any Question?</h2>
      <img src="<?php echo base_url().'content/uploads/basicImages/page1_img4.jpg'; ?>" alt="" class="fleft img_inner">
       <div class="extra_wrapper">
         <div class="cont">
           Call Us Free:  
           <span>+1 800 559 6580</span>
         </div>
       </div>
       <div class="clear"></div>
       Nunc fringilla, diam sit amet adipi scing bibendum turpis velit feugiat urna, et pharetra neque nisi ac nunc. Viv amus est quam dapibus ullamco rper imperdiet nec euismod ut arcu. Nulla facilisi. Etiam mauris. 
    </div>
  </div>
</div>
<!--==============================footer=================================-->

<footer>    
  <div class="container_12">
    <div class="grid_12">
      <div class="socials">
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
      </div>
     <p>| <a href="#">Privacy Policy</a> | <a href="" rel="nofollow"></a></p><p> <a href="http://www.websitetemplatesonline.com" target="_blank"></a>| <a href="http://www.getjoomlatemplatesfree.com/" title="Free templates for Joomla! CMS"></a> </p>
     
    </div>
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>     
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
      
    </body>
</html>