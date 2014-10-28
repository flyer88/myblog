<?php
/**
* 
*/
class Article extends \Eloquent
{
	use SoftDeletingTrait;


	protected $fillable = [];
	protected $table = 'article';
    	protected $dates = ['deleted_at'];

    	public function  comments(){
    		return  $this->hasMany('Comment');
    	}
}
?>