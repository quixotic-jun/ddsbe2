<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class User extends Model {
   
    protected $table = 'tbl_user';
    protected $fillable = [
        'username', 'password','gender'
    ];

    public $timestamp = false;
    protected $primaryKey = 'id';


    protected $hidden = [
        'password',
    ];
    
}

?>