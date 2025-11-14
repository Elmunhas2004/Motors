# Motors
Trabalho Laravel/Breeze

## Requisitos para sua execução.

  1. Instalaão do PHP 
  2. Instalação do Composer
    * https://www.php.net/downloads.php
  3. Instalação do Composer
    * https://getcomposer.org/download/
  4. Instalação do Node.js
    * https://nodejs.org/pt/download
   <img width="1333" height="685" alt="image" src="https://github.com/user-attachments/assets/dca53849-247f-4841-bd1d-0556c3b5ccdb" />

## Realizando criação do servidor.

  1. Abra o terminal no local que deseja que o projeto fique armazena e execute os seguites comando já ordenados:
    ### Criação do projeto Laravel
        * **composer create-project laravel/laravel nome-do-projeto**
        * **cd nome-do-projeto**
    ### Instalação da extensão Laravel/Breeze
        * **composer require laravel/breeze --dev**
        * **php artisan breeze:install blade**
    ### Instalação do Node
        * **npm install**

  2. Execução do servidor:
     ### Deixe 2 terminal executando os seguintes comando:
        * **php artisan serve**
        * **npm run dev**
    
  3. Substituir as seguintes Pastas e Arquivos para para que o site seja executado:
      * App
      * Resouces
      * Database
      * Public
      * .env
