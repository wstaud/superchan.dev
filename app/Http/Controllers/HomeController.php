<?php

namespace App\Http\Controllers;

class HomeController extends Controller {

    public function showWelcome() {
        return view('welcome');
    }

    public function uppercase($word) {
        $newWord = strtoupper($word);
        $data = [
            'word' => $word,
            'newWord' => $newWord
        ];
        return view('uppercase', $data);
    }

    public function increment($number) {
        $newNumber = $number + 1;
        $data = [
            'number' => $number,
            'newNumber' => $newNumber
        ];
        return view('increment', $data);
    }


}