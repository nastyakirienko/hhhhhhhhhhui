<php
$students = array(
array("name" => "John", "surname" => "Doe", "subjects" => array("Math", "Physics", "Biology")),
array("name" => "Jane", "surname" => "Smith", "subjects" => array("Chemistry", "English", "History", "Art")),
array("name" => "Alex", "surname" => "Johnson", "subjects" => array("Computer Science", "Statistics"))
);
$maxSubjects = 0;
$maxStudent = "";

foreach ($students as $student) {
if (count($student["subjects"]) > $maxSubjects) {
$maxSubjects = count($student["subjects"]);
$maxStudent = $student;
}
}

echo "Student with the most subjects: " . $maxStudent["name"] . " " . $maxStudent["surname"];





