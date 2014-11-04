 <link rel="stylesheet" href="<?php echo base_url().'content/uploads/styles/form.css'; ?>">
 <script src="<?php echo base_url().'content/uploads/scripts/forms.js'; ?>"></script>
 <?php if(!empty($contact)){
     foreach($contact as $cinfo){
         $name = $cinfo->name;
         $address = $cinfo->address;
         $contact1 = $cinfo->contact_no1;
         $contact2 = $cinfo->contact_no2;
         $email = $cinfo->email;
         $form = $cinfo->show_form;
         $map = $cinfo->show_map;
     } 
     ?>
 
 <div class="content pt1"><div class="ic"></div>
  <div class="container_12">
     <div class="grid_6">
      <h2>Contact Info</h2><br>
            <div class="map">
          <?php if($map =="showMap"){ ?>  <figure class="img_inner">
                          
    <style>
      #map_canvas {
        width: 94%;
        height: 500px;
        margin: 0% 3% 0% 3%;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
         var myLatlng = new google.maps.LatLng(27.576281, 84.493833);
        var map_options = {
          center: myLatlng,
          zoom: 14,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options);
        
        var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h3 id="firstHeading" class="firstHeading" style="color:#000;"> BES - Nepal</h3>'+
      '<div id="bodyContent">'+
      '<p>Sauraha, Chitwan'+
      '</p>'+
      '</div>'+
      '</div>';

 var infowindow = new google.maps.InfoWindow({
      content: contentString
  });

    var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'BES - Nepal)'
  });
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>     
 
    <div id="location" class="col-sm-6 col-md-12" style="text-align: center; margin: 1% 0% 1% 0%;"><header class="page-header">
                <h1 style="color:#fff;">Location Map</h1>
              </header></div>
<div id="map_canvas"></div>
<div class="clear"></div>
<!class full is closed here>











 



          </figure> <?php } ?>
              <address>
                            <dl>
                                <dt><p><?php echo $name; ?><br>
                                    <?php echo $address; ?><br>
                                </dt>
                                <dd><span>Phone</span><?php echo $contact1; ?></dd>
                                <dd><span>Email:</span><?php echo $email; ?></dd>
                            </dl>
                         </address>
                       
          </div>
     </div>
      <?php if($form =="showForm"){ ?>
     <div class="grid_5 prefix_1">
       <h2 class="ic1">Contact Form</h2>
       <?php $attributes = array('id' => 'form'); echo form_open_multipart('email/send', $attributes); ?>

       <div class="success_wrapper">
       <div class="success">Contact form submitted!<br>
       <strong>We will be in touch soon.</strong> </div></div>
       <fieldset>
       <label class="name">
       <input type="text" name="name" value="Name:">
       <br class="clear">
       <span class="error error-empty">*This is not a valid name.</span><span class="empty error-empty">*This field is required.</span> </label>
       <label class="email">
       <input type="text" name="email" value="E-mail:">
       <br class="clear">
       <span class="error error-empty">*This is not a valid email address.</span><span class="empty error-empty">*This field is required.</span> </label>
       <label class="phone">
       <input type="tel" name="phone" value="Phone:">
       <br class="clear">
       <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
       <label class="message">
       <textarea name="message"></textarea>
       <br class="clear">
       <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
       <div class="clear"></div>
       <div class="btns"><a data-type="reset" class="btn">Clear</a><a data-type="submit" class="btn">Send</a>
       <div class="clear"></div>
       </div></fieldset><?php echo form_close(); ?>
        
     </div>
      <?php } ?>
   </div>
  </div>
 <?php } ?>