# -*- mode: ruby -*-
# vi: set ft=ruby :

VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "DJenkinsDev/VagrantPHP"
  config.vm.box_version = "0.5.0"
  config.vm.box_check_update = true

  config.vm.synced_folder ".", "/vagrant", :mount_options => ["dmode=777","fmode=666"]

  # Port Forwarding for:
  ## NginX
  config.vm.network "forwarded_port", guest: 80, host: 8080
  ## MySQL
  config.vm.network "forwarded_port", guest: 3306, host: 33060
  ## MongoDB
  config.vm.network "forwarded_port", guest: 27017, host: 20017
  ## Redis
  config.vm.network "forwarded_port", guest: 6379, host: 63790

  config.vm.network "private_network", ip: "192.168.56.101"
  
  # Allow more memory and fix this problem : http://askubuntu.com/questions/238040/how-do-i-fix-name-service-for-vagrant-client
  config.vm.provider "virtualbox" do |v|
    # v.gui = true
    v.memory = 1024
    v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
    v.customize ["modifyvm", :id, "--natdnsproxy1", "on"]
  end
#  config.vm.provision :chef_solo do |chef|
#      chef.cookbooks_path = "cookbooks"
#      chef.add_recipe "apt"
#      chef.add_recipe "apache2::mod_wsgi"
#      chef.add_recipe "build-essential"
#      chef.add_recipe "git"
#      chef.add_recipe "vim"
  #
  #   # You may also specify custom JSON attributes:
  #   chef.json = { :mysql_password => "foo" }
#  end
end
