<?php

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site urpartner, environment dev
$aliases['dev'] = array(
  'root' => '/var/www/html/urpartner.dev/docroot',
  'ac-site' => 'urpartner',
  'ac-env' => 'dev',
  'ac-realm' => 'devcloud',
  'uri' => 'urpartnervv5evtxugy.devcloud.acquia-sites.com',
  'remote-host' => 'srv-5191.devcloud.hosting.acquia.com',
  'remote-user' => 'urpartner.dev',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['dev.livedev'] = array(
  'parent' => '@urpartner.dev',
  'root' => '/mnt/gfs/urpartner.dev/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site urpartner, environment prod
$aliases['prod'] = array(
  'root' => '/var/www/html/urpartner.prod/docroot',
  'ac-site' => 'urpartner',
  'ac-env' => 'prod',
  'ac-realm' => 'devcloud',
  'uri' => 'urpartnercmu8wekemf.devcloud.acquia-sites.com',
  'remote-host' => 'srv-5191.devcloud.hosting.acquia.com',
  'remote-user' => 'urpartner.prod',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['prod.livedev'] = array(
  'parent' => '@urpartner.prod',
  'root' => '/mnt/gfs/urpartner.prod/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site urpartner, environment test
$aliases['test'] = array(
  'root' => '/var/www/html/urpartner.test/docroot',
  'ac-site' => 'urpartner',
  'ac-env' => 'test',
  'ac-realm' => 'devcloud',
  'uri' => 'urpartneratyjg4aged.devcloud.acquia-sites.com',
  'remote-host' => 'srv-5191.devcloud.hosting.acquia.com',
  'remote-user' => 'urpartner.test',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['test.livedev'] = array(
  'parent' => '@urpartner.test',
  'root' => '/mnt/gfs/urpartner.test/livedev/docroot',
);
