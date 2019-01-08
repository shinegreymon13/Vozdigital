# Vozdigital
Sistema de Vozdigital

# Httpd config
Agregar lo siguiente en el archivo
/etc/httpd/conf/conf/httpd.conf

```
<Directory "/var/www/html/laravel/public">
 Allowoverride All
</Directory>
```

Asegurarse si se encuentra

```
<Directory /var/www/html>
 AllowOverride All
</Directory>
```

# Servidor linux (Permisos)
```
setenforce 1
sudo setenforce permissive
sudo setenforce enforcing
```
### Permisos a carpetas y archivos necesarios
```
sudo chmod -R 777 storage/*
sudo chmod -R 777 bootstrap/*
sudo chmod -R 777 config/*
```
### Permisos a carpetas y archivos necesarios
```sh
sudo semanage fcontext -a -t httpd_sys_rw_content_t "/var/www/html/vozdigital/storage(/.*)?"
sudo semanage fcontext -a -t httpd_sys_rw_content_t "/var/www/html/vozdigital/bootstrap/cache(/.*)?"
sudo semanage fcontext -a -t httpd_sys_rw_content_t "/var/www/html/vozdigital/config(/.*)?"
restorecon -Rv /var/www/site/
```
### Si no funciona semanage
```sh
yum provides /usr/sbin/semanage
yum whatprovides /usr/sbin/semanage
yum install policycoreutils-python
semanage
```
### Laravel Cache
```
php artisan config:cache
php artisan config:clear
```
No olvidar resetear httpd
```
sudo /sbin/service httpd restart
```
Tambien puede ejecutar
```
sudo systemctl restart httpd
```
##Enlace Script
http://www.mediafire.com/file/l1xwuyh373bx3en/script.sh/file
