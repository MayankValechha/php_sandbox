<?php

    $path = '/dir/myfile.php';
    $file = 'simple.txt';

    // Returns name of File with extension
    echo basename($path).'<br>';

    // Returns name of File without extension
    echo basename($path, '.php').'<br>';

    //Returns name of directory
    echo dirname($path).'<br>';

    //Returns absolute path of file
    echo realpath($file).'<br>';

    //Check if a file exists and folder also
    echo file_exists($file).'<br>';

    //Checks only for a file existence.
    echo is_file($file).'<br>';

    //Check if a file is writeable
    echo is_writable($file).'<br>';

    //Check if a file is writeable
    echo is_readable($file).'<br>';

    //Creates a Directory
    mkdir('testing');

    //Delets a Directory, if empty
    rmdir('testing');

    //Checks for file size, return in bytes
    echo filesize($file).'<br>';

    //Copy one file content into another
    copy('simple.txt', 'simple2.txt');

    //Rename file
    rename('simple2.txt','changed.txt');

    //Delete a file
    unlink('changed.txt');

    //Read from file and output
    echo file_get_contents($file);

    //Replace text into file
    file_put_contents($file, 'Hello Mayank!').'<br>';

    //Append to file
    $currentFile = file_get_contents($file);
    $currentFile .= ' How are you doing?';
    file_put_contents($file, $currentFile);

    // FILE HANDLING

    //Open file for reading
    $handle = fopen($file, 'r');
    $data = fread($handle, filesize($file));
    echo '<br>'.$data;
    fclose($handle);

    
    //Open file for writing
    // Here file2.txt is created and $txt is written into it
    $handle = fopen('file2.txt', 'w');
    $txt = 'Mayank Valechha,';
    fwrite($handle,$txt);
    // \n : is a newline character
    $txt = 'You are a Billionaire.';
    fwrite($handle,$txt);
    fclose($handle);
?>