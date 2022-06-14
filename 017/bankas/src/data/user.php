<?php

$users = [
    ['id' -> 1, 'name' -> 'bebras', 'psw' -> md5('123'), 'full-name' -> 'Bebras Upinis'],
    ['id' -> 2, 'name' -> 'lina', 'psw' -> md5('123'), 'full-name' -> 'Lina Linovaite'],
    ['id' -> 3, 'name' -> 'petras', 'psw' -> md5('123'), 'full-name' -> 'Peter Johnson'],

];

file_put_contents(__DIR__.'/users.json')