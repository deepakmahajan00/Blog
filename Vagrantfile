# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|

  config.vm.box = "ubuntu/trusty64"

  config.vm.network "private_network", ip: "192.168.33.15" #TODO: chose a new IP
  config.vm.hostname = "iprogrammer.vm"  #TODO: replace with project hostname

  # configs for vagrant-cachier
  if Vagrant.has_plugin?("vagrant-cachier")
      config.cache.auto_detect = true
  end

  # configs for vagrant-hostmanager
  if Vagrant.has_plugin?("vagrant-hostmanager")
    config.hostmanager.manage_host = true
  end

  config.vm.synced_folder ".", "/var/www/iprogrammer", type: "nfs" #TODO: replace with project folder name

  config.vm.provider "virtualbox" do |vb|
    vb.memory = "1024"
  end

  config.vm.provision "ansible" do |ansible|
    ansible.playbook = "provisioning/ansible.yml"
    ansible.verbose = "v"
  end

  config.ssh.forward_agent = true
end
