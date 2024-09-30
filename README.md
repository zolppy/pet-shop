<div align="center">
  <h1>Pet Shop</h1>
  <div>
    <img src="http://img.shields.io/static/v1?label=PHP&message=8.3&color=purple&style=for-the-badge&logo=php"/>
    <img src="http://img.shields.io/static/v1?label=JavaScript&message=ES6&color=yellow&style=for-the-badge&logo=javascript"/>
    <img src="https://img.shields.io/static/v1?label=MySQL&message=8&color=darkblue&style=for-the-badge&logo=MySQL"/>
    <img src="http://img.shields.io/static/v1?label=Tailwind&message=3.4.13&color=blue&style=for-the-badge&logo=tailwindcss"/>
    <img src="http://img.shields.io/static/v1?label=Status&message=Finished&color=GREEN&style=for-the-badge"/>
  </div><br>

  A simple pet shop web application.
</div>


## Table of Contents

:small_blue_diamond: [What The Application Can Do](#what-the-application-can-do)

:small_blue_diamond: [Dependencies](#dependencies)

:small_blue_diamond: [How to Run the Application](#how-to-run-the-application)

:small_blue_diamond: [Entity-relationship Diagram](#entity-relationship-diagram)


## What the Application Can Do

:heavy_check_mark: List, create, edit, and delete products;

:heavy_check_mark: List, create, edit, and delete categories;

:heavy_check_mark: Show contact us page with contact form;

:heavy_check_mark: Show about page with developers info;

:heavy_check_mark: Show a home page with the differentials of our pet shop.

## Dependencies

This application was made to run with [**Docker**](https://www.docker.com/), and the how to run instructions is written to be used with it, so just use Docker, because everything you need will be installed on the containers. But if you want to run this project without Docker anyway, you can use a [**WampServer**](https://www.wampserver.com/) or similar:

:warning: [PHP 8.3](https://www.php.net/)

:warning: [MySQL 8](https://www.mysql.com/)

:warning: [Apache](https://www.apache.org/)

:warning: [Libpq-dev 17](https://packages.debian.org/pt-br/sid/libpq-dev)

:warning: [PDO MySQL](https://pecl.php.net/package/PDO_MYSQL)

## How to Run the Application

After configuring Docker, clone this repository:

```
git clone https://github.com/ruliancruz/calendario-simples.git
```

After that, all you need to do to run the application is starting Docker containers:

```
docker compose up --build
```

It will start test container too, if want only the main application, run it instead:

```
docker compose up --build app
```

Now you can access the application through http://localhost:8000/ route.

### How to Set Up the Database

The database container will start without a database created, so you will need to run scripts to create and migrate it.

First, with the application container running, run a bash on it:

```
docker exec -it app bash
```

After that, run the reset script inside the container:

```
php database/scripts/reset.php
```

You can instead recreate database or run migrations separately if you want.

To recrate run:

```
php database/scripts/recreate.php
```

To migrate run:

```
php database/scripts/migrate.php
```

## Entity-relationship Diagram

<div align="center">
  <img src="https://github.com/user-attachments/assets/e4a1cbf9-206e-455f-8463-e946ab6caa7f" alt="Entity-relationship diagram">
</div>
