<?php
/*
# DNS notes, running on MAMP
# instructions for running your site on http://mysite.local:8888/

# edit your hosts file with Textmate
mate /etc/hosts

# add your site
127.0.0.1 mysite.local

# if needed flush DNS on mac 
dscacheutil -flushcache

# add vhosts include:
mate /Applications/MAMP/conf/apache/httpd.conf 
# the code below needs to be at the end of our httpd.conf file ...

# NameVirtualHost *
Include /Applications/MAMP/conf/apache/httpd-vhosts.conf

mate /Applications/MAMP/conf/apache/httpd-vhosts.conf
# below are the contents of the httpd-vhosts.conf file ...
# be sure to change yourhomedirectory to the result of 
cd ~
pwd
# remember to start/stop MAMP when all setup

#
# Virtual Hosts
#
NameVirtualHost *:8888

<VirtualHost *:8888>
	DocumentRoot /Users/home/Sites/htdocs
	ServerName localhost
</VirtualHost>

<VirtualHost *:8888> 
  <Directory /Users/yourhomedirectory/Sites/htdocs/simplephpskinner> 
    AllowOverride All 
  </Directory> 
  DocumentRoot /Users/yourhomedirectory/Sites/htdocs/simplephpskinner
  ServerName mysite.local
</VirtualHost>

*/
require_once($_SERVER['DOCUMENT_ROOT'].'/includes/config.php');
// arg "Home" appends page title, "home" is id for body, site is owner
$template = new pageTemplate("Home","home","/",$site);
$template->description = "yada yada";
require_once($root.'/includes/head.phtml');
require_once($root.'/includes/body_top.phtml');
require_once($root.'/includes/topnav.phtml');	
?>
<div id="leader" class="full-16">
<!-- content here -->
</div>
<?php
require_once($root.'/includes/footer.phtml');	
require_once($root.'/includes/body_bottom.phtml');	
?>

