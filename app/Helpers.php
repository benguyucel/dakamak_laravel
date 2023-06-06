<?php
function route_text($url)
{
    echo '/' . app()->getLocale() .  '/' . $url;
}

function get_filename(string $data)
{
    return explode('/', $data)[0];
}
function edit_service_text($text)
{
    $arr = explode(' ', $text);
    if (count($arr) > 1) {

        echo  count($arr) === 3 ? $arr[0] . ' ' . $arr[1] . '<span class="d-block">' . $arr[2] . '</span>' : $arr[0] . '<span class="d-block">' . $arr[1] . '</span>';
    } else {
        return $text;
    }
}
