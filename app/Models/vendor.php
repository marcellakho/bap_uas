<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vendor extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'vendors';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama_vendor', 'alamat', 'no_telp'];

    
}
