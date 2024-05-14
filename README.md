# Filmin Backend hiring example project

2 example projects: one using [Laravel](https://laravel.com) and another using [Symfony](https://symfony.com).
The purpose of this project is to use this code as an example to have a technical debate.

## Enpoint create user
This project contains a single endpoint that: given an E-mail and a password, creates a new Filmin user.

`POST /users`

```json
{
  "email": "string|required",
  "password": "string|required"
}
```





