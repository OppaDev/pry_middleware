# Sistema de Clasificación por Edad - Institución de Salud Preventiva

Este proyecto es un sistema web desarrollado en Laravel que clasifica a los usuarios según su edad y los redirige a secciones informativas específicas adaptadas a su rango etario, siguiendo los requisitos establecidos por la Institución de Salud Preventiva y la ESPE.

## Características Principales

- Formulario público para ingresar la edad del usuario
- Middleware personalizado para validación y redirección basada en edad
- Clasificación automática en 7 categorías etarias
- Sistema de registro de edades ingresadas para análisis posterior
- Vistas específicas para cada grupo de edad
- Implementación siguiendo principios SOLID y patrones de diseño

## Requisitos Técnicos

- PHP 8.2 o superior
- Composer
- Laravel 12.x
- PostgreSQL (configurable a través de .env)

## Instalación

1. Clonar el repositorio:
```bash
git clone https://github.com/tu-usuario/oppadev-pry_middleware.git
cd oppadev-pry_middleware
```

2. Instalar dependencias:
```bash
composer install
```

3. Copiar el archivo de entorno:
```bash
cp .env.example .env
```

4. Generar la clave de aplicación:
```bash
php artisan key:generate
```

5. Configurar la base de datos en el archivo `.env`

6. Ejecutar las migraciones:
```bash
php artisan migrate
```

7. Iniciar el servidor de desarrollo:
```bash
php artisan serve
```

8. Acceder a la aplicación en: `http://localhost:8000`

## Estructura del Proyecto

- **Middleware**: `VerificarEdad` - Valida y procesa la edad ingresada
- **Service**: `AgeRouterService` - Contiene la lógica para determinar la ruta basada en edad
- **Interface**: `AgeRouterInterface` - Define el contrato para implementaciones del router
- **Model**: `AgeLog` - Almacena registros de las edades ingresadas
- **Controllers**: Controladores específicos para cada grupo de edad
- **Views**: Vistas personalizadas para cada categoría

## Rangos de Edad y Clasificación

| Edad | Clasificación | Ruta destino |
|------|--------------|--------------|
| 0 - 5 | Bebés | /bebes |
| 6 - 12 | Niños | /ninos |
| 13 - 17 | Adolescentes | /adolescentes |
| 18 - 25 | Jóvenes adultos | /jovenes |
| 26 - 59 | Adultos | /adultos |
| 60 - 74 | Adultos mayores | /mayores |
| 75 - 120 | Personas longevas | /longevos |

## Flujo de Trabajo

1. El usuario accede a la página de inicio donde ve un formulario para ingresar su edad
2. Al enviar el formulario, la petición pasa por el middleware `VerificarEdad`
3. El middleware valida la entrada y consulta al `AgeRouterService` para determinar la ruta adecuada
4. El usuario es redirigido automáticamente a la sección correspondiente a su edad
5. La edad es registrada en la base de datos para análisis estadístico


## Seguridad

Este proyecto implementa las siguientes medidas de seguridad:

- Validación estricta de entradas de usuario
- Protección contra entradas maliciosas
- Registros de actividad y auditoría
- Manejo adecuado de errores


