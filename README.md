# php-learning

* Ctrl + / (Comentar línies)
* Alt + Insrt (Crear fitxer)
* Variables començem amb $
* Composer es el apt-get install del PHP
* Alt + Shift + F10 (Executar funció)
* Shift + F10 (Executar última funció)
* php -S localhost:8000 (Servidor PHP per fer coses bàsiques)
* Funcions predefinides, venen de serie amb PHP
* Xivatos: echo, dd, dump, Laravel dump server, logs, Laravel DebugBar, var_dump
* WISHFUL THINKING | WISHFUL PROGRAMMING -> Programar sobre el que jo vull
* File - Settings - phpunit - Test Frameworks (Per fer funcionar els tests)
* Ctrl + Shift + F10 (Executar tots els tests, sobre de la classe)
* No repetir mai noms de funcions
* Require (copia el codi d'un fitxer dintre un altre)
* <?php (codi php) ?> (Per insertar codi PHP dintre un fitxer HTML)
* SEPARATION OF CONCERNS (Evitar que en un sol codi, ho fesem tot, separar HTML de PHP)
* Shift + F6 (Canviar nom a un fitxer)
* git diff nomfitxer (Per veure els canvis que hem fet en un fitxer)
* HTTP (HyperText Transfer Protocol) (Entre softwares) (Protocol de missatges, el Request (Client->Servidor) i el Response (Servidor->Client))
* HTTP Request (tipus/methods)
    * GET (Per defecte)
    * POST
    * DELETE
    * PUT
* Client (Browser/Navegador) (HTML + CSS + Javascript) -> Servdor (Apache/Nginx)
* Client (Browser/Navegador) (HTML + CSS + Javascript) <- Servdor (Apache/Nginx)
* $_GET (Array)
* Array associatiu (Per guardar parelles de valors)
* echo 'Hello ' . $greeting (Sempre que poguessim escollir farem cometes simples)
* echo "Hello $greeting" (Diferencia els que son variables i el que es text)
* echo ${greeting} (Forma completa per usar una variable)
* /etc/mysql/debian.cnf (Usuari i password per mysql)
* $this (Fa referència a jo mateix, exactament igual que en java)
* ul>li*5 (Per fer una llista)
* foreach ($tasks as $task) ((Primer $tasks es la variable que volem utilitzar i el segon la que utilitzarem dintre el for))
* new PDO('mysql:host=127.0.0.1;dbname=php_learning','debian-sys-maint','DOd3NQfVnIUYBb0e'); (Conexió a una BD)
* FC -> Font Controller -> Un sol fitxer PHP (index.php) executa tota la app, sempre s'executa primer
* URI (Una part de la URL)
* composer dump-autoload (actualitza)
* require 'vendor/autoload.php'; (dins hi han tots els requires)
* Controlador (Ajuntar model en la vista)
* :: (Per evitar tenir que fer un $router = new Router())
* MVC (Model Vista Controlador)
* git rm --cached config.php (Per eliminar un fitxer del github pero NO del repositori local)
* self:: (Per accedir als paràmetres que estan en static)
* Ctrl + Alt + L (Organitzar tabulacions del codi)
* 

# Tasques per fer
* Poder accedir a la variable $config desde la classe Connection