<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    protected $fillable = [
        'name',
        'email',
        'phone',
        'class_id',
    ];

    public function classModel()
    {
        return $this->hasOne(ClassModel::class, 'teacher_id');
    }
}
