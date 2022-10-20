<?php

    $dept = new DOMDocument();
    $dept->load("empleados.xml");
    $respuesta = $dept->schemaValidate("departamento.xsd");
    print ($respuesta) ? "Documento valido": "Documento invalido";