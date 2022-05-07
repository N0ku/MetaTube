<?php

function formatDate($date)
{
    $dateAndTime = explode("T", $date);

    $currentDate =  date_create(date('y-m-d'));

    $vidDate = date_create($dateAndTime[0]);

    $interval = date_diff($vidDate, $currentDate);

    if ($interval->d > 7 && $interval->y < 1 && $interval->m > 1) {
        return $interval->m . " months";
    } elseif ($interval->d < 7 && $interval->m == 0 && $interval->y < 1) {
        return $interval->d . " days";
    } elseif ($interval->y == 1) {
        return $interval->y . " year";
    } elseif ($interval->y > 1) {
        return $interval->y . " years";
    } elseif ($interval->d > 7 && $interval->y < 1 && $interval->m == 1) {
        return $interval->m . " month";
    } elseif ($interval->d == 1 && $interval->m == 0 && $interval->y < 1) {
        return $interval->d . " day";
    }
}