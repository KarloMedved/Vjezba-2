<?php
$studentsJson = file_get_contents(__DIR__ . '/polaznici.json');

$students = json_decode($studentsJson, true);
?>







<!DOCTYPE html>
<html lang="en">

<body>
<table>
<table border="1" cellpadding="10">
  <tr>
    <th>Ime</th>
    <th>Prezime</th>
    <th>Godine</th>
    <th>Email</th>
    <th>Telefon</th>
  </tr>
  <?php foreach($students as $student) {
    echo '<tr>';
    echo '<td>'. $student['name'] . '<\td>';
    echo '<td>'. $student['surname'] . '<\td>';
    echo '<td>'. $student['age'] . '<\td>';
    echo '<td>'. $student['email'] . '<\td>';
    echo '<td>'. $student['phone'] . '<\td>';



   } ?>
  </table>

  <?php

$students[] = [
    "name"=>"Pero",
    "lastname" => "Perić",
    "year" => 28,
    "email" => "peroperić@gmail.com",
    "phone" => 3852564256
  ];
  
  $studentJson = json_encode($students);