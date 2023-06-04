# crud laravel 8 + mysql + bootstrap em apenas 10 passos
Um exemplo demonstrando as 4 operações básicas para a manipulação de registros em um banco de dados mysql através do laravel / php com uso do orm eloquent

obs:
esse exemplo é bem básico e não necessariamente segue as melhores práticas de programação

## 10 passos apenas
(importante lembrar que é necessário estar com o laravel já instalado, veja como na documentação oficial do laravel, você irá precisar instalar o composer e o node js)

1. instalar o laravel 8:
composer create-project --prefer-dist laravel/laravel loja

2. configurar o arquivo .env para acessar ao banco de dados:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root

3. criar a migration:
php artisan make:migration create_products_table --create=products

4. definir os campos na tabela products (vide o respectivo arquivo presente nesse repositório):
$table->string('name');
$table->text('detail');

5. realizar a migrate para criar a tabela:
php artisan migrate

6. criar o controller e a model:
php artisan make:controller ProductController --resource --model=Product

7. atualizar os arquivos app/Http/Controllers/ProductController.php e app/Models/Product.php com o conteúdo dos respectivos arquivos presentes nesse repositório

8. configurar o routes/web.php (rotas) (inserir as linhas abaixo):
use App\Http\Controllers\ProductController; 
Route::resource('products', ProductController::class);

9. criar as views (pasta resources/views/products) com os respectivos arquivos presentes nesse repositório
- layout.blade.php
- index.blade.php
- create.blade.php
- edit.blade.php
- show.blade.php

10. rodar o projeto:
php artisan serve


## referências

### laravel 8: 
https://laravel.com/docs/8.x/releases

### php: 
https://www.php.net/

### bootstrap 5: 
https://getbootstrap.com/docs/5.2/getting-started/introduction/

### mysql: 
https://www.mysql.com/downloads/

### composer: 
https://getcomposer.org/

### node js: 
https://nodejs.org/en


