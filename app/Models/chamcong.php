<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chamcong extends Model
{
    use HasFactory;
    protected $table = 'chamcong';
    protected $fillable = [
        'employee_id',
        'toDate'
    ];

    public function lienket()
    {
        return $this->hasMany(employee::class, 'category_id','id');
    }
}
