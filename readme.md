## Api Laravel

Este projeto API feita com laravel esta sendo criada para cadastro de usuário de uma empresa, embora ela não esteje totalmente pronta ainda, já é possível cadastrar, atualizar, excluir, mostrar.


## Para testar
Crie um banco no MySql
- CREATE DATABASE marry_perry
- CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

## Laravel
- Baixe o projeto dentro do servidor laravel Ex. laragon
- Rode o comando "php artisan serve" para rodar o servidor

## Postman
Para tester a API use os endpoints abaixo
Endpoints
- name
- email
- image
- password



