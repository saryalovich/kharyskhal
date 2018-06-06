<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //фио родителя фио ребенка тел родителя диагноз физические ограничения
	protected $fillable = ['fio_parent','fio_child','contact_phone','user_id','diagnisis','limitations','status'];
}
