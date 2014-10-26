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
}
?>