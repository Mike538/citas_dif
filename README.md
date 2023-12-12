# Sistema-Citas-Medicas
Sitio web desarrollado en HTML, CSS, JS, PHP, LARAVEL y ORACLE para agendar citas médicas del sector psicologico, este proyecto se realizo con fines educativos sin fines de lucro, además de aprender de dichos lenguajes de programación.

## 📋 Requisitos 📋
- PHP 8.X
- MySQL 5.X
- Cliente Web (Opera, Firefox, Chrome, etc.)

- Base de datos
  - Ir a su cliente de Base de Datos
  - Crear la tabla usuarios
  - Usar la base de datos creada
  - Importar el script develop.sql
    - /database 

- Aplicación
  - Abrir un cliente web
  - Poner la url de su index principal (vista) del frontend
  - Disfrutar
  
## ❌ Posibles errores ❌
- Si tiene credenciales diferentes en su motor de base de datos, deberá configurar correctamente su DB y crear tabla usuarios, posteriomente agregar los usuarios con su respectiva contaseña

## 👨‍💻 Tecnologías usadas 👨‍💻
| MYSQL | PHP | Bootstrap |
| --- | --- |--- |
| <img src="https://d1.awsstatic.com/asset-repository/products/amazon-rds/1024px-MySQL.ff87215b43fd7292af172e2a5d9b844217262571.png" width="1000"/> | <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" width="1000"/> | <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/1200px-Bootstrap_logo.svg.png" width="1000px"/> |

## 🔗 Endpoints 🔗

URL: https://sistemadecitasdif.netlify.app/
### **usuarios**

> #### $_REQUEST['httpMethods'] == POST /backend/models/usuarios.php
> ##### Agrega un nuevo registro
**Nota:** Si emplea JavaScript desde el Frontend la data debe ser enviada empleando la clase **FormData**.

**Body**
```
{
  "usuario": "string",
  "clave": "string",
  "idRol": 0
}
```

> #### $_REQUEST['httpMethods'] == GET /backend/models/usuarios.php
> ##### Lee los registros

> #### $_REQUEST['httpMethods'] == GET /backend/models/usuarios.php
> ##### Lee un registro

**Body**
```
{
  "id": 0
}
```

> #### $_REQUEST['httpMethods'] == PUT /backend/models/usuarios.php
> ##### Actualiza un registro

**Body**
```
{
  "id": 0,
  "usuario": "string",
  "clave": "string",
  "idRol": 0
}
```

> #### $_REQUEST['httpMethods'] == DELETE /backend/models/usuarios.php
> ##### Elimina un registro

**Body**
```
{
  "id": 0
}
```

## 🤗 Redes sociales 🤗
- 🐭 YouTube: https://www.youtube.com/@Devmike117 🐭
- 🐭 GitHub: https://github.com/mike538 🐭
- 🐭 Instagram: https://www.instagram.com/devmike117/ 🐭
