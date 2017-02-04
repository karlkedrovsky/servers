# Server Configuration

This repository contains an Ansible and Vagrant based setup for running development VMs, mostly for Drupal development. It is very much a work in progress and there is a very good chance that just about everything could be done a bit better. The CI server configuration is very early days, I'm not even using it at the moment.

You'll need to be running a fairly recent version of Ansible. I've tested it on 2.1.1 and I know that 2.0 does *not* work.

## Assumptons

1. This is being run on a mac or linux (specifically I've only tested it on Arch).
1. There is an NFS export from the host that will be mounted on /var/www in the web VM. See the Vagrantfile for specifics.

## NFS Export On Arch Linux

On my Archlinux host I set up the NFSv4 export using the following. It allows me to mount ~/projects as /projects inside the VM.

Create directory structure to export.

```
mkdir -p /nfs/projects
```

Add the following to /etc/exports. The anonuid and anongid coorespond to my user and group ids on the host.

```
/nfs 10.1.0.0/24(rw,fsid=0,no_subtree_check)
/nfs/projects 10.1.0.0/24(rw,no_subtree_check,nohide,all_squash,anonuid=1000,anongid=100)
```

Enable and start the NFS service

```
systemctl enable nfs-server
systemctl start nfs-server
```

Add a bind mount to /etc/fstab. This is required by NFSv4 in order to get the assignment of uid and gid correct, without it you get some weird uid/gid mapping. From what I understand you don't need it for NFSv3.

```
/home/karl/projects                       /nfs/projects none    bind            0 0
```

Mount the project directory.

```
mount /nfs/projects
```

## NFS Export On Mac OSX

TBD

## Adding New Sites

There are three vars files that specify the list of Drupal, Wordpress, and static sites that will be configured - provisioning/vars/drupal.yml, provisioning/vars/wordpress.yml, and provisioning/vars/static-sites.yml. Just add the name of the site (hostname and db name) as the key and the path to the docroot as the value and run "vagrant provision".

## Notes

The drupal-web role will look for two directories that are not under version control (don't want the contents on github.com, etc.). If they don't exist they will just be ignored.

- provisioning/roles/drupal-web/files/.acquia
- provisioning/roles/drupal-web/files/.drush
