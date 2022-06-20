<?php

if ($_GET['key'] && $_GET['key'] == 'rahasia') {
     header("Content-Disposition: attachment; filename='callum-wale-5s0MuxRGf6M-unsplash.jpg'");
     // header("Conent-Type: image/jpeg");
     readfile(__DIR__ . "/file/callum-wale-5s0MuxRGf6M-unsplash.jpg");
     exit();
} else {
     echo "Invalid Key";
}
