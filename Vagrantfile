# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  #   config.vm.box = "trusty"
  #   config.vm.box_url = "http://cloud-images.ubuntu.com/vagrant/trusty/current/trusty-server-cloudimg-amd64-vagrant-disk1.box"

  config.vm.box = "ubuntu/trusty64"

  config.ssh.insert_key = false
  config.ssh.forward_agent = true

  config.vm.provider :virtualbox do |v|
    v.memory = 512
    v.cpus = 1
    v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
  end

  config.vm.define "web" do |web|
    web.vm.hostname = "web"
    web.vm.network :private_network, ip: "10.1.0.12"
    web.vm.synced_folder "/Users/kkedrovsky/projects", "/var/www", type: "nfs", nfs_export: false
    config.vm.provider :virtualbox do |v|
      v.memory = 1024
    end
  end

  config.vm.define "db" do |db|
    db.vm.hostname = "db"
    db.vm.network :private_network, ip: "10.1.0.13"

    # this goes in the last vm definition to ensure it runs after all vms are created
    db.vm.provision "ansible" do |ansible|
      ansible.playbook = "provisioning/playbook.yml"
      ansible.inventory_path = "provisioning/inventory"
      ansible.limit = "all"
    end
  end

end
