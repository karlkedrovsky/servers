<?php

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site urstage, environment dev
$aliases['dev'] = array(
  'root' => '/var/www/html/urstage.dev/docroot',
  'ac-site' => 'urstage',
  'ac-env' => 'dev',
  'ac-realm' => 'devcloud',
  'uri' => 'urstagekyrx9lwcdu.devcloud.acquia-sites.com',
  'remote-host' => 'free-5070.devcloud.hosting.acquia.com',
  'remote-user' => 'urstage.dev',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['dev.livedev'] = array(
  'parent' => '@urstage.dev',
  'root' => '/mnt/gfs/urstage.dev/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site urstage, environment test
$aliases['test'] = array(
  'root' => '/var/www/html/urstage.test/docroot',
  'ac-site' => 'urstage',
  'ac-env' => 'test',
  'ac-realm' => 'devcloud',
  'uri' => 'urstageu8ql8ywaip.devcloud.acquia-sites.com',
  'remote-host' => 'free-5070.devcloud.hosting.acquia.com',
  'remote-user' => 'urstage.test',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['test.livedev'] = array(
  'parent' => '@urstage.test',
  'root' => '/mnt/gfs/urstage.test/livedev/docroot',
);
