
# Technical Test - Star Test

## Tech Stack

**Client:** Vue 3, Inertia SPA

**Server:** PHP 8.2, Laravel 9


## Installation for dev

```bash
  cp .env.example .env
  
  composer i
  
  touch database/database.sqlite
  
  php artisan key:generate --force
  
  php artisan migrate:fresh --seed --force
  
  npm i
  
  vite
```

## Environment Variables

To run this project, you will need to add the following environment variables to your .env file

`API_KEY` (php artisan key:generate --force)

## Authors

- [@vassilidev](https://www.github.com/vassilidev)

