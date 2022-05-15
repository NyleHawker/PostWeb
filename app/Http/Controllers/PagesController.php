<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index(Request $request) {

        $title = 'Welcome To Our Post Web';
        /*return view('index', [
            'title'=>$title
        ]);*/
        return view('index')->with('title', $title);

    }

    public function about() {
        $title = 'About Us';
        return view('about')->with('title', $title);
    }

    public function services() {
        $data = array(
            'title' => 'Our Services',
            'services' => ['Front End Development', 'Full Stack Development', 'Unreal Engine Game Development']
        );
        return view('services')->with($data);
    }

}
