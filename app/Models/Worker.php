<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;
    protected $fillable = ['employer_id'];

    public function employers(){
        return $this->hasOne(Employer::class, 'employer_id', 'id');
    }






}
