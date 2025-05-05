>>>>>>>>>>>>>>>Set up laravell== composer + php>=8 + set up enviroment variable + create data base in Phpmyadmin <<<<<<<<<
✅downoald composer :
link : https://getcomposer.org/download/
         set up enviroment variable   </br>
          **windows+R write sysdm.cpl  </br>
          **navigate to Advanced -->Enviroment variable .click path and add    C:\ProgramData\ComposerSetup\bin  </br>
         ***open cmd   </br>
                    composer -v
          </br>
✅downoald xampp :
   link: https://www.apachefriends.org/fr/download.html</br>
   Go to the official Apache Friends website:</br>
link: https://www.apachefriends.org </br> 
✅🧰 Requirements
Before we begin, you need:
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
Navigate to file: </br>
 </br> C:\xampp\php\php.ini</br>
✅open it with your IDE and delete ; from</br>
extension=fileinfo</br>
extension=pdo_mysql</br>
extension=mysqli</br>
✅ Serve Laravel</br>
Laravel comes with its own development server. You can test it like this:</br>
php artisan serve</br>
Now open your browser:</br>
http://127.0.0.1:8000</br>
✅ Create Laravel .env Database</br>
Open C:\xampp\htdocs\myproject\.env</br>
Update database info:</br>
DB_HOST=127.0.0.1</br>
DB_PORT=3306</br>
DB_DATABASE=mydatabase //!!! in phpmyadmin creaye just the name of database</br>
DB_USERNAME=root</br>
DB_PASSWORD=</br>
✅OPEN PROJECT IN YOUR IDE (VSCODE)</br>
follow this commande</br>
cd myproject  </br>
npm install     ########## </br>
composer install ######### </br>
php artisan migrate ####### </br>
npm run dev ########### </br>
npm run build ############## </br>
php artisan serve ############ </br>
