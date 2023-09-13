<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;


class Admin extends Model
{
   use AutoNumberTrait;
    public function getAutoNumberOptions()
    {
        return [
            'id_admin' => [
                'format' => 'Adm?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 3 // The number of digits in an autonumber
            ]
        ];
    }
   use HasFactory;
    protected $table='tbl_admin';
    protected $guarded = [];  
   
}
