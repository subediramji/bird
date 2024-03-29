<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class view extends CI_Controller {
 public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('viewmodel');
        $this->load->model('dbmodel');
        $this->load->model('contact_model');
        $this->load->model('dbsetting');
        $this->load->model('model1');
    }
public function index()
    {
        $data['meta'] = $this->dbsetting->get_meta_data();
    $data['gadget'] = $this->model1->get_gaget();  
    $data['headertitle']= $this->viewmodel->get_header_title();
    $data['headerlogo']= $this->viewmodel->get_header_logo();
    //$data['slide'] = $this->viewmodel->get_slider(); 
    $slidequery = $this->viewmodel->get_slider();
     $slider = json_encode($slidequery);
        $data["slider_json"] =  $slider;
    $data['intro'] = $this->viewmodel->get_post_for_introduction();
    $data["news"] = $this->viewmodel->get_event_news();
    $data['birds'] = $this->viewmodel->get_post_for_birds_limit();


         $this->load->view('birdEduSociety/header',$data);
         $this->load->view('birdEduSociety/slider',$data);
         $this->load->view('birdEduSociety/introduction',$data);
         
         $this->load->view('birdEduSociety/contents',$data);
         $this->load->view('birdEduSociety/footer', $data);
    }
    function members(){
          $data['meta'] = $this->dbsetting->get_meta_data();
    $data['gadget'] = $this->model1->get_gaget();  
    $data['headertitle']= $this->viewmodel->get_header_title();
    $data['headerlogo']= $this->viewmodel->get_header_logo();
    $data['birds'] = $this->viewmodel->get_post_for_birds_limit();
    
       $this->load->view('birdEduSociety/header',$data);
        $this->load->view('birdEduSociety/member', $data);       
       
       $this->load->view('birdEduSociety/footer', $data);
    }


    public function birds(){
         $data['meta'] = $this->dbsetting->get_meta_data();
    $data['gadget'] = $this->model1->get_gaget();  
    $data['headertitle']= $this->viewmodel->get_header_title();
    $data['headerlogo']= $this->viewmodel->get_header_logo();
    $data['birds'] = $this->viewmodel->get_post_for_birds();
    
       $this->load->view('birdEduSociety/header',$data);
        $this->load->view('birdEduSociety/allBirds', $data);       
       
       $this->load->view('birdEduSociety/footer', $data);
    }
    public function bird($id=NULL)
    {
        $data['meta'] = $this->dbsetting->get_meta_data();
    $data['gadget'] = $this->model1->get_gaget();  
    $data['headertitle']= $this->viewmodel->get_header_title();
    $data['headerlogo']= $this->viewmodel->get_header_logo();
    $data['singleBird'] = $this->viewmodel->get_post_for_birds_by_id($id);
       $this->load->view('birdEduSociety/header',$data);
        $this->load->view('birdEduSociety/singleBird', $data);       
       
       $this->load->view('birdEduSociety/footer', $data);
    }

    public function contactUs()
    {
        $data['meta'] = $this->dbsetting->get_meta_data();
    $data['gadget'] = $this->model1->get_gaget();  
    $data['headertitle']= $this->viewmodel->get_header_title();
    $data['headerlogo']= $this->viewmodel->get_header_logo(); 
     $data['contact'] = $this->contact_model->get_contact_form();
      $this->load->view('birdEduSociety/header',$data);
        $this->load->view('birdEduSociety/contactForm', $data);       
       
       $this->load->view('birdEduSociety/footer', $data);
    }

    

    public function sucess_story_ajax(){
         //$num = $_POST['nor'];
         //var_dump($num);
      $data['headerlogo']= $this->viewmodel->get_header_logo();
       $data['gadget'] = $this->model1->get_gaget();                    //for all gadget
         $data["postqueryall"] = $this->viewmodel->get_post_all();
        // var_dump($query);
         
                $this->load->view('central/header',$data);      
                $this->load->view('central/sucess_story',$data);
                $this->load->view('central/footer');
    }
    
    public function page($id=NULL)
    {
        $nav= $this->uri->uri_string();
        $assc_id= str_replace('view/','', $nav);
        $data['meta'] = $this->dbsetting->get_meta_data();
        $limit['post_limit']=$this->viewmodel->get_max_post_to_show();
        $data['postquery'] = $this->viewmodel->get_post($limit["post_limit"]);
        $limit['page_limit']=$this->viewmodel->get_max_page_to_show();
        $data['pagequery'] = $this->viewmodel->get_page($limit["page_limit"],$id);
        $data['slidequery'] = $this->viewmodel->get_slider();
        $data['headerquery']= $this->viewmodel->get_design_setup();
        $data['headertitle']= $this->viewmodel->get_header_title();
        $data['headerColor']= $this->viewmodel->get_header_color();
         $data['sidebarColor']= $this->viewmodel->get_sidebar_color();
        $data['headerlogo']= $this->viewmodel->get_header_logo();
        $data['faviconicon']= $this->viewmodel->get_favicon_icon();
        $data['commentallowquery']= $this->viewmodel->get_comment_allow();
        $data['headerdescription']= $this->viewmodel->get_header_description();
        $data['selectedpagequery'] = $this->viewmodel->get_desired_page($id);
       $data['commentallowquery']= $this->viewmodel->get_comment_allow();
        $data['likeallowquery']= $this->viewmodel->get_like_allow();
        $data['shareallowquery']= $this->viewmodel->get_share_allow();
       $data['gadget'] = $this->model1->get_gaget();                    //for all gadget
        $data['recentPost']= $this->model1->get_gaget_recentPost();   //for recent post gadget.
         foreach ($data['recentPost'] as $dat)
        {
             $setting = $dat->setting;
             parse_str($setting);
            
        }
         $data['noOfRecentPost'] = $this->viewmodel->recentpost_get_post($post);
        
         $this->load->view('birdEduSociety/header',$data);
         $this->load->view('birdEduSociety/pages',$data);
       // $this->load->view('menuview/event',$data);
       // $this->load->view('menuview/slider',$data);
       // $this->load->view('menuview/selectedPage',$data);
         $this->load->view('birdEduSociety/footer', $data);
        
    }
    
    public function pages(){
         $nav= $this->uri->uri_string();
        $assc_id= str_replace('view/','', $nav);
        $data['meta'] = $this->dbsetting->get_meta_data();
        $limit['post_limit']=$this->viewmodel->get_max_post_to_show();
        $data['postquery'] = $this->viewmodel->get_post($limit["post_limit"]);
       // $limit['page_limit']=$this->viewmodel->get_max_page_to_show();
        $data['pagequery'] = $this->viewmodel->get_all_pages();
        $data['slidequery'] = $this->viewmodel->get_slider();
        $data['headerquery']= $this->viewmodel->get_design_setup();
        $data['headertitle']= $this->viewmodel->get_header_title();
        $data['headerColor']= $this->viewmodel->get_header_color();
         $data['sidebarColor']= $this->viewmodel->get_sidebar_color();
        $data['headerlogo']= $this->viewmodel->get_header_logo();
        $data['faviconicon']= $this->viewmodel->get_favicon_icon();
        $data['commentallowquery']= $this->viewmodel->get_comment_allow();
        $data['headerdescription']= $this->viewmodel->get_header_description();
        //$data['selectedpagequery'] = $this->viewmodel->get_desired_page($id);
       $data['commentallowquery']= $this->viewmodel->get_comment_allow();
        $data['likeallowquery']= $this->viewmodel->get_like_allow();
        $data['shareallowquery']= $this->viewmodel->get_share_allow();
       $data['gadget'] = $this->model1->get_gaget();                    //for all gadget
        $data['recentPost']= $this->model1->get_gaget_recentPost();   //for recent post gadget.
         foreach ($data['recentPost'] as $dat)
        {
             $setting = $dat->setting;
             parse_str($setting);
            
        }
         $data['noOfRecentPost'] = $this->viewmodel->recentpost_get_post($post);
        
        $this->load->view('menuview/header',$data);
        $this->load->view('menuview/menu',$data);
        $this->load->view('menuview/event',$data);
        $this->load->view('menuview/slider',$data);
        $this->load->view('menuview/pages',$data);
        $this->load->view('menuview/footer',$data);  
    }
    
    public function category($id=NULL)
    {
        $nav= $this->uri->uri_string();
        $assc_id= str_replace('view/','', $nav);
        $data['meta'] = $this->dbsetting->get_meta_data();
       $limit['post_limit']=$this->viewmodel->get_max_post_to_show();
        $data['postquery'] = $this->viewmodel->get_post($limit["post_limit"]);
    
        $data['slidequery'] = $this->viewmodel->get_slider();
        $data['headerquery']= $this->viewmodel->get_design_setup();
        $data['headertitle']= $this->viewmodel->get_header_title();
        $data['headerColor']= $this->viewmodel->get_header_color();
         $data['sidebarColor']= $this->viewmodel->get_sidebar_color();
        $data['headerlogo']= $this->viewmodel->get_header_logo();
        $data['faviconicon']= $this->viewmodel->get_favicon_icon();
        $data['commentallowquery']= $this->viewmodel->get_comment_allow();
        $data['headerdescription']= $this->viewmodel->get_header_description();
        $data['selectedcategoryquery'] = $this->viewmodel->get_desired_category($id);
         $data['viewcomments'] = $this->viewmodel->get_comments($assc_id);
       $data['gadget'] = $this->model1->get_gaget();                    //for all gadget
        $data['recentPost']= $this->model1->get_gaget_recentPost();   //for recent post gadget.
         foreach ($data['recentPost'] as $dat)
        {
             $setting = $dat->setting;
             parse_str($setting);
           
        }
         $data['noOfRecentPost'] = $this->viewmodel->recentpost_get_post($post);
        
        $this->load->view('menuview/header',$data);
        $this->load->view('menuview/menu',$data);
        $this->load->view('menuview/event',$data);
        $this->load->view('menuview/slider',$data);
        $this->load->view('menuview/selectedCategory',$data);
        $this->load->view('menuview/footer',$data);  
        
    }
    public function post($id=NULL)
    {
        $nav= $this->uri->uri_string();
        $assc_id= str_replace('view/','', $nav);
        $data['meta'] = $this->dbsetting->get_meta_data();
        $limit['post_limit']=$this->viewmodel->get_max_post_to_show();
        $data['postquery'] = $this->viewmodel->get_post($limit["post_limit"]);
        $limit['page_limit']=$this->viewmodel->get_max_page_to_show();
        $data['pagequery'] = $this->viewmodel->get_page($limit["page_limit"]);
        $data['slidequery'] = $this->viewmodel->get_slider();
        $data['headerquery']= $this->viewmodel->get_design_setup();
        $data['headertitle']= $this->viewmodel->get_header_title();
        $data['headerColor']= $this->viewmodel->get_header_color();
         $data['sidebarColor']= $this->viewmodel->get_sidebar_color();
        $data['headerlogo']= $this->viewmodel->get_header_logo();
        $data['faviconicon']= $this->viewmodel->get_favicon_icon();
        $data['commentallowquery']= $this->viewmodel->get_comment_allow();
        $data['likeallowquery']= $this->viewmodel->get_like_allow();
        $data['shareallowquery']= $this->viewmodel->get_share_allow();
        
        $data['viewcomments'] = $this->viewmodel->get_comments($assc_id);
        $data['headerdescription']= $this->viewmodel->get_header_description();
        $data['selectedpostquery'] = $this->viewmodel->get_desired_post($id, $limit);
        $data['gadget'] = $this->model1->get_gaget();                    //for all gadget
        $data['recentPost']= $this->model1->get_gaget_recentPost();   //for recent post gadget.
         foreach ($data['recentPost'] as $dat)
        {
             $setting = $dat->setting;
             parse_str($setting);
           
        }
        $data['noOfRecentPost'] = $this->viewmodel->recentpost_get_post($post);
        
        $this->load->view('menuview/header',$data);
        $this->load->view('menuview/menu',$data);
        $this->load->view('menuview/event',$data);
        $this->load->view('menuview/slider',$data);
      
        $this->load->view('menuview/selectedPost', $data);
        $this->load->view('menuview/footer',$data);
        
        
    }
    public function posts()
    {
        $nav= $this->uri->uri_string();
        $assc_id= str_replace('view/','', $nav);
        $data['meta'] = $this->dbsetting->get_meta_data();
        $limit['post_limit']=$this->viewmodel->get_max_post_to_show();
        $data['postquery'] = $this->viewmodel->get_post($limit["post_limit"]);
        $data['allpostquery'] = $this->viewmodel->get_all_post();
        $limit['page_limit']=$this->viewmodel->get_max_page_to_show();
        $data['pagequery'] = $this->viewmodel->get_page($limit["page_limit"]);
        $data['slidequery'] = $this->viewmodel->get_slider();
        $data['headerquery']= $this->viewmodel->get_design_setup();
        $data['headertitle']= $this->viewmodel->get_header_title();
        $data['headerColor']= $this->viewmodel->get_header_color();
         $data['sidebarColor']= $this->viewmodel->get_sidebar_color();
        $data['headerlogo']= $this->viewmodel->get_header_logo();
        $data['faviconicon']= $this->viewmodel->get_favicon_icon();        
       $data['headerdescription']= $this->viewmodel->get_header_description();
       $data['gadget'] = $this->model1->get_gaget();                    //for all gadget
        $data['recentPost']= $this->model1->get_gaget_recentPost();   //for recent post gadget.
         foreach ($data['recentPost'] as $dat)
        {
             $setting = $dat->setting;
             parse_str($setting);
           
        }
       $data['noOfRecentPost'] = $this->viewmodel->recentpost_get_post($post);
        
        $this->load->view('menuview/header',$data);
        $this->load->view('menuview/menu',$data);
        $this->load->view('menuview/event',$data);
        $this->load->view('menuview/slider',$data);
        $this->load->view('menuview/posts',$data);
      
        $this->load->view('menuview/footer',$data);
        
        
    }
    
    
    
    public function photos()
    {
        $data['meta'] = $this->dbsetting->get_meta_data();
       $limit['post_limit']=$this->viewmodel->get_max_post_to_show();
        $data['postquery'] = $this->viewmodel->get_post($limit["post_limit"]);
        $limit['page_limit']=$this->viewmodel->get_max_page_to_show();
       // $data['pagequery'] = $this->viewmodel->get_page($limit["page_limit"],$id);
        $data['slidequery'] = $this->viewmodel->get_slider();
        $data['headerquery']= $this->viewmodel->get_design_setup();
        $data['headertitle']= $this->viewmodel->get_header_title();
        $data['headerColor']= $this->viewmodel->get_header_color();
         $data['sidebarColor']= $this->viewmodel->get_sidebar_color();
        $data['headerlogo']= $this->viewmodel->get_header_logo();
        $data['faviconicon']= $this->viewmodel->get_favicon_icon();
        $data['headerdescription']= $this->viewmodel->get_header_description();
        $data['albumquery'] = $this->viewmodel->get_album();
       $data['gadget'] = $this->model1->get_gaget();                    //for all gadget
        $data['recentPost']= $this->model1->get_gaget_recentPost();   //for recent post gadget.
         foreach ($data['recentPost'] as $dat)
        {
             $setting = $dat->setting;
             parse_str($setting);
            
        }
       // $data['noOfRecentPost'] = $this->viewmodel->recentpost_get_post($post);
        
        $this->load->view('birdEduSociety/header',$data);
       // $this->load->view('menuview/menu',$data);
       // $this->load->view('menuview/event',$data);
       // $this->load->view('menuview/slider',$data);
        $this->load->view('birdEduSociety/album',$data);
        $this->load->view('birdEduSociety/footer',$data);  
        
    }
    
    public function photo($id=NULL)
    {
        $data['meta'] = $this->dbsetting->get_meta_data();
        $limit['post_limit']=$this->viewmodel->get_max_post_to_show();
        $data['postquery'] = $this->viewmodel->get_post($limit["post_limit"]);
        $limit['page_limit']=$this->viewmodel->get_max_page_to_show();
        //$data['pagequery'] = $this->viewmodel->get_page($limit["page_limit"]);
        $data['slidequery'] = $this->viewmodel->get_slider();
        $data['headerquery']= $this->viewmodel->get_design_setup();
        $data['headertitle']= $this->viewmodel->get_header_title();
        $data['headerColor']= $this->viewmodel->get_header_color();
         $data['sidebarColor']= $this->viewmodel->get_sidebar_color();
        $data['headerlogo']= $this->viewmodel->get_header_logo();
        $data['faviconicon']= $this->viewmodel->get_favicon_icon();
        $data['headerdescription']= $this->viewmodel->get_header_description();
        $data['albumquery'] = $this->viewmodel->get_album_id($id);
        $data['gadget'] = $this->model1->get_gaget();                    //for all gadget
        $data['recentPost']= $this->model1->get_gaget_recentPost();   //for recent post gadget.
         foreach ($data['recentPost'] as $dat)
        {
             $setting = $dat->setting;
             parse_str($setting);
           
        }
       // $data['noOfRecentPost'] = $this->viewmodel->recentpost_get_post($post);
        
        $data['selectedalbumquery'] =  $this->viewmodel->get_selected_album($id);
        
        
        $this->load->view('birdEduSociety/header',$data);
        //$this->load->view('menuview/menu',$data);
       // $this->load->view('menuview/event',$data);
       // $this->load->view('menuview/slider',$data);
        $this->load->view('birdEduSociety/photos',$data);
        $this->load->view('birdEduSociety/footer',$data);  
        
    }
    public function addcomment()
    {
        
        $a=$_GET['post_id'];
        
        $comment_association_id=$a;
        $user_name=' ';
        $comment = $this->input->post('comment');   
            
        $this->dbmodel->add_new_comment($comment, $comment_association_id, $user_name);
        
        redirect('view/'.$a );
    }
    
     public function downloads(){
      $data['meta'] = $this->dbsetting->get_meta_data();
        $limit['post_limit']=$this->viewmodel->get_max_post_to_show();
        $data['postquery'] = $this->viewmodel->get_post($limit["post_limit"]);
        $limit['page_limit']=$this->viewmodel->get_max_page_to_show();
        $data['pagequery'] = $this->viewmodel->get_page($limit["page_limit"]);
        $data['slidequery'] = $this->viewmodel->get_slider();
        $data['headerquery']= $this->viewmodel->get_design_setup();
        $data['headertitle']= $this->viewmodel->get_header_title();
        $data['headerColor']= $this->viewmodel->get_header_color();
         $data['sidebarColor']= $this->viewmodel->get_sidebar_color();
        $data['headerlogo']= $this->viewmodel->get_header_logo();
        $data['faviconicon']= $this->viewmodel->get_favicon_icon();
        $data['headerdescription']= $this->viewmodel->get_header_description();
        $data['mediaquery']= $this->viewmodel->get_all_media();        
        $data['gadget'] = $this->model1->get_gaget();                    //for all gadget
        $data['recentPost']= $this->model1->get_gaget_recentPost();   //for recent post gadget.
         foreach ($data['recentPost'] as $dat)
        {
             $setting = $dat->setting;
             parse_str($setting);
            
        }
        $data['noOfRecentPost'] = $this->viewmodel->recentpost_get_post($post);
        
        $this->load->view('menuview/header',$data);
        $this->load->view('menuview/menu',$data);
        $this->load->view('menuview/event',$data);
        $this->load->view('menuview/slider',$data);
        $this->load->view('menuview/downloads',$data);
        $this->load->view('menuview/footer',$data); 

    }
    
  public function download(){
$this->load->helper('download');

      $filename= $_GET['download'];
 $data = file_get_contents("./content/images/".$filename); // Read the file's contents
$name = $filename;

force_download($name, $data);      


exit;
        
  }
  
  
  
}