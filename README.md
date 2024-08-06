# Guia para o deploy
## Processo a partir do github

## Processo a partir do Sistema operacional
1 - Fazer uma cópia do arquivo '.env.example' como '.env' (o arquivo de exemplo contém o modelo dos dados padrão):
    cp .env.example .env

2 - Alterar as variáveis de deploy do site:
    de 'APP_ENV=local' para 'APP_ENV=production'
    de 'APP_DEBUG=true' para 'APP_DEBUG=false'

## Processo a partir do sail
1 - Iniciar o container DOCKER usando o sail:
    sail up -d --build

2 - Gera uma nova chave de API:
    sail artisan key:generate

3 - Roda os migrations do banco de dados (vazio por enquanto)
    sail artisan migrate
    
4 - Instalar pacotes provenientes do composer (para produção):
    sail composer install --no-dev --optimize-autoloader

5 - Instalar pacotes provenientes do npm/node (para produção):
    sail npm install --production

6 - Constrói os arquivos de estilos e js
    sail npm run build

7 - SEJA FELIZ