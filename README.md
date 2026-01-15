# Challenge XAcademy - Gestión de Jugadores FIFA ⚽

Este proyecto es una aplicación web integral desarrollada para el **Challenge de XAcademy (Vertical DEV)**. Permite gestionar una base de datos de jugadores de fútbol de las versiones de FIFA 2015 a 2023, incluyendo funcionalidades de búsqueda, visualización de habilidades, edición y exportación de datos.

## 🛠️ Stack Tecnológico

- **Frontend:** HTML5, JavaScript Vanilla (ES6+), Bootstrap 5 (para diseño responsivo).
- **Backend:** PHP 8.x con arquitectura de API REST.
- **Base de Datos:** MySQL (conector PDO para máxima seguridad).
- **Gráficos:** Chart.js para la visualización de habilidades (Radar Chart).

## 🚀 Instrucciones de Instalación y Uso

### Requisitos Previos
- Servidor local (ej. **XAMPP**, WampServer o Laragon).
- MySQL / PHPMyAdmin.

### Pasos para configurar:
1. **Clonar el repositorio:** Descarga los archivos en la carpeta raíz de tu servidor (ej. `C:/xampp/htdocs/fifa-challenge/`).
2. **Importar Base de Datos:**
   - Abre PHPMyAdmin.
   - Crea una base de datos llamada `fifa_local`.
   - Importa el archivo `fifa_male_players.sql` incluido en la raíz de este proyecto.
3. **Configurar Conexión:** - Abre `api/config.php` y verifica que el usuario y la contraseña coincidan con tu configuración local de MySQL.
4. **Acceso a la App:**
   - Navega a `http://localhost/fifa-challenge/login.html`.

### Credenciales de Acceso:
- **Usuario:** `admin`
- **Contraseña:** `admin123`

---

## 📋 Funcionalidades Implementadas

1.  **Login:** Acceso restringido. Solo usuarios autenticados pueden ver la información.
2.  **Listado Paginado:** Visualización de jugadores con filtros dinámicos por nombre, club y posición.
3.  **Visualización de Skills:** Detalle individual de cada jugador con un **Gráfico de Radar** (Chart.js) que muestra Pace, Shooting, Passing, Dribbling, Defending y Physic.
4.  **Edición y Creación:** - Posibilidad de modificar la información de jugadores existentes.
    - Sección "Create yourself" para registrarse como jugador con habilidades personalizadas.
5.  **Exportación CSV:** Botón para descargar el listado de jugadores en formato CSV compatible con Excel.
6.  **Validaciones:** Control de datos tanto en formularios (Frontend) como en la recepción de la API (Backend).

---

## 🧠 Decisiones Técnicas

- **Seguridad (SQL Injection):** Se utilizó **PDO (PHP Data Objects)** con sentencias preparadas para todas las interacciones con la base de datos, garantizando protección contra inyecciones SQL.
- **Rendimiento:** Se implementó paginación desde el servidor (LIMIT/OFFSET) para manejar el gran volumen de datos (versiones 2015-2023) sin afectar la velocidad de carga del navegador.
- **Modularidad:** El backend está separado en una carpeta `/api`, siguiendo principios de responsabilidad única para cada endpoint (`login.php`, `players.php`, `export.php`, etc.).
- **UX/UI:** Se optó por **Bootstrap 5** para asegurar que la aplicación sea intuitiva y visualmente limpia sin necesidad de hojas de estilo externas complejas.

---

## 📂 Estructura del Proyecto

```text
/
├── api/                # Lógica del servidor (PHP)
│   ├── config.php      # Conexión DB
│   ├── login.php       # Auth
│   ├── players.php     # Listado y filtros
│   ├── export.php      # Generador de CSV
│   └── ...             # Otros endpoints
├── index.html          # Panel principal
├── login.html          # Pantalla de acceso
├── registro.html       # Crear jugador
├── detalle.html        # Gráfico de Radar
├── editar.html         # Formulario de edición
├── fifa_male_players.sql # Base de datos
└── README.md           # Documentación
