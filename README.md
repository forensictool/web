# forensictool/web

Official project website

## Installation for developing

### Ubuntu

	$ sudo apt install apache2 php5 mysql-server mysql-client git-core
	$ mkdir -p ~/develop/forensictool
	$ cd ~/develop/forensictool 
	$ git clone git@github.com:forensictool/web.git
	$ sudo ln -s `pwd`/web/web /var/www/html/forensictool

### Debian
	
	$ sudo apt install apache2 php5 mysql-server mysql-client git-core
	$ sudo apt-get install php5-common libapache2-mod-php5 php5-cli
	$ mkdir -p ~/develop/forensictool
	$ cd ~/develop/forensictool
	$ git clone git@github.com:forensictool/web.git
	$ sudo ln -s `pwd`/web/web /var/www/html/forensictool
