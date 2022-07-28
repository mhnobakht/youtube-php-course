<?php



$email = 'test@gmail.com';

$user = User::firstOrCreate(['email' => $email]);

