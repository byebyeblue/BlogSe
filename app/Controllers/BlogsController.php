<?php

namespace App\Controllers;

use App\Controllers\BaseControllers;
use App\Models\BlogModel;

class BlogsController extends BaseController
{
    protected $BlogModel;
    public function __construct()
    {
        $this->BlogModel = new BlogModel();
    }

    public function index()
    {
        $blog = $this->BlogModel->findAll();
        $data = [
            'title' => "Blog - Blogs",
            'tampilblog' => $blog   //mengambil dan menampilkan data. findAll fungsi bawaan model (code igniter base model)
        ];

        return view('v_blogs', $data);
    }

    public function home()
    {
        $blog = $this->BlogModel->findAll();
        $data = [
            'title' => "Blog - Home",
            'tampilblog' => $blog //mengambil dan menampilkan semua data. findAll fungsi bawaan model (code igniter base model)
        ];
        //closure : ini kalo ga ada controller
        return view('v_home', $data);
    }

    public function about()
    {   //untuk menampilkan form tambah blog
        $data = [
            'title' => "About"
        ];

        return view('v_about', $data);
    }

    public function profile()
    {   //untuk menampilkan form tambah blog
        $data = [
            'title' => "Proflie"
        ];

        return view('v_profile', $data);
    }

    public function tambahblog()
    {   //untuk menampilkan form tambah blog
        $data = [
            'title' => "Blog - Kelola Blog"
        ];

        return view('v_tambahblog', $data);
    }

    public function posting()
    {   //untuk simpan ke database
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

    public function hapus($slug)
    {
        $BlogModel = model('BlogModel');
        $BlogModel->where(['slug' => $slug])->delete();     //delete adalah fungsi bawaan model untuk menghapus data
        return redirect()->to('/blogs');
    }

    public function editblog($slug)
    {     //untuk nampilin v edit blog
        $data = [
            'title' => "Blog - Kelola Blog",
            'tampilblog' => $this->BlogModel->getTampilBlog($slug)
        ];
        return view('v_editblog', $data);
    }


    public function updateblog($slug)
    {
        $blog = model('BlogModel');
        $data = $this->request->getPost();
        $blog->update($slug, $data);
        session()->setFlashdata('message', 'Blog Has Been Updated');
        session()->setFlashdata('alert-class', 'alert-success');
        return redirect()->to('/blogs');
    }
}
