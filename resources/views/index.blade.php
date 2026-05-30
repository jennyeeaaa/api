<!DOCTYPE html>
<html>
<head>
    <title>All Students</title>
</head>
<body>

<h2>All Students</h2>

@foreach($students as $student)

Student Name: {{ $student->name }} <br>

Student Email: {{ $student->email }} <br>

Student Course: {{ $student->course }}

<br><br>

@endforeach

</body>
</html>

