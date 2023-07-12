<?php

namespace classes;

class Student
{
    private string $code;
    private string $name;
    private int|float $averageScore;

    public function __construct(string $code, string $name, int|float $averageScore)
    {
        $this->code = $code;
        $this->name = $name;
        $this->averageScore = $averageScore;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float|int
     */
    public function getAverageScore(): float|int
    {
        return $this->averageScore;
    }

    /**
     * @param float|int $averageScore
     */
    public function setAverageScore(float|int $averageScore): void
    {
        $this->averageScore = $averageScore;
    }
}