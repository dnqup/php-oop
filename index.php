<?php
use classes\Course;
use classes\Student;

require_once "./classes/Course.php";
require_once "./classes/Student.php";

$course = new Course('Khóa học PHP nâng cao');

$course->addStudent(new Student("TuanKhang", "Tuấn Khang", 9.6));
$course->addStudent(new Student("TuanKhoi", "Tuấn Khôi", 7.6));


echo '<pre>';
echo 'Điểm trung bình của lớp: ' . $course->getName() . ': ';
echo $course->getAverageGrade();
echo '</pre>';


$studentList = $course->getStudentList();

echo "Thông tin các học sinh trong lớp: " . $course->getName() . "<br> <br>";
foreach ($studentList as $student) {
    echo 'Mã sinh viên: ' . $student->getCode() .'<br>';
    echo 'Họ và tên: ' . $student->getName() . '<br>';
    echo 'Điểm trung bình: ' . $student->getAverageScore() .'<br>';
    echo '<hr>';
}

