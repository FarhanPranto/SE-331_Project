<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;
    protected $table ='category';

    static public function getSingle($id)
    {
        return CategoryModel::find($id);
            
    }

    static public function getRecord()
    {
        return self::select('category.*')
            ->where('is_delete','=',0)
            ->orderBy('category.id','desc')
            ->paginate(20);
    }

    static public function getCategory($value='')
    {
        return self::select('category.*')
            ->where('status','=',1)
            ->where('is_delete','=',0)
            ->get();
            
    }
}
