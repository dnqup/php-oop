<?php

use ex02\classes\Student;

require_once "./classes/Person.php";
require_once "./classes/Student.php";

$student = new Student();
$student->setName("Quang Duy");
$student->setAge(18);
$student->setGender("Nam");
$student->setStudentId(1);

echo ("<pre>");
print_r($student);
echo ("</pre>");
