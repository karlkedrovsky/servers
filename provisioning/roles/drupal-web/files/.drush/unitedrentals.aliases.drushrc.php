<?php

$aliases['local'] = array(
  'uri' => 'unitedrentals',
  'root' => '/var/www/vml/unitedrentals/docroot',
  'dump-dir' => '/home/vagrant/drush-dump-dir',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
  ),
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site unitedrentals, environment dev
$aliases['dev'] = array(
  'root' => '/var/www/html/unitedrentals.dev/docroot',
  'ac-site' => 'unitedrentals',
  'ac-env' => 'dev',
  'ac-realm' => 'prod',
  'uri' => 'unitedrentalsdev.prod.acquia-sites.com',
  'remote-host' => 'staging-17516.prod.hosting.acquia.com',
  'remote-user' => 'unitedrentals.dev',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['dev.livedev'] = array(
  'parent' => '@unitedrentals.dev',
  'root' => '/mnt/gfs/unitedrentals.dev/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site unitedrentals, environment prod
$aliases['prod'] = array(
  'root' => '/var/www/html/unitedrentals.prod/docroot',
  'ac-site' => 'unitedrentals',
  'ac-env' => 'prod',
  'ac-realm' => 'prod',
  'uri' => 'unitedrentals.prod.acquia-sites.com',
  'remote-host' => 'web-17512.prod.hosting.acquia.com',
  'remote-user' => 'unitedrentals.prod',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['prod.livedev'] = array(
  'parent' => '@unitedrentals.prod',
  'root' => '/mnt/gfs/unitedrentals.prod/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site unitedrentals, environment qa
$aliases['qa'] = array(
  'root' => '/var/www/html/unitedrentals.qa/docroot',
  'ac-site' => 'unitedrentals',
  'ac-env' => 'qa',
  'ac-realm' => 'prod',
  'uri' => 'unitedrentalsqa.prod.acquia-sites.com',
  'remote-host' => 'staging-17516.prod.hosting.acquia.com',
  'remote-user' => 'unitedrentals.qa',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['qa.livedev'] = array(
  'parent' => '@unitedrentals.qa',
  'root' => '/mnt/gfs/unitedrentals.qa/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site unitedrentals, environment ra
$aliases['ra'] = array(
  'root' => '/var/www/html/unitedrentals.ra/docroot',
  'ac-site' => 'unitedrentals',
  'ac-env' => 'ra',
  'ac-realm' => 'prod',
  'uri' => 'unitedrentalsra.prod.acquia-sites.com',
  'remote-host' => 'staging-8731.prod.hosting.acquia.com',
  'remote-user' => 'unitedrentals.ra',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['ra.livedev'] = array(
  'parent' => '@unitedrentals.ra',
  'root' => '/mnt/gfs/unitedrentals.ra/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site unitedrentals, environment test
$aliases['test'] = array(
  'root' => '/var/www/html/unitedrentals.test/docroot',
  'ac-site' => 'unitedrentals',
  'ac-env' => 'test',
  'ac-realm' => 'prod',
  'uri' => 'unitedrentalstest.prod.acquia-sites.com',
  'remote-host' => 'staging-17516.prod.hosting.acquia.com',
  'remote-user' => 'unitedrentals.test',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['test.livedev'] = array(
  'parent' => '@unitedrentals.test',
  'root' => '/mnt/gfs/unitedrentals.test/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site unitedrentals, environment test2
$aliases['test2'] = array(
  'root' => '/var/www/html/unitedrentals.test2/docroot',
  'ac-site' => 'unitedrentals',
  'ac-env' => 'test2',
  'ac-realm' => 'prod',
  'uri' => 'unitedrentalstest2.prod.acquia-sites.com',
  'remote-host' => 'staging-17516.prod.hosting.acquia.com',
  'remote-user' => 'unitedrentals.test2',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['test2.livedev'] = array(
  'parent' => '@unitedrentals.test2',
  'root' => '/mnt/gfs/unitedrentals.test2/livedev/docroot',
);
