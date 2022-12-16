<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class query extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'detail_vendor_product';

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
    protected $fillable = ['Nama', 'Deskripsi', 'Berat', 'Kategori', 'name_vendor', 'alamat','no_telp'];

    
}