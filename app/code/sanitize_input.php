<?php

function sanitize_input($string) {
    $string = trim($string); // Clean spaces
    $string = preg_replace('/[\x00-\x1F\x7F]/u', '', $string); // Remove control chars
    $string = strip_tags($string); // Remove HTML/JS
    $string = htmlspecialchars($string, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); // Safe encode
    return $string;}
