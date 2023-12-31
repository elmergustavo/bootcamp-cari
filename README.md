<p align="center"><a href="https://cari.lat/" target="_blank"><img src="https://cari.lat/assets/images/logotipo-CARIlat.png" width="400" alt="Laravel Logo"></a></p>

<h2>Tall Stack</h2>

<table>
  <tr>
    <td align="center"> <img align="center" src="https://github.com/elmergustavo/elmergustavo/blob/master/tallStack/tailwind-css-2.svg" alt="nextjs logo" width="100" /></td>
		<td align="center"> <img align="center" src="https://github.com/elmergustavo/elmergustavo/blob/master/tallStack/alpinejs-icon.svg" alt="react logo" width="100" /></td>
		<td align="center"> <img align="center" src="https://github.com/elmergustavo/elmergustavo/blob/master/tallStack/-dyeIU__laravel.svg" alt="material-ui logo" width="100" /></td>
		<td align="center"> <img align="center" src="https://github.com/elmergustavo/elmergustavo/blob/master/tallStack/livewire-underwater-jelly.svg" width="100" /></td>

  </tr> 
   <tr>
      <td align="center"><b> Tailwind-css </b></td>
			<td align="center"><b> Alpine JS </b></td>
			<td align="center"><b> Laravel </b></td>
			<td align="center"><b> Livewire </b></td>
  </tr>
</table>


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
