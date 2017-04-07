<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animals\dog;
use App\Animals\cat;
use App\Animals\snake;

class AnimalController extends Controller
{
    /**
     * Sends an instance of the Dog class to the dog blade.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createDog() {
        $dog = new dog('Kirby', 'Corgi', 4, false, 'Barks', true, false, false);

        return view('dog', ['dog' => $dog]);
    }

    /**
     * Sends an instance of the Cat class to the cat blade.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createCat() {
        $cat = new cat('Harriet', 'Calico', 4, true, 'Meows', 'Rough', true, false);

        return view('cat', ['cat' => $cat]);
    }

    /**
     * Sends an instance of the Snake class to the snake blade.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createSnake() {
        $snake = new snake('Unknown', 'Rattle Snake', 0, true, 'rattles', false);

        return view('snake', ['snake' => $snake]);
    }
}
