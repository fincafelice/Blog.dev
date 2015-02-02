<?php

class Post extends Eloquent
{

    protected $table = 'posts'; // this is optional
    public static $rules = [
    	'title' => 'required|max:100',
    	'body' => 'required'
    ];
}