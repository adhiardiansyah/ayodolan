<?php

namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
    protected $table = 'auth_groups_users';
    protected $primaryKey = 'user_id';
    protected $allowedFields = ['group_id', 'user_id'];

    public function getRole()
    {
        return $this->where(['user_id' => user_id()])->first();
    }
}
