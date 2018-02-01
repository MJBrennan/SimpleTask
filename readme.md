

Fusio Technical Interview

Task:

Create a form that takes the following inputs in from a form and saves the data to a database table and the server in the case of an image.

Fields:
Email address
Name
Address 1
Address 2
Eircode
Country
Password
Profile Picture - Resized to 250 * 250px when it's uploaded

The profile picture should be saved to a directory that is not web-accessible.

You can use any framework & database combination you like. When you're ready please commit the source code to a git repository on your github account and send me a link. I'll also need a backup of the database.



Overview of the app:

On load the user is presented  with a form  to fill out. They are  also given the ability to choose a file to upload. Once the user selects submit the data is passed to the backend. If the user has left any any of the fields empty the user will be thrown an alert saying there is an error.

Once the data is passed to the backend the image is first processsed and then resized to 250 x 250. It is then placed in the storage folder with a new name. The rest of the data is put in the MySQL database through a database transaction using Laravels in built QueryBuilder. In addition the a path to the users image is inserted so it will be easily accessable later on.

Finally once this task is successful the backend passes a message back to the frontend and the user is alerted  that their data has been successfuly saved




Technical Details:


Developed on Linux Ubuntu
Langauge: PHP7
Framework: Laravel 5.5
Database: MySQL
Frontend: VueJS, Bootstrap, HTMl and CSS

Additional requirements:

Requires GD Library image library

Notes:

Main files used:

resources/views/welcome.blade for frontend markup

public/js/app.js contains a Vue instance which handles the behaviour of the frontend


app/Http/Controllers/UserDetailsController.php contains the backend logic of the application

database/migrations/2018_01_31_120700_user_details_table contains the database schema I wrote for the application

routes/web.php contains the single route for the app



Install Steps:


Clone project into your environment with "git clone"
Rename example.env to .env.
Create a fresh database in your mysql client and create a connection to this database by filling out your database details in the .env file.
Run "php artisan key:generate"
Run "npm install"
Run "npm run dev" to compile assets
Run "php artisan serve"
Go to 127.0.0.1:8000 in your browser to check that the applicaton is running









