<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $param = [];

        $courses = User::moodleFunction('core_course_get_courses', $param);

        $param = [
            'courseid' => $courses[0]->id
        ];

        $users = User::moodleFunction('core_enrol_get_enrolled_users', $param);

        $grades = User::moodleFunction('gradereport_user_get_grades_table', $param);

        return view('home', compact('courses', 'users', 'grades'));
    }

    public function courses(Request $request)
    {
        $param = [];
        $courses = User::moodleFunction('core_course_get_courses', $param);

        return view('courses', compact('courses'));
    }

    public function users(Request $request)
    {
        $param = [];
        $courses = User::moodleFunction('core_course_get_courses', $param);

            $param = [
                'courseid' => $courses[0]->id
            ];

            $users = User::moodleFunction('core_enrol_get_enrolled_users', $param);


        return view('users', compact('users'));
    }

    public function grades(Request $request)
    {
        $param = [];
        $courses = User::moodleFunction('core_course_get_courses', $param);

        $param = [
            'courseid' => $courses[0]->id
        ];

        $grades = User::moodleFunction('gradereport_user_get_grades_table', $param);


        return view('grades', compact('grades'));
    }

}
