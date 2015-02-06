<?php

class Post extends BaseModel
{

    protected $table = 'posts'; // this is optional
    public static $rules = [
    	'title' => 'required|max:100',
    	'body' => 'required'
    ];

    public function author()
    {
    	return $this->belongsTo('User', 'user_id');
    }

    public function uploadFile($file) 
    {
    	$uploadPath = public_path() . '/uploads';
		$fileName = $this->id . '-' . $file->getClientOriginalName();

		Input::file('image')->move($uploadPath, $fileName);

		$post->img_url = '/uploads/' . $fileName;

		$post->save();
    }
}