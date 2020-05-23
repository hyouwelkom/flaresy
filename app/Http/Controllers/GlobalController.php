<?php


namespace App\Http\Controllers;


class GlobalController extends Controller
{

    public function index() {
        return view('home', [
            'id_page' => 0
        ]);
    }

    public function nosServices() {
        return view('nos-services', [
            'id_page' => 1
        ]);
    }

    public function nosProds() {
        return view('nos-prods', [
            'id_page' => 2
        ]);
    }

    public function lequipe() {
        return view('l-equipe', [
            'id_page' => 3
        ]);
    }

    public function contact() {
        return view('contact', [
            'id_page' => 4
        ]);
    }

}
