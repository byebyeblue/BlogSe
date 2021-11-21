<?php

namespace App\Controllers;

use App\Controllers\BaseControllers;
use App\Models\BlogModel;

class BlogsController extends BaseController{
    public function index(){
        $blog = new BlogModel();
        $data = [
            'title' => "Blog - Blogs",
            'tampilblog' => $blog->findAll()    //mengambil dan menampilkan data. findAll fungsi bawaan model (code igniter base model)
        ];
        echo view('layouts/header', $data);
        echo view('v_blogs');
        echo view('layouts/footer');
    }

    public function home(){
        $blog = new BlogModel();
        $data = [
            'title' => "Blog - Home",
            'tampilblog' => $blog->findAll() //mengambil dan menampilkan semua data. findAll fungsi bawaan model (code igniter base model)
        ];
        //closure : ini kalo ga ada controller
        echo view('layouts/header', $data);
        echo view('v_home');
        echo view('layouts/footer');
    }

    public function tambahblog(){   //untuk menampilkan form tambah blog
        $data = [
            'title' => "Blog - Kelola Blog"
        ];
        echo view('layouts/header', $data);
        echo view('v_tambahblog');
        echo view('layouts/footer');
    }

    public function posting(){   //untuk simpan ke database
        $data = [
            'judul' => $this->request->getpost('judul'),    //mengambil data dari method post yang ada di form v_tambahblog
            'slug' => $this->request->getpost('slug'), 
            'isi' => $this->request->getpost('isi'),
        ];
        $blog = new BlogModel();
        $post = $blog->insert($data);      //insert ini fungsi bawaan model untuk memasukkan/input data ken database
        if ($post) {
            return redirect()->to('/blogs');
        }
    }

    public function hapus($blog_id){
        $blog = new BlogModel();
        $blog->delete($blog_id);        //delete adalah fungsi bawaan model untuk menghapus data
        return redirect()->to('/blogs');
    }

    public function editblog($blog_id){     //untuk nampilin v edit blog
        $data_tampil = [
            'title' => "Blog - Edit Blog"
        ];
        echo view('layouts/header', $data_tampil);

        $blog = new BlogModel();
        $row = $blog->find($blog_id);   //setelah dapet id, dpetin datanya ditampung ke $row.  
        if (count($row) > 0) {          //kemudian di cek ada isinya apa ga
            $data = [
                'blog_id' => $row['blog_id'],
                'judul' => $row['judul'],
                'slug' => $row['slug'],
                'isi' =>  $row['isi'],
            ];
            echo view('v_editblog', $data);
        } else {
            echo "data kosong";
        }
        
        echo view('layouts/footer');
    }

    public function updateblog(){   //untuk simpan hasil edit ke database
        $blog_id = $this->request->getpost('blog_id');
        $data = [
            'judul' => $this->request->getpost('judul'),
            'slug' => $this->request->getpost('slug'),
            'isi' => $this->request->getpost('isi'),
        ];
        $blog = new BlogModel();
        $update = $blog->update($blog_id, $data);   //update warna kuning adalah fungsi bawaan model
        if ($update) {
            return redirect()->to('/blogs');
        }
    }
}
