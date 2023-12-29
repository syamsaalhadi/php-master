<?php

// tugas kedua


$nilai = 0&&44; 

switch (true) {
    case ($nilai >= 80 && $nilai <= 100):
        echo "A : Excelent";
        break;
    case ($nilai >= 65 && $nilai <= 79):
        echo "B : Bagus";
        break;
    case ($nilai >= 55 && $nilai <= 64):
        echo "C : Lumayan";
        break;
    case ($nilai >= 45 && $nilai <= 54):
        echo "D : Kurang Baik";
        break;
    case ($nilai >= 0 && $nilai <= 44):
        echo "E : Buruk";
        break;
    default:
        echo "Nilai tidak valid";
}