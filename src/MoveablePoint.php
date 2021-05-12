<?php

namespace src;

class MoveAblePoint extends Point
{
    protected float $xSpeed;
    protected float $ySpeed;

    public function __construct(float $x,
                                float $y,
                                float $xSpeed,
                                float $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    /**
     * @return float
     */
    public function getXSpeed(): float
    {
        return $this->xSpeed;
    }

    /**
     * @param float $xSpeed
     */
    public function setXSpeed(float $xSpeed): void
    {
        $this->xSpeed = $xSpeed;
    }

    /**
     * @return float
     */
    public function getYSpeed(): float
    {
        return $this->ySpeed;
    }

    /**
     * @param float $ySpeed
     */
    public function setYSpeed(float $ySpeed): void
    {
        $this->ySpeed = $ySpeed;
    }

    public function getSpeed(): array {
        return array($this->xSpeed,$this->ySpeed);
    }

    public function move(){
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return "testX: {$this->x} testY: {$this->y}";
    }
    public function __toString(): string
    {
        return "PointX: {$this->x} <br> PointY: {$this->y} <br> XSpeed: {$this->xSpeed} <br> YSpeed: {$this->ySpeed}";
    }

}