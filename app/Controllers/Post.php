<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Post extends BaseController
{
    public function index()
    {
        // Buat object model $post
        $post = new \App\Models\PostModel();
        
        // Siapkan data untuk dikirim ke view dengan nama $posts
        // dan isi datanya dengan post yang sudah terbit
        $data['posts'] = $post->where('status', 'published')->findAll();
        
        // Kirim data ke view
        echo view('post', $data);
    }

    //------------------------------------------------------------
    
    public function viewPost($slug)
    {
        $post = new \App\Models\PostModel();
        
        $data['post'] = $post->where([
            'slug' => $slug,
            'status' => 'published'
        ])->first();
        
        // Tampilkan 404 error jika data tidak ditemukan
        if (!$data['post']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        
        echo view('post_detail', $data);
    }
}
