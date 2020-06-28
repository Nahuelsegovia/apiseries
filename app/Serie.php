<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   protected $fillable = [
       'titulo_serie', 'descripcion_serie', 'donde_ver_serie',
       'imagen_serie', 'cancion_serie',
   ];

   /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
   protected $hidden = [
       'password', 'remember_token',
   ];

   /**
    * The attributes that should be cast to native types.
    *
    * @var array
    */
   protected $casts = [
       'email_verified_at' => 'datetime',
   ];
}
