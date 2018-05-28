<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

use App\Lesson;

class LessonController extends Controller
{
    
    public function getLessons()
    {
    	$lessons = Lesson::get();

   		return $lessons;
    }

    public function getLesson($slug)
    {
    	$lesson = Lesson::where('slug', $slug)->first();

    	return $lesson;
    }

}
