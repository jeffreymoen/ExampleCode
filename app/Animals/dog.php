<?php
namespace App\Animals;

/**
 * Creates an instance of the dog class, which implements animal.
 *
 * @package App\Animals
 */
class dog implements animal
{
    private $name;
    private $breed;
    private $legs;
    private $tail;
    private $sound;
    private $playsFetch;
    private $rollsOver;
    private $wagsTail;

    /**
     * Creates an instance of the Dog class.
     *
     * @param $name
     * @param $breed
     * @param $legs
     * @param $tail
     * @param $sound
     * @param $playsFetch
     * @param $rollsOver
     * @param $wagsTail
     */
    public function __construct($name, $breed, $legs = 4, $tail = true, $sound = 'Barks', $playsFetch= true, $rollsOver = false, $wagsTail = true)
    {
        $this->name = $name;
        $this->breed = $breed;
        $this->legs = $legs;
        $this->tail = $tail;
        $this->sound = $sound;
        $this->playsFetch = $playsFetch;
        $this->rollsOver = $rollsOver;
        $this->wagsTail = $wagsTail;
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function breed(): string
    {
        return $this->breed;
    }

    /**
     * @param string $breed
     */
    public function setBreed(string $breed)
    {
        $this->breed = $breed;
    }

    /**
     * @return int
     */
    public function legs(): int
    {
        return $this->legs;
    }

    /**
     * @param int $legs
     */
    public function setLegs(int $legs)
    {
        $this->legs = $legs;
    }

    /**
     * @return bool
     */
    public function tail(): bool
    {
        return $this->tail;
    }

    /**
     * @param bool $tail
     */
    public function setTail(bool $tail)
    {
        $this->tail = $tail;
    }

    /**
     * @return string
     */
    public function sound(): string
    {
        return $this->sound;
    }

    /**
     * @param string $sound
     */
    public function setSound(string $sound)
    {
        $this->sound = $sound;
    }

    /**
     * @return bool
     */
    public function playsFetch(): bool
    {
        return $this->playsFetch;
    }

    /**
     * @param bool $playsFetch
     */
    public function setPlaysFetch(bool $playsFetch)
    {
        $this->playsFetch = $playsFetch;
    }

    /**
     * @return bool
     */
    public function rollsOver(): bool
    {
        return $this->rollsOver;
    }

    /**
     * @param bool $rollsOver
     */
    public function setRollsOver(bool $rollsOver)
    {
        $this->rollsOver = $rollsOver;
    }

    /**
     * @return bool
     */
    public function wagsTail(): bool
    {
        return $this->wagsTail;
    }

    /**
     * @param bool $wagsTail
     */
    public function setWagsTail(bool $wagsTail)
    {
        $this->wagsTail = $wagsTail;
    }

    /**
     * Returns the data from the Dog object as an array.
     *
     * @return array
     */
    public function __toArray(): array {
        return [
            'name' => $this->name(),
            'breed' => $this->breed(),
            'legs' => $this->legs(),
            'tail' => $this->tail(),
            'sound' => $this->sound(),
            'playsFetch' => $this->playsFetch(),
            'rollsOver' => $this->rollsOver(),
            'wagsTail' => $this->wagsTail()
        ];
    }

    /**
     * Returns the data from the Dog object as JSON.
     *
     * @return string
     */
    public function __toJson() {
        return json_encode($this->__toArray());
    }
}