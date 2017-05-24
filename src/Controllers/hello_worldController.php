<?php
namespace ankitatejani84\hello_world\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 23-May-17
 * Time: 6:08 PM
 */
class hello_worldController extends Controller
{
    public function index(Request $request)
    {
        $text="Hello World.";
        $display_text= $text;
        //$display_text= "<h1>".$text."</h1>";

        return view('hello_world::index',compact('display_text'));
    }
}