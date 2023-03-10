<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table      = 'students_table';
  protected $primaryKey = 'student_id';
  protected $useAutoIncrement = true;

  //accasable table fields
  protected $allowedFields = ['student_name', 'email'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}