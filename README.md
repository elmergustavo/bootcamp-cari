<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Instalación
- ejecutar desde la consola el siguiente comando para acceder al bash de contenedor:
```
docker exec -t bootcamp-cari /bin/bash
```
- Otra manera desde el docker, abrir una terminal de la image
```
composer i && npm i
```

- si muestra el siguiente error
  
![image](https://github.com/elmergustavo/bootcamp-cari/assets/42653934/25fcd790-c5f2-48cb-b95b-76ec084c600a)

- Ejecutar el siguiente comando para darle permisos al storage (en el bash del contenedor)
  
```
chmod -R 775 ./storage/*
chmod -R 777 ./storage/*
```

## migrar la base de datos
ejecutar el siguiente comando:
```
php artisan migrate
```

Comando para dar permisos de escritura:
```
sudo chown -R usuario ~/*
```

Comando para limpiar cache
```
sudo chmod -R 777 bootstrap/cache/
```


- enlaces
Install Tailwind CSS with Laravel
- https://tailwindcss.com/docs/guides/laravel
