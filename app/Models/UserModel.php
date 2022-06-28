<?php 

namespace App\Models;

use CodeIgniter\Model;
class UserModel extends Model
{
    protected $table = 'users';

    public function search($keyword)
    {

    return $this->table('users')->like('nama', $keyword)->orLike('alamat', $keyword);
    }

}

?>