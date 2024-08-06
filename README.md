# Guia

## Processo a partir do github
1 - Clone o repositório: `git clone git@github.com:MomoiroAkachan/eform.git`  
2 - Mude para a branch de desenvolvimento: `git checkout develop`  

## Processo a partir do Sistema operacional
1 - Fazer uma cópia do arquivo `.env.example` como `.env` (o arquivo de exemplo contém o modelo dos dados padrão): `cp .env.example .env`  

2 - Alterar as variáveis do site no arquivo `.env`:  
de `APP_ENV=local` para `APP_ENV=production`  
de `APP_DEBUG=true` para `APP_DEBUG=false`

## Executar a instalação do composer e PHP
1 - Link: [SITE DO COMPOSER](https://getcomposer.org/download/)

2 - Instala as dependencias do composer, para dev: `composer install`

## Processo a partir do sail
1 - Iniciar o container DOCKER usando o sail:  
    `sail up -d --build`

2 - Gera uma nova chave de API:  
    `sail artisan key:generate`

3 - Roda os migrations do banco de dados (vazio por enquanto):  
    `sail artisan migrate`
    
4 - Instala os pacotes node e Constrói os arquivos de estilos e js:  
    `sail npm install`
    
5 - Compila os estilos com o vite
    `sail npm run build`

6 - Instalar pacotes provenientes do npm/node (para produção):  
    `sail npm install --production`

7 - Instalar pacotes provenientes do composer (para produção):  
    `sail composer install --no-dev --optimize-autoloader`

8 - **SEJA FELIZ**
