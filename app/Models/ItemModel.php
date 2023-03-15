<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemModel extends Model
{
    protected $table = 'items';

    use HasFactory;
    //data comming from controller are arranged into table  
    protected $fillable=[
        'name','description'
    ];
}