<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About project

1. composer create-project laravel/laravel detec-app
2. cd detec-app
3. php artisan serve
4. php artisan make:model Activity -m
5. php artisan make:model Interested -m
6. php artisan make:model TechniqueArea -m 
7. php artisan make:model ThematicArea -m  
8. php artisan make:model AdministrativeRegion -m   
9. php artisan make:model Section -m  
10. php artisan make:model Process -m
11. php artisan make:model Employer -m  
12. php artisan make:model DemandsEmployer -m
13. php artisan make:model Demand -m
14. php artisan make:migration add_demands_employer_id_to_employers_table
15. php artisan make:migration add_demand_id_to_demands_employers_table
16. php artisan make:model ProcessSection -m
17. php artisan make:migration add_process_section_id_to_processes_table     
18. php artisan make:controller ActivityController --resource --model=Activity
19. create group route controller for ActivityController
20. Update model using protected $fillable
21. defining relationships (section, section_process and process)
22. defining relationships
23. php artisan make:seeder ActivitySeeder
24. create folder techniqueAreas in views and create file index in techniqueAreas
25. php artisan make:controller TechniqueAreaController --resource
26. create group route controller for TechniqueAreaController
27. create folder thematicAreas in views and create file index in thematicAreas
28. php artisan make:controller ThematicAreaController --resource
29. create group route controller for ThematicAreaController
30. create folder interesteds in views and create file index in interesteds
31. php artisan make:controller InterestedController --resource 
32. create group route controller for InterestedController


# About clone, organize and install to start local
1. Run git clone <my-cool-project>
2. Run composer install
3. Run cp .env.example .env
4. Run php artisan key:generate
5. Run php artisan migrate, before set conf to database
6. Run php artisan serve
7. Go to link localhost:8000


## About Laravel


Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
