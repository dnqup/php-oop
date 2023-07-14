<?php

namespace ex02\classes;

class Student extends Person
{
    private int $studentId;
    
    /**
     * @return int
     */
    public function getStudentId(): int
    {
        return $this->studentId;
    }
    
    /**
     * @param  int  $studentId
     */
    public function setStudentId(int $studentId): void
    {
        $this->studentId = $studentId;
    }
    
    public function getName(): string
    {
        return parent::getName() . " (". $this->studentId . ")";
    }
}