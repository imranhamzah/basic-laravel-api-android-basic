<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblWhishList extends Model
{
    public $timestamps      = false;
    protected $table        = 'tbl_whishlist';
    protected $primaryKey   = 'whishlist_id';
    protected $connection   = 'mysql';
}
