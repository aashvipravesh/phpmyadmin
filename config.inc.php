<?php

$cfg['blowfish_secret'] = 'sdsafsf343dsgdgsdfd';

/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'cookie';

/* Server parameters */
$cfg['Servers'][$i]['host'] = 'localhost';

$cfg['Servers'][$i]['connect_type'] = 'tcp';
$cfg['Servers'][$i]['compress'] = false;
/* Select mysql if your server does not have mysqli */
$cfg['Servers'][$i]['extension'] = 'mysqli';
$cfg['Servers'][$i]['AllowNoPassword'] = false;

?>
