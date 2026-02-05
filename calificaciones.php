<?php

function convertirNota($nota, $curso) {

    if ($nota < 0 || $nota > 100) {
        return "Error: nota inválida ($nota). Debe estar entre 0 y 100.";
    }

    if ($nota >= 90) {
        $letra = "A";
        $descripcion = "Excelente";
    } elseif ($nota >= 80) {
        $letra = "B";
        $descripcion = "Notable";
    } elseif ($nota >= 70) {
        $letra = "C";
        $descripcion = "Aprobado";
    } elseif ($nota >= 60) {
        $letra = "D";
        $descripcion = "Aprobado mínimo";
    } else {
        $letra = "F";
        $descripcion = "Reprobado";
    }

    return "Curso: $curso | Nota: $nota → $letra ($descripcion)";
}
