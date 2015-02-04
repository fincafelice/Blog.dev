<?php

class Post extends BaseModel
{

    protected $table = 'posts'; // this is optional
    public static $rules = [
    	'title' => 'required|max:100',
    	'body' => 'required'
    ];
}