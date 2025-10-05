# Executar exemplo-pdo

```bash
cd exemplo-pdo
php -S localhost:3000
```

# Executar exemplo-laravel

```bash
cd exemplo-laravel
php artisan serve
```

### Comandos usados para criar o exemplo

- Criar o projeto laravel
```bash
composer create-project laravel/laravel exemplo-laravel
```

- Criar migration e model Usuario (arquivo *exemplo-laravel/database/migrations/2025_10_05_181810_create_usuarios_table.php)
```bash
php artisan make:model Usuario -m
```

- Criar seeder do Usuario (arquivo exemplo-laravel/database/seeders/UsuarioSeeder.php)
```bash
php artisan make:seeder UsuarioSeeder
```

- Executar seed 
```bash
php artisan migrate --seed
```

### Arquivos modificados/criados no Laravel

- **exemplo-laravel/database/migrations/2025_10_05_181810_create_usuarios_table.php**
- **exemplo-laravel/database/seeders/UsuarioSeeder.php**
- **exemplo-laravel/routes/web.php**