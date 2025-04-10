<?php

function parseBool($value) {
    if (is_bool($value)) {
        return $value;
    }

    // Convert value to lowercase for easier comparison
    $value = strtolower(trim($value));

    return in_array($value, ['1', 'true', 'yes', 'on'], true);
}