# tp-desarrollo-web
UNLAM

#Instructivo

•	A mí me funciona todo bien “en mi pc”, pero puede ser que tengan algún problemas con las rutas, por lo menos a mí me paso cuando baje el proyecto       en el pc de unlam, pero solo cambien ../../algo vean el error.

•	Si usan Brackets con la vista dinámica seguramente les tire error mejor usen el explorador con localhost(o mirenlo despues desde el explorador).

•	PhpmyAdmin ténganlo con usuario root y contraseña vacía sin nada, o si vayan a Carpeta php/conexión cambien conexión.php y control.php por los         datos que tengan en phpmyadmin.

•	En el proyecto carpeta db hay un archivo que dice logística ábranlo con workbench vayan phpmyadmin en el menú hay una opción que dice sql copien y     peguen ahí y lo de logística y ya tienen la bd. La bd hay que terminarla maso menos bien, ver de no repetir datos entre      tablas por ejemplo en     mantenimiento yo puse tipo_ vehículo, pero si se hace un join con vehículo ese dato ya lo tendría, pero como demo por ahora va.

•	correr xamp o wamp abrir desde tp-desarrollo-web index.html en el menú click acceder va al login.html
    que está en carpeta html/login.html el usuario y pass les deje un txt Con usuario y pass.
    
•	Una vez adentro redirige a la carpeta php/index.php el link que funciona es el de usuarios, y mantenimiento del menú lateral.

•	La organización de las carpetas es maso menos así:
    o	Carpeta Material tienen el bootstrap e iconos q use.
    
    o	Carpeta fpdf es lo que se usa para pasar a pdf.
    
    o	Dentro php:
        	/conexión la conexión.
        
        	/Login validación del login usuarioLog y salir by nico.
        
        	/pdf lo necesario para exportar pdf un archivo con plantilla y otro con pdfUsuario.
        
        	carpeta /plantilla, tiene el menú, los estilos css, sidebar etc. Se los llaman con include en los archivos que quieran.
        
        	en /usuarios tienen vistas parciales para no tener un código hiper largo en cada página y un archivo mas que es importante que es el      registrar que es que hace la magia de modificar insertar y eliminar (lo mismo se debería repetir para cada caso ejemplo vehículo crear carpeta        vehículo con las vistas parciales). Estas vistas son casi todos formularios.
        
        	Carpeta php lo que hay volcado ahí son como los index de cada vista que tienen los include a las demas carpetas segun cada caso.
        
        
        Gran parte del código esta comentado si no entienden pregunten. Modifiquen y suban lo que quieran, 
        pero fíjense que todo siga funcionando.
