<?php

namespace ex01\classes;

class Course
{
    private string $name;
    private array $studentList;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->studentList = [];
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
     * @return array
     */
    public function getStudentList(): array
    {
        return $this->studentList;
    }

    /**
     * @param array $studentList
     */
    public function setStudentList(array $studentList): void
    {
        $this->studentList = $studentList;
    }

    public function addStudent(Student $student): void
    {
        $this->studentList[] = $student;
    }

    public function getAverageGrade(): int|float
    {
        $total = 0;
        $countStudent = count($this->studentList);

        foreach ($this->studentList as $student) {
            $total += $student->getAverageScore();
        }

        if ($countStudent > 0) {
            return $total / $countStudent;
        }

        return $total;
    }
}

