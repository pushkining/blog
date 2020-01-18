<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;



class Blog extends AbstractController
{    
    /**
     * @Route("/", name="list")
     */
    public function listPosts()
    {
        return $this->render('posts/list.html.twig');
    }
    
    
    /**
     * @Route("/post/{id}/edit", name="edit", methods={"GET"})
     */
    public function editPost(int $id)
    {
        var_dump($id);
        return $this->render('posts/edit.html.twig');
    }
    
     /**
     * @Route("/post/add", name="add", methods={"GET"})
     */
    public function addPost()
    {
        return $this->render('posts/add.html.twig');
    }
    
     /**
     * @Route("/post/save", name="save", methods={"POST"})
     */
    public function savePost()
    {
        var_dump($_POST); die;
    }
    
    /**
     * @Route("/post/{id}", name="show", methods={"GET"})
     */
    public function showPost(int $id)
    {
        var_dump($id);
        return $this->render('posts/show.html.twig');
    }
    
}