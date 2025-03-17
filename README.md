# Projeto de Notícias com API Currents

Este projeto tem como objetivo principal demonstrar o consumo de uma API pública para exibir notícias dinâmicas em um site. Nele, utilizei a **API Currents** para obter as últimas notícias e criei uma interface moderna e responsiva utilizando **Laravel** como framework backend e **Tailwind CSS** para o design.

## Descrição do Projeto

O site de notícias foi desenvolvido para mostrar como integrar e consumir dados de uma API pública, neste caso a **API Currents**. O projeto consiste em:

- **Backend:** Desenvolvido em Laravel, gerenciando as requisições à API e processando os dados para serem exibidos.
- **Frontend:** Utiliza Tailwind CSS para um design moderno e responsivo, garantindo boa usabilidade em diferentes dispositivos.

O principal desafio deste projeto foi integrar de forma eficiente a API Currents, tratar os dados recebidos e exibi-los de forma organizada e agradável para o usuário.

## Funcionalidades

- **Exibição de Notícias:** Consumo da API Currents para listar notícias atualizadas.
- **Busca e Filtros:** Permite ao usuário buscar notícias por palavras-chave e aplicar filtros de categorias (quando suportado pela API).
- **Interface Responsiva:** Design que se adapta a diferentes tamanhos de tela.
- **Cache de Dados:** Implementação de cache (opcional) para reduzir requisições desnecessárias à API e melhorar a performance.

## Tecnologias Utilizadas

- **Laravel:** Framework PHP para o desenvolvimento do backend.
- **Tailwind CSS:** Biblioteca de utilitários CSS para a criação de interfaces modernas e responsivas.
- **API Currents:** Fonte de dados para as notícias.
- **Composer:** Gerenciador de dependências PHP.
- **NPM/Yarn:** Gerenciador de pacotes para as dependências do frontend (se necessário).

## Passos para Configuração

### Clone o Repositório

```bash
git clone https://github.com/matheusilveiraw/the-news.git
```

### Instale as Dependências PHP

```bash
composer install
```

### Instale as Dependências JavaScript

```bash
npm install
```

### Configure o Ambiente

1. Renomeie o arquivo `.env.example` para `.env`:
   
   ```bash
   cp .env.example .env
   ```

2. Gere uma chave de aplicação:
   
   ```bash
   php artisan key:generate
   ```

3. Edite o arquivo `.env` e configure as seguintes variáveis:

   #### Configurações do Banco de Dados:
   
   ```ini
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=seu_banco_de_dados
   DB_USERNAME=seu_usuario
   DB_PASSWORD=sua_senha
   ```

   #### Chave da API Currents:
   
   ```ini
   CURRENTS_API_KEY=sua_chave_da_api
   ```

   > **Nota**: Você pode obter uma chave de API gratuita registrando-se no site da [Currents](https://currentsapi.services/).

### Compile os Ativos Frontend

```bash
npm run dev
```

> **Nota**: Para compilar os ativos para produção, utilize `npm run prod`.

### Execute as Migrações do Banco de Dados

```bash
php artisan migrate
```

### Inicie o Servidor de Desenvolvimento

```bash
php artisan serve
```

A aplicação estará disponível em `http://localhost:8000`. 

