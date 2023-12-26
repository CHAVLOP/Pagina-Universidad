<?php

include('conexion.php');
/* si el metodo es post se va a ejecutar todo*/

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    /* se esta opteniendo los valores de el titulo y descripcion ademas del nombre y el archivo*/
    $title = $con->real_escape_string(htmlentities($_POST['title']));
    $description = $con->real_escape_string(htmlentities($_POST['description']));

    $file_name = $_FILES['file']['name'];

    $new_name_file = null;
    /*con esta decision estamos obteniendo la extencion del archivo y el tipo*/
    if ($file_name != '' || $file_name != null) {
        $file_type = $_FILES['file']['type'];
        list($type, $extension) = explode('/', $file_type);
        /* esta desicion lo que hace es guardar los archivos en una carpeta files*/
        if ($extension == 'pdf') {
            $dir = 'files/';
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            $file_tmp_name = $_FILES['file']['tmp_name'];
            //$new_name_file = 'files/' . date('Ymdhis') . '.' . $extension;
            /*se esta remplazando los caracteres especiales o espacion en blanco que tenga el nombre, le pondra un guionbajo*/
            $new_name_file = $dir . file_name($file_name) . '.' . $extension;

            /* con este if se verifica si todo es correcto para poder guardalo en la base de datos*/
            if (copy($file_tmp_name, $new_name_file)) {
                
            }
        }
    }

    $ins = $con->query("INSERT INTO files(title,description,url) VALUES ('$title','$description','$new_name_file')");

    if ($ins) {
        echo 'GUARDADO';
        
    } else {
        echo 'algo fallo';
    }
} else {
    echo 'algo fallo';
}
