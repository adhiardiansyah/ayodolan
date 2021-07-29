<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'username', 'fullname', 'user_image', 'created_at', 'updated_at'];

    public function getUser()
    {
        return $this->where(['id' => user_id()])->first();
    }

    public function search($keyword)
    {
        return $this->table('users')->like('username', $keyword)->orLike('email', $keyword)->orLike('name', $keyword);
    }
}
