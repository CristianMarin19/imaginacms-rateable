# imaginacms-rateable

## Install
```bash
composer require imagina/rateable-module=v8.x-dev
```

## Enable the module
```bash
php artisan module:enable Rateable
```

## Migrations
```bash
php artisan module:migrate Rateable
```

## Frontend - Component

1. Add this trait in the model
```bash
use Modules\Rateable\Traits\Rateable;
```
```bash
use Rateable;
```

2. Component Params:
	- model = Model where data will be obtained
	- layout - (optional) =
		- rating-layout-1 (default)


```bash
<x-rateable::rating :model="$product"/>
```
