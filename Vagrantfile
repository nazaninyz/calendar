Vagrant.configure(2) do |config|
   config.vm.box = "hashicorp/precise32"
   config.vm.network "forwarded_port", guest: 80, host: 8080

   config.vm.provision "puppet" do |puppet|
   puppet.manifests_path = "manifests"
   puppet.manifest_file = "emp.pp"
   end

   config.vm.synced_folder "./change", "/vagrant/emp", create: true, type: "rsync"
end