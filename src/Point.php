<?php
namespace src;

class Point
{
    protected float $x;
    protected float $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return float
     */
    public function getX(): float
    {
        return $this->x;
    }

    /**
     * @return float
     */
    public function getY(): float
    {
        return $this->y;
    }

    /**
     * @param float $x
     */
    public function setX(float $x): void
    {
        $this->x = $x;
    }

    /**
     * @param float $y
     */
    public function setY(float $y): void
    {
        $this->y = $y;
    }
    public function setXY(float $x, float $y) {
        $this->x = $x;
        $this->y = $y;
    }
    public function getXY(): array {
        return array($this->x,$this->y);
    }
    public function toString(): string {
        return "Point X: {$this->x} <br> Point Y: {$this->y}";
    }

}