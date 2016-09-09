# Server Configuration

This repository contains a relatively simple Ansible and Vagrant based setup for running development VMs, mostly for Drupal. It is very much a work in progress and there is a very good chance that just about everything could be done a bit better.

## Assumptons

1. This is being run on a mac. This may not be true but it's the only place it's been tested so far.
1. There is an NFS export from the host that will be mounted on /var/www in the web VM. See the Vagrantfile for specifics.

## Adding New Sites

There are two vars files that specify the list of Drupal and static sites that will be configured - provisioning/vars/drupal.yml and provisioning/vars/static-sites.yml. Just add the name of the site (hostname and db name) as the key and the path to the docroot as the value and run "vagrant provision".

## Notes

The drupal-web role will look for two directories that are not under version control (don't want the contents on github.com, etc.). If they don't exist they will just be ignored.

- provisioning/roles/drupal-web/files/.acquia
- provisioning/roles/drupal-web/files/.drush

