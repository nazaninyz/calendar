Vagrant.configure(2) do |config|
  config.vm.provider :google do |google, override|
    google.google_client_email = "Y498246396488-sq659102ssjj5mahovsqrdblrlhbit9n.apps.googleusercontent.com"
    end
   config.vm.box = "hashicorp/precise32"
   config.vm.network "forwarded_port", guest: 80, host: 8080
   config.vm.provision "puppet" do |puppet|
   puppet.manifests_path = "manifests"
   puppet.manifest_file = "emp.pp"
   end
   config.vm.synced_folder "./change", "/vagrant/emp", create: true, type: "rsync"
end