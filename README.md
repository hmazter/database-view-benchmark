Benchmark Database views for Laravel Eloquent
---------------------------------------------

This repository is used to benchmark how Laravel Eloquent handles
a database view for a model compared to a normal table.

## Installation
1. git clone
1. composer install
1. copy .env.example and edit .env
1. php artisan migrate --seed

## Usage
Run one of these artisan commands using the unix `time` command:

```
fetch-posts-from-table-model  Fetch posts from the table model
fetch-posts-from-table-query  Fetch posts from the table with a query
fetch-posts-from-view-model   Fetch posts from the view model
fetch-posts-from-view-query   Fetch posts from the view with a query
```

ex:
```shell
time php artisan fetch-posts-from-table-model
```