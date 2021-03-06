<?php

class BlogController extends Controller{
	
	public $postObject;
    public $userObject;
   
   	public function post($pID){
	   
		$this->postObject = new Post();
		$post = $this->postObject->getPost($pID);	    
	  	$this->set('post',$post);

        $this->userObject = new User();
        $isAdmin = $this->userObject->isAdmin();
        $this->set('isAdmin',$isAdmin);
	   
   	}
	
	public function index(){
		
		$this->postObject = new Post();
		$posts = $this->postObject->getAllPosts();
		$this->set('title', 'The Default Blog View');
		$this->set('posts',$posts);
	
	}
	
	
}
