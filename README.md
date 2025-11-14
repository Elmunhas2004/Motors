# Motors
Trabalho Laravel/Breeze de um site para venda de carros

## Requisitos para sua execução.

  1. Instalaão do PHP 
  2. Instalação do Composer
    * [php](https://www.php.net/downloads.php)
     
  4. Instalação do Composer
    * [composer](https://getcomposer.org/download/)
     
  5. Instalação do Node.js
    * [node](https://nodejs.org/pt/download)
   <img width="1333" height="685" alt="image" src="https://github.com/user-attachments/assets/dca53849-247f-4841-bd1d-0556c3b5ccdb" />

## Realizando criação do servidor.

  1. Abra o terminal no local que deseja que o projeto fique armazena e execute os seguites comando já ordenados:
      - Criação do projeto Laravel
        * `composer create-project laravel/laravel nome-do-projeto`
        * `cd nome-do-projeto`
        
      - Instalação da extensão Laravel/Breeze
        * `composer require laravel/breeze --dev`
        * `php artisan breeze:install blade`
        
      - Instalação do Node
        * `npm install`

  3. Execução do servidor:
     *Execute o comando para subir e carregar o banco com os dados para testar
       _Se preferir, executar os INSERTs do arquivo insert_
       *`php artisan migrate --seed`
     
     *Deixe 2 terminal executando os seguintes comando:*
     
        * `php artisan serve`
        * `npm run dev`
    
  5. Substituir as seguintes Pastas e Arquivos para para que o site seja executado:
     
      * App
      * Resouces
      * Routes
      * Database
      * Public
      * .env

    
## Fotos do Site funcioando:
*menu
<img width="1333" height="685" alt="image" src="fotos/IMG-20251114-WA0003.jpg" />
<img width="1333" height="685" alt="image" src="fotos/IMG-20251114-WA0004.jpg" />
<img width="1333" height="685" alt="image" src="fotos/IMG-20251114-WA0005.jpg" />
<img width="1333" height="685" alt="image" src="fotos/IMG-20251114-WA0006.jpg" />


*Tela de compra de um produto
<img width="1333" height="685" alt="image" src="fotos/IMG-20251114-WA0007.jpg" />


*Filtro por marca
<img width="1333" height="685" alt="image" src="fotos/IMG-20251114-WA0008.jpg" />


*Tela de Login
<img width="1333" height="685" alt="image" src="fotos/IMG-20251114-WA0009.jpg" />


*Tela de enviou de e-mail para recuperação de senha
<img width="1333" height="685" alt="image" src="fotos/IMG-20251114-WA00010.jpg" />


*Tela de cadastro
<img width="1333" height="685" alt="image" src="fotos/IMG-20251114-WA00011.jpg" />


*Tela inicial de administrador
<img width="1333" height="685" alt="image" src="fotos/IMG-20251114-WA00012.jpg" />


*Tela de cadastro de veiculo novo
<img width="1333" height="685" alt="image" src="fotos/IMG-20251114-WA00013.jpg" />


*Tela de Grid/lista de todos os veiculos cadastrados
<img width="1333" height="685" alt="image" src="fotos/IMG-20251114-WA00014.jpg" />


*Confirmação de exclusão de Veiculo
<img width="1333" height="685" alt="image" src="fotos/IMG-20251114-WA00015.jpg" />


*Tela de Edição de veiculo cadastrado
<img width="1333" height="685" alt="image" src="fotos/IMG-20251114-WA00016.jpg" />


*Opções de Logoff e acesso da edição de perfil
<img width="1333" height="685" alt="image" src="fotos/IMG-20251114-WA00017.jpg" />


*Tela de Edição de perfil
<img width="1333" height="685" alt="image" src="fotos/IMG-20251114-WA00018.jpg" />
<img width="1333" height="685" alt="image" src="fotos/IMG-20251114-WA00019.jpg" />


*E-mail de redefinição de senha chegando no usuario
<img width="1333" height="685" alt="image" src="fotos/IMG-20251114-WA00020.jpg" />


*Tela de redefinição de senha
<img width="1333" height="685" alt="image" src="fotos/IMG-20251114-WA00021.jpg" />


*Confirmação de que a senha foi redefinida
<img width="1333" height="685" alt="image" src="fotos/IMG-20251114-WA00022.jpg" />


   
