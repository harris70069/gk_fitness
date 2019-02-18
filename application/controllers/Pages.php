<?php
class Pages extends CI_Controller{

        public function __construct(){
                parent::__construct();
               
        }
        // 課程
        public function plan(){
                // // 載入MOD
                // $this->load->model('mod_product');
                // $this->load->model('mod_order');

                // $banner=$this->mod_product->get_banner();
                // // 回傳最外層會被刪除，所以要存入陣列
                // $data['products']= $this->mod_product->index_get_all();
                $data['title']= 'Ⓗ-THE COOL SUTFF TERRITORY';
                $data['page']="plan";
                // $data['banner']=$banner['path'];

                $this->load->view('pages/plan',$data); 
        }
        // 行程表
        public function schedule(){
                
                $data['page']="schedule";
                $this->load->view('pages/schedule',$data); 
        }
        // 文章頁面
        public function article(){
 
                $data['page']="article";
                $this->load->view('pages/article',$data); 
        }

        // //Store頁面
        // public function store($brand){
        //         // 載入MOD
        //         $this->load->model('mod_product');
        //         $this->load->model('mod_order');

        //         // 回傳最外層會被刪除，所以要存入陣列
        //         $data['products']= $this->mod_product->get_all();

        //         // NIKE PAGE-------------------------------------------------------------------------
        //         if($brand=="nike"){ 
        //                 $data['title']='NIKE';
        //                 $data['brand']="nike";
        //                 $data['content']='pages/store_content';   
        //                 $this->load->view('pages/store',$data);
        //         }
        //         // HUF PAGE-------------------------------------------------------------------------
        //         if($brand=="huf"){            
        //                 $data['title']='HUF';
        //                 $data['brand']="huf";
        //                 $data['content']='pages/store_content';
        //                 $this->load->view('pages/store',$data);
        //         }
        //         // HARLEY-DAVIDSON PAGE--------------------------------------------------------------
        //         if($brand=="hd"){ 
        //                 $data['title']='HARLEY-DAVIDSON';
        //                 $data['brand']="hd";
        //                 $data['content']='pages/store_content';
        //                 $this->load->view('pages/store',$data);
        //         }
        //         // Kawasaki PAGE-------------------------------------------------------------------------
        //         if($brand=="kw"){ 
        //                 $data['title']='Kawasaki';
        //                 $data['brand']="kw";
        //                 $data['content']='pages/store_content';
        //                 $this->load->view('pages/store',$data);
        //         }

        //         if($brand=="others"){ 
        //                 $data['title']='Others';
        //                 $data['brand']="others";
        //                 $data['content']='pages/store_content';
        //                 $this->load->view('pages/store',$data);
        //         }
        // }

   
        
        
        

}






