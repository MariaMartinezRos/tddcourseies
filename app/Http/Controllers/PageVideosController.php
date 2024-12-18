<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Video;

class PageVideosController extends Controller
{
    public function __invoke(Course $course, Video $video)
    {
        //si el video existe se pilla, si no se pilla el primero del curso
        $video = $video->exists() ? $video : $course->videos->first();
        return view('pages.course-videos', compact('video'));
    }
}
