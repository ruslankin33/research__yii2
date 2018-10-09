<?php
$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['extension'] = 'mysql';
$cfg['Servers'][$i]['connect_type'] = 'tcp';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['auth_type'] = 'config';  // Вот это не пропустите.
$cfg['Servers'][$i]['user'] = 'root';        // Имя пользователя MySQL.
$cfg['Servers'][$i]['password'] = '';  // Здесь надо вписать ваш пароль к MySQL.
$cfg['CheckConfigurationPermissions'] = false;
?>