<?php
function settings($key, $default = null)
{

    $settings = new \App\Settings\GeneralSettings();
    if (property_exists($settings, $key)) {
        return $settings->$key;
    }

    return $key;
}
