# Chuck Norris App
## _Random  Chuck Norris Jokes_


The APP sends random Chuck Norris Jokes to the emails provided by the users. In order to get the jokes, the app connects to the API http://www.icndb.com/api/  and sends the jokes via email. The App was created with Laravel & ReactJS and the integration was done via InertiaJS. Some additions can be made in order to protect from Bots or malign users to keep on sending emails with the use of a Captcha, which is still not used in this version.

## Features

- Gets the emails sent by the user. * comma separeted.
- Connects to the API http://www.icndb.com/api/ & gets a random joke
- Sends the Jokes to the emails.

## Tech

This APP uses a number of open source projects to work properly:

- [PHP](https://www.php.net/) - Programming language
- [Javascript](https://www.javascript.com/) - Programming language
- [Laravel](https://laravel.com/) - A Web application framework
- [ReactsJS](https://reactjs.org/) - A JavaScript library for building interfaces
- [Snyk](https://snyk.io/) - Tool to check the code's security

## Application Structure
__app__ - Laravel application..
__app/Services__ - Contains the app's business logic
__app/Http/Controllers__ - Contains the app's Controllers.
__app/Mails__ - Contains the app's Mail configuration.
__resources/js__ - Contains the app's Front-end(ReactJS).
__app/Mails__ - Contains the app's Mail configuration.
__.env__ - File with environment variables
## Installation

This APP requires composer & NPM/Yarn to run.

Install & run it locally.

```sh
git clone https://github.com/dbores3/ChuckNorrisApp
cd CHUCK_NORRIS_APP
composer install
npm install
php artisan serve
npm run dev
```

## Dependencies

This APP is currently extended with the following dependencies.
Instructions on how to use them in your own application are linked below.

| Dependency | URL |
| ------ | ------ |
| vite | https://vitejs.dev/ |
| inertia | https://inertiajs.com/ |
| tailwindcss | https://tailwindcss.com/ |
| axios | https://github.com/axios/axios |
| react-dom | https://reactjs.org/docs/react-dom.html |

127.0.0.1
`
