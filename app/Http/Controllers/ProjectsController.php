<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index($category)
    {
        $path="./images/{$category}";
        foreach (glob("$path/*.jpg") as $filename) {
            $files_arr[] = substr($filename,1);
            $name_arr[] = str_replace("_"," ",basename($filename,".jpg"));
            $id_arr[] = $category."/".basename($filename,".jpg");
        }

        $posts=array(
            "id" => $id_arr,
            "file" => $files_arr,
            "name" => $name_arr
        );
        
        return view('pages.category')->with('posts',$posts);
    }

    public function show($category,$folder){

        $path="./images/{$category}/{$folder}";
        $datos = simplexml_load_file("$path/datos.xml") or die("Failed to load");

        foreach (glob("$path/*.jpg") as $filename) {
            $files_arr[] = substr($filename,1);
        }

        $imgs=array(
            "file" => $files_arr
        );

        return view('pages.project')->with('datos',$datos)->with('imgs',$imgs);
    }
}
