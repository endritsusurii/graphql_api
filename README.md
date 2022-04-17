# Installation

create a database: master_thesis
```php
composer install
```
```php
cp .env.example .env
```
```php
php artisan migrate:fresh --seed
```
```php
php artisan key:generate
```
```php
php artisan serve
```

# Usage

To test the GraphQL API use graphql-playground

Local Link: http://127.0.0.1:8000/graphql-playground

GraphQL schema is in root folder graphql>schema.graphql

# Basic example query 
```graphql
{
  klientet{
    id
    emri
    mbiemri
  }
}
```
# Basic example mutation 
```graphql
mutation {
  createPagesat(
    data_pageses: "2022-01-05 11:51:31"
    shuma: 50
    klientet_id: 1
  ) {
    id
    data_pageses
    shuma
    klientet_id
  }
}
```
