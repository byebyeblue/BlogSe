<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table                = 'user'; #mendefinisikan tabel kita ngarah ke mana
    protected $allowedFields        = ['fullname', 'email', 'password']; #bisa diisi dg fiel2 apa yg bs di akses di tabel kita
    protected $primaryKey           = 'user_id';
    protected $useTimestamps        = false;
}
