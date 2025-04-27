<?php
// Include the necessary icon library
require_once 'path/to/icon-library.php';

// Function to generate icons using the icon library
function generateIcon($iconName, $class = '') {
    return "<i class='icon-$iconName $class'></i>";
}

// Function to generate custom icons using SVG
function generateCustomIcon($iconName, $class = '') {
    $icons = [
        'custom-icon-1' => '<svg class="' . $class . '" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/><path d="M0 0h24v24H0z" fill="none"/></svg>',
        'custom-icon-2' => '<svg class="' . $class . '" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 4.5C7.31 4.5 3.5 8.31 3.5 13S7.31 21.5 12 21.5 20.5 17.69 20.5 13 16.69 4.5 12 4.5zm0 15c-3.31 0-6-2.69-6-6s2.69-6 6-6 6 2.69 6 6-2.69 6-6 6z"/><path d="M0 0h24v24H0z" fill="none"/></svg>',
    ];

    return $icons[$iconName] ?? '';
}

// Example usage of the icon generation functions
echo generateIcon('home', 'icon-large');
echo generateCustomIcon('custom-icon-1', 'icon-large');
?>
