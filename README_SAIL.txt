El primer cop que executeu el projecte en un nou ordinador heu d'instalar tots els paquests utilitzant els gestors de paquets composer i npm

/* Iniciamos el contenedor */
./vendor/bin/sail up -d

/* I dentro del contenedor ya podemos ejecutar comandos de php, composer, npm.... */
composer install
npm install

Ara ya está el projecte preparat i funcionant accedint a la direcció: http://localhost.

Errors a l'iniciar l'aplicació

Si hi ha algun error analitzeu el missatge que us dona. Es posible que el port utilitzat 80 estigui en us. Canvieu aquest port per un altre a l'arxiu docker-compose.yaml. Es important que llegiu molt bé els missatges d'error.
Moure el projecte a un altre PC¶

Si moveu el projecte a un altre PC amb Git (push/pull) heu d'executar la següent comanda. Això es degut a que el módul SAIL no es puja mai al repositori (.gitignore) i per tant s'ha de baixar a má el primer cop que baxeis el projecte a un nou PC.
 
 **********************************************+
 
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs

**************************************************

Arxiu .env no es puja al Git

Per seguretat l'arxiu .env no es puja al Git perque conté contrasenyes i dades d'access. Pero en el nostre cas, que estem desenvolupant no ens importa publicar aquest arxiu i a més es necessari per al funcionament dels contenidors. Per tant elimineu del .gitignore la linea on possa .env i d'aquesta manera es descarregará quan feu push/pull

Documentacio Instalació
Instalació del modul Guard: gestió d'usuaris¶

Ara instalarem el nostre primer modul adicional de Laravel per administrar la funció de register/login. Tot i que aixó ho explicarem més endevant.

composer require laravel/breeze --dev

La següent comanda instalará tot lo necessari (vistes, contradors, models, routes...) per poder gestionar les acciones de Register/Login:

php artisan breeze:install

npm install
composer install
php artisan migrate
npm run dev

La comanda anterior ens ha creat vistes d'exemple com: login, register, password forget, etc. De moment, ho ignorem per fer-ho servir en el tema d'autenticació.

Pagines de login/register

La instalació de Breeze ha creat noves pagines de login/register. Investiga el projecte per veure les diferencies que hi ha amb la versió inicial

Mes informació sobre Breeze
