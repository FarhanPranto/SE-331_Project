<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MouModel extends Model
{
    use HasFactory;

    protected $table ='mou';

    static public function getRecord()
    {
        return self::select('mou.*','users.name as user_name','category.name as category_name')
                ->join('users','users.id','=','mou.user_id')
                ->join('category','category.id','=','mou.category_id')
                ->Where('mou.is_delete','=',0)
                ->orderBy('mou.id','desc')
                ->paginate(30);


    }

    public function getImage(){
        if(!empty($this->image_file)&& file_exists('upload/blog/'.$this->image_file))
        {
            return url('upload/blog/'.$this->image_file);
        }
        else
        {
            return "";
        }
    }

}
