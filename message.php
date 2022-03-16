<?php
if (isset($_SESSION['status'])) {
    echo "<h5>".$_SESSION['status']."</h5>";
    unset($_SESSION['status']);
}