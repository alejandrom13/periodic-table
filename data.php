<?php

function getData(){
    $csv = array_map('str_getcsv', file('https://docs.google.com/spreadsheets/d/e/2PACX-1vSWya2xLTMvCoMjrQVKKAvhd4uIj1YxH0jUW4m-fKgWRmhHuPzq-4xRAaC8hMvHdTFlpknL3Bp6HWH6/pub?gid=0&single=true&output=csv'));
    return $csv;
}

?>







