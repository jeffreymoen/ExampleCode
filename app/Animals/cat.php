<?php
namespace App\Animals;

/**
 * Creates an instance of the cat class, which implements animal.
 *
 * @package App\Animals
 */
class cat implements animal
{
    private $name;
    private $breed;
    private $legs;
    private $tail;
    private $sound;
    private $tongueTexture;
    private $chasesMice;
    private $frontClaws;

    /**
     * Creates an instance of the Cat class.
     * @param string $name
     * @param string $breed
     * @param int $legs
     * @param bool $tail
     * @param string $sound
     * @param string $tongueTexture
     * @param bool $chasesMice
     * @param bool $frontClaws
     */
    public function __construct(string $name, string $breed, int $legs = 4, bool $tail = true, string $sound = 'Meows', string $tongueTexture = 'Rough', bool $chasesMice = true, bool $frontClaws = true)
    {
        $this->name = $name;
        $this->breed = $breed;
        $this->legs = $legs;
        $this->tail = $tail;
        $this->sound = $sound;
        $this->tongueTexture = $tongueTexture;
        $this->chasesMice = $chasesMice;
        $this->frontClaws = $frontClaws;
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @param mixed $name
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
     * @return string
     */
    public function tongueTexture(): string
    {
        return $this->tongueTexture;
    }

    /**
     * @param string $tongue
     */
    public function setTongueTexture(string $tongueTexture)
    {
        $this->tongueTexture = $tongueTexture;
    }

    /**
     * @return bool
     */
    public function chasesMice(): bool
    {
        return $this->chasesMice;
    }

    /**
     * @param bool $chasesMice
     */
    public function setChasesMice(bool $chasesMice)
    {
        $this->chasesMice = $chasesMice;
    }

    /**
     * @return bool
     */
    public function frontClaws(): bool
    {
        return $this->frontClaws;
    }

    /**
     * @param bool $frontClaws
     */
    public function setFrontClaws(bool $frontClaws)
    {
        $this->frontClaws = $frontClaws;
    }

    /**
     * Returns the data from the Cat object as an array.
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
            'tongueTexture' => $this->tongueTexture(),
            'chasesMice' => $this->chasesMice(),
            'frontClaws' => $this->frontClaws()
        ];
    }

    /**
     * Returns the data from the Cat object as JSON.
     *
     * @return string
     */
    public function __toJson() {
        return json_encode($this->__toArray());
    }
}