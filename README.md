README for simplephpskinner
================================

---------------------------------------
* Very basic template that wraps common files around content with php
---------------------------------------

_DNS notes, running on MAMP_
instructions for running your site on http://mysite.local:8888/

edit your hosts file with Textmate
`mate /etc/hosts`

add your site
`127.0.0.1 mysite.local`

if needed flush DNS on mac 
`dscacheutil -flushcache`

add vhosts include:
`mate /Applications/MAMP/conf/apache/httpd.conf`
the code below needs to be at the end of our httpd.conf file ...

NameVirtualHost *
`Include /Applications/MAMP/conf/apache/httpd-vhosts.conf`

`mate /Applications/MAMP/conf/apache/httpd-vhosts.conf`
below are the contents of the httpd-vhosts.conf file ...
be sure to change yourhomedirectory to the result of 
`cd ~
pwd`
remember to start/stop MAMP when all setup
`
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
`