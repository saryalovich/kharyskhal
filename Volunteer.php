<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    //фио паспортные номер телефона 
	protected $fillable = ['fio','pasport','contact_phone','user_id','status'];
}
