<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Student extends Model
{


        protected $fillable = [
        'name',
        'email',
        'phone',
        'class_id',
    ];

    public function classModel()
    {
        return $this->belongsTo(ClassModel::class, 'class_id');
    }


}
