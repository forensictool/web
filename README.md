# forensictool/web

Official project website

## Installation for developing

### Ubuntu 16.04

	$ sudo apt install apache2 php libapache2-mod-php mysql-server mysql-client git-core
	$ sudo service apache2 restart
	$ mkdir -p ~/develop/forensictool
	$ cd ~/develop/forensictool 
	$ git clone git@github.com:forensictool/web.git
	$ sudo ln -s `pwd`/web/web /var/www/html/forensictool
	$ sudo /etc/init.d/apache2 restart

### Debian
	
	$ sudo apt install apache2 php5 mysql-server mysql-client git-core
	$ sudo apt-get install php5-common libapache2-mod-php5 php5-cli
	$ mkdir -p ~/develop/forensictool
	$ cd ~/develop/forensictool
	$ git clone git@github.com:forensictool/web.git
	$ sudo ln -s `pwd`/web/web /var/www/html/forensictool
	$ sudo /etc/init.d/apache2 restart
