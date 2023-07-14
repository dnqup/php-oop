<?php

namespace ex02\classes;

class Person {
    private string $name;
    private int $age;
    private string $gender;
    
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    
    /**
     * @param  string  $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    
    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }
    
    /**
     * @param  int  $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }
    
    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }
    
    /**
     * @param  string  $gender
     */
    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }
}