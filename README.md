# Guia

## Pré requisitos
1 - Instalar o php, suas extensões e o git:  
`sudo apt install -y php zip unzip php-dom php-ext php-xml git`

2 - Instalar o composer:  
[SITE DO COMPOSER](https://getcomposer.org/download/)

3 - Instala as dependencias do composer, para dev:  
`composer install --dev`

## Processo a partir do github
1 - Clone o repositório:  
    `git clone https://github.com/MomoiroAkachan/eform.git` ou `git clone git@github.com:MomoiroAkachan/eform.git`  
    
2 - Avance para a pasta que acabou de clonar:  
    `cd eform`  
    
3 - Mude para a branch de desenvolvimento:  
    `git checkout develop`  

## Processo a partir do Sistema operacional
1 - Fazer uma cópia do arquivo `.env.example` como `.env` (o arquivo de exemplo contém o modelo dos dados padrão):  
`cp .env.example .env`  

2 - Alterar as variáveis do site no arquivo `.env`:  
de `APP_ENV=local` para `APP_ENV=production`  
de `APP_DEBUG=true` para `APP_DEBUG=false`

## Processo a partir do sail
1 - Iniciar o container DOCKER usando o sail:  
    `./vendor/bin/sail up -d --build`

2 - Gera uma nova chave de API:  
    `./vendor/bin/sail artisan key:generate`

3 - Roda os migrations do banco de dados (vazio por enquanto):  
    `./vendor/bin/sail artisan migrate`  
    Selecione a opção: 'yes'
    
4 - Instala os pacotes node e Constrói os arquivos de estilos e js:  
    `./vendor/bin/sail npm install`
    
5 - Compila os estilos com o vite  
    `./vendor/bin/sail npm run build`

6 - Instalar pacotes provenientes do npm/node (para produção):  
    `./vendor/bin/sail npm install --production`

7 - Instalar pacotes provenientes do composer (para produção):  
    `./vendor/bin/sail composer install --no-dev --optimize-autoloader`

8 - **SEJA FELIZ**

## Instala o Sail:  
1 - `php artisan sail:install`  
2 - `php artisan sail:publish`

## **Resumo Dos Comandos**
```
# INSTALAR DEPS
git clone https://github.com/MomoiroAkachan/eform.git
cd eform
git checkout develop
cp .env.example .env

# ALTERAR OS NOMES DAS VARIAVEIS

sail up -d --build
sail artisan key:generate
sail artisan migrate
# Selecione 'YES'
sail npm install
sail npm run build
sail npm install --production
sail composer install --no-dev --optimize-autoloader
```
