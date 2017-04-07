<?php
namespace App\Animals;

/**
 * Creates an instance of the snake class, which implements animal.
 *
 * @package App\Animals
 */
class snake implements animal
{
    private $name;
    private $breed;
    private $legs;
    private $tail;
    private $sound;
    private $oviparous;

    /**
     * Creates an instance of the Snake class.
     *
     * @param $name
     * @param $breed
     * @param $legs
     * @param $tail
     * @param $sound
     * @param $oviparous
     */
    public function __construct(string $name, string $breed, int $legs = 0, bool $tail = true, string $sound = 'hiss', bool $oviparous = true)
    {
        $this->name = $name;
        $this->breed = $breed;
        $this->legs = $legs;
        $this->tail = $tail;
        $this->sound = $sound;
        $this->oviparous = $oviparous;
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
     * Oviparous means egg-laying snake.
     *
     * @return bool
     */
    public function oviparous(): bool
    {
        return $this->oviparous;
    }

    /**
     * @param bool $oviparous
     */
    public function setOviparous(bool $oviparous)
    {
        $this->oviparous = $oviparous;
    }

    /**
     * Returns the data from the Snake object as an array.
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
            'oviparous' => $this->oviparous()
        ];
    }

    /**
     * Returns the data from the Snake object as JSON.
     *
     * @return string
     */
    public function __toJson() {
        return json_encode($this->__toArray());
    }
}