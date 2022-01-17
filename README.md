Listen 4002    
NameVirtualHost *:4002
<VirtualHost *:80 *:4002>
    DocumentRoot "C:\xampp\htdocs\mywebsite"
    ServerName mywebsite.localhost
    <Directory "C:\xampp\htdocs\mywebsite">
        Options Indexes FollowSymLinks ExecCGI Includes

        # AllowOverride controls what directives may be placed in .htaccess files.
        # It can be "All", "None", or any combination of the keywords:
        #   Options FileInfo AuthConfig Limit
        #
        #AllowOverride None
        # since XAMPP 1.4:
        AllowOverride All

        #
        # Controls who can get stuff from this server.
        #
        Require all granted
    </Directory>
</VirtualHost>