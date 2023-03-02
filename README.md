# Проєкт MyBookshelf API

 Цей проєкт є API для додавання та перегляду книг, а також для створення списку улюблених книг.

# Використані технології

- PHP 8.1
- Laravel/Lumen Framework
- PostgreSQL
- Composer

# Інструкція по встановленню
Перед встановленням проєкту переконайтеся, що на вашому комп'ютері встановлено PHP 8+ та PostgreSQL.
---

1. Клонуйте репозиторій за допомогою команди: 
    <br> ``` git clone https://github.com/your-repo.git  ``` 
2. Встановіть необхідні залежності за допомогою команди: ``` composer install ``` 
3. У файлі .env вкажіть налаштування для бази даних;
4. Запустіть міграції, щоб створити необхідні таблиці в базі даних:
    <br> ```php artisan migrate```
5. Після успішної установки ви можете запустити сервер:
    <br> ``` php -S localhost:8000 -t public ``` 
6. Після цього API буде доступне за адресою: http://localhost:8000.

*Щоб використовувати це API, вам необхідно буде зареєструвати користувача, а потім авторизуватися за допомогою електронної пошти та пароля.*
