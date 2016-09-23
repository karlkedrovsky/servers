# Server Configuration

This repository contains an Ansible and Vagrant based setup for running development VMs, mostly for Drupal development. It is very much a work in progress and there is a very good chance that just about everything could be done a bit better. The CI server configuration is very early days, I'm not even using it at the moment.

You'll need to be running a fairly recent version of Ansible. I've tested it on 2.1.1 and I know that 2.0 does *not* work.

## Assumptons

1. This is being run on a mac or linux (specifically I've only tested it on Arch).
1. There is an NFS export from the host that will be mounted on /var/www in the web VM. See the Vagrantfile for specifics.

## Adding New Sites

There are three vars files that specify the list of Drupal, Wordpress, and static sites that will be configured - provisioning/vars/drupal.yml, provisioning/vars/wordpress.yml, and provisioning/vars/static-sites.yml. Just add the name of the site (hostname and db name) as the key and the path to the docroot as the value and run "vagrant provision".

## Notes

The drupal-web role will look for two directories that are not under version control (don't want the contents on github.com, etc.). If they don't exist they will just be ignored.

- provisioning/roles/drupal-web/files/.acquia
- provisioning/roles/drupal-web/files/.drush
