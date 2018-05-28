<?php

Route::get('lessons', 'api\LessonController@getLessons');
Route::get('lesson/{slug}', 'api\LessonController@getLesson');