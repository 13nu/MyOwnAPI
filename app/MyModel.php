<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
	protected $fillable = ['nama','phone','secretAttribute','password'];

	protected $hidden = ['secretAttribute','password'];
}