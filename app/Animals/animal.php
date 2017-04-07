<?php
namespace App\Animals;

/**
 * A contract/interface ensuring that all classes that implement animal, must have a name(), breed(),
 * legs(), tail(), and sound() functions.
 *
 * @package App\Animals
 */
interface animal
{
    public function name();
    public function breed();
    public function legs();
    public function tail();
    public function sound();
}