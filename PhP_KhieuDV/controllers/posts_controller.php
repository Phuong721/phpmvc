<?php
require_once('controllers/base_controller.php');
require_once('models/post.php');

class PostsController extends BaseController
{
    function __construct()
    {
        $this->folder = 'posts';

    }
    public function index()
    {
        $posts = Post::all();
        $data = array('posts' => $posts);
        $this->render('index', $data);
    }
    public function create(){
        if(isset($_POST['insert_post'])){
            $post = new Post();
            $post->setTitle($_POST['title']);
            $post->setDescription($_POST['description']);
            $post->setImage($_POST['image']);
            $post->setStatus((int)$_POST['status']);
            $post->setDate($_POST['date']);
            $insert_success = $post::create($post->getTitle(),$post->getDescription(),$post->getImage(),$post->getStatus(),$post->getDate());
            require 'views/posts/show.php';
            exit();
        }
        require 'views/posts/create.php';
    }

    public function update(){
        $post = Post::find($_GET['id']);
        $data = array('post' => $post);
        if(isset($_POST['update_post'])){
            $post = new Post();
            $post->setId($_POST['id']);
            $post->setTitle($_POST['title']);
            $post->setDescription($_POST['description']);
            $post->setImage($_POST['image']);
            $post->setStatus((int)$_POST['status']);
            $post->setDate($_POST['date']);
            $insert_success = $post::update($post->getId(),$post->getTitle(),$post->getDescription(),$post->getImage(),$post->getStatus(),$post->getDate());
            require 'views/posts/show.php';
            exit();
        }
        $this->render('update', $data);
    }

    public function delete(){
        $post = new Post();
        $id = $_GET['id'];
        $delete_success = $post::delete($id);
        require "views/posts/header.php";
        echo "Delete sucessfully! ";
    }

    public function showPost()
    {
        $post = Post::find($_GET['id']);
        $data = array('post' => $post);
        $this->render('show', $data);
    }




}