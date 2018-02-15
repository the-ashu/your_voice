<?php
class Posts extends CI_Controller{
    public function index(){
        $data['title']='Latest Posts';
        $data['posts']=$this->Post_model->get_posts();
       // print_r($data['posts']);
        $this->load->view('templates/header');
        $this->load->view('posts/index',$data);
        $this->load->view('templates/footer');
    }
    public function view ($slug = NULL){
        $data['post']=$this->Post_model->get_posts($slug);
        if(empty($data['post'])) {
            echo "ashuu";
            show_404();
        }
        $data['title']=$data['post']['title'];
        $this->load->view('templates/header');
        $this->load->view('posts/view',$data);
        $this->load->view('templates/footer');
    }
    public function create(){
        $data['title']='Create Post';
        $data['categories']=$this->Post_model->get_categories();
        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('body','Body','required');
        if($this->form_validation->run()=== False) {
            $this->load->view('templates/header');
            $this->load->view('posts/create', $data);
            $this->load->view('templates/footer');
        }
        else{
            $config['upload_path']='../assets/images/posts';
            $config['allowed_types']='gif|png|jpg';
            $config['max_size']='2048';
            $config['max_height']='500';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload()){
                $error=array('error'=>$this->upload->display_errors());
                $post_image='noimage.jpg';
            }else{
                $data=array('upload_data'=>$this->upload->data());
                $post_image=$_Files['userfile']['name'];
            }
            $this->Post_model->create_post($post_image);
           // $this->load->view('posts/success');
            redirect('posts');
        }
    }
    public function delete($id)
    {
        $this->Post_model->delete_post($id);
        redirect('posts');
    }
    public function edit($slug){
        $data['post']=$this->Post_model->get_posts($slug);
        if(empty($data['post'])) {
            show_404();
        }
        $data['categories']=$this->Post_model->get_categories();
        $data['title']='Edit Post';
        $this->load->view('templates/header');
        $this->load->view('posts/edit',$data);
        $this->load->view('templates/footer');
    }
    public function update(){
         $this->Post_model->update_post();
         redirect('posts');
    }
     }

?>