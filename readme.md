<div align="center"><img src="public/images/skull.jpg"></div>

<div align="center">

# Hack City

</div>

<div align="center">

[![pipeline status](https://gitlab.com/tpageforfunzies/fatbooty/badges/master/pipeline.svg)](https://gitlab.com/tpageforfunzies/fatbooty/commits/master)

</div>




## Deploying

##### Production

Production (http://hackcity.software) is deployed on every new merge into master.<br>
When this happens, a slack message is sent to the projects channel to notify everyone of a new release.

##### Local/Development

Clone the repo via SSH.<br>
Navigate to the root dir fatbooty/<br>
`composer install` - ensure you have PHP >= 7.1.3 and Laravel >= 5.5<br>
`bash build.sh dev`<br>
This will spin up an instance of the app serving at `localhost:8000`<br>

## Database
Up to you to set up a local database to use<br>
Once you have it running, add it's info to your .env in the root dir<br>
and add which driver you're using to the config/database.php file.<br>
Re-deploy and go to localhost:8000/db to verify your local database connection.<br>
From there run migrations to get it up to date with `php artisan migrate`.<br>

## Contributing

Branch off of latest master<br>
Build the repo locally or on whatever development environment you want<br>
Add your feature/functionality and test on your own. <br>
When ready for review/merge open a pull request to master and CI/CD will trigger<br>
That will build the app, run unit tests for the branch, and notify the slack channel of a new pull request<br>


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
