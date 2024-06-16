# 📝 Teste Motoca Systems - Desenvolvedor Back-End

## 📄 Descrição

Bem-vindo ao teste de contratação para a vaga de Desenvolvedor Back-End. Neste teste, você terá a oportunidade de demonstrar suas habilidades em **PHP** com o framework **Laravel** e **PostgreSQL** ao criar uma API CRUD baseada em um conjunto de requisitos.

## 📋 Instruções

1. **Clone** este repositório para o seu ambiente local.
2. Crie uma aplicação backend utilizando **Laravel**, seguindo as especificações fornecidas.
3. Implemente as funcionalidades de **Criar**, **Ler**, **Atualizar** e **Deletar** para as entidades especificadas.
4. Configure a aplicação para utilizar o banco de dados **PostgreSQL**.
5. Utilize **Postman** para testar e documentar as suas APIs.
6. Após completar o teste, crie um repositório no seu GitHub com o nome **`teste-motocaSystems-backEnd`** e suba o seu código para lá.
7. Envie o link do seu repositório para nós (thalles@motoca.com.br / welliton@motoca.com.br).

## 📚 Requisitos

- Utilize **Laravel** para construir a aplicação.
- Utilize **PostgreSQL** como banco de dados.
- Implemente as operações de CRUD (Criar, Ler, Atualizar, Deletar) para duas entidades: "Produtos" e "Categorias".
- Certifique-se de que a API esteja bem documentada utilizando o **Postman**.
- A aplicação deve seguir boas práticas de desenvolvimento, incluindo a utilização de migrations, seeders, controllers, models e rotas organizadas.

## 🛠️ Funcionalidades

A aplicação deve incluir as seguintes operações CRUD para as entidades "Produtos" e "Categorias":

### Produtos

1. **Criar Produto:**
   - Rota: `POST /api/produtos`
   - Payload: `{ "nome": "Nome do Produto", "descricao": "Descrição do Produto", "preco": 100.00, "categoria_id": 1 }`
   
2. **Ler Produtos:**
   - Rota: `GET /api/produtos`
   - Retorna uma lista de todos os produtos.
   
3. **Ler Produto por ID:**
   - Rota: `GET /api/produtos/{id}`
   - Retorna os detalhes de um produto específico.
   
4. **Atualizar Produto:**
   - Rota: `PUT /api/produtos/{id}`
   - Payload: `{ "nome": "Nome do Produto", "descricao": "Descrição do Produto", "preco": 150.00, "categoria_id": 2 }`
   
5. **Deletar Produto:**
   - Rota: `DELETE /api/produtos/{id}`
   - Deleta um produto específico.

### Categorias

1. **Criar Categoria:**
   - Rota: `POST /api/categorias`
   - Payload: `{ "nome": "Nome da Categoria" }`
   
2. **Ler Categorias:**
   - Rota: `GET /api/categorias`
   - Retorna uma lista de todas as categorias.
   
3. **Ler Categoria por ID:**
   - Rota: `GET /api/categorias/{id}`
   - Retorna os detalhes de uma categoria específica.
   
4. **Atualizar Categoria:**
   - Rota: `PUT /api/categorias/{id}`
   - Payload: `{ "nome": "Nome da Categoria Atualizada" }`
   
5. **Deletar Categoria:**
   - Rota: `DELETE /api/categorias/{id}`
   - Deleta uma categoria específica.

### Relacionamento Produto-Categoria

- Cada produto pertence a uma categoria (`categoria_id` como chave estrangeira na tabela `produtos`).
- Cada categoria pode ter vários produtos.

## ⏰ Prazo

Você tem até **17/06/2024 às 08:00 horas** para completar este teste a partir do momento em que o recebe. Será levado em consideração a qualidade e o tempo de entrega do teste.

## 📦 Entrega

1. Após completar o teste, crie um repositório no seu GitHub com o nome **`teste-motocaSystems-backEnd`**.
2. Suba o código da aplicação para este repositório.
3. Inclua qualquer documentação adicional que julgar necessária.
4. Certifique-se de que o código está bem comentado e fácil de entender.
5. Envie o link do repositório para nós (thalles@motoca.com.br / welliton@motoca.com.br).

## 📞 Contato

Se você tiver qualquer dúvida durante o teste, sinta-se à vontade para entrar em contato conosco.

Boa sorte! 🍀

## =========================================== PARA MAIS INFORMAÇÕES SOBRE A DOCUMENTAÇAO ======================================================


                                                Documentação do projeto de desenvolvimento
                                                         teste-motocaSystems-backEnd


1º Levando em consideração as boas práticas de programação, resolvi não versionar para o GitHub alguns arquivos por questão de segurança, pois alguns arquivos contem informações sensíveis como, nome do banco, usuário, senhas e arquivos de configuração do projeto, abaixo estão listado os arquivos incluídos no gitignore, um arquivo do Laravel onde eu incluo quais os arquivos que não será versionado no repositório.

/node_modules
/public/hot
/public/storage
/storage/*.key
/vendor
.env
.env.backup
.phpunit.result.cache
docker-compose.override.yml
Homestead.json
Homestead.yaml
npm-debug.log
yarn-error.log
/.idea
/.vscode

3º O comando abaixo foi utilizado para subir o contêiner do banco PostgreSQL utilizado o docker para administrar os contêineres da aplicação, lembrando que para rodar o docker, é preciso ter ele instalado na maquina.

docker run -p 5432:5432 --name PostgreSQL -e POSTGRES_PASSWORD=BANCO_teste123 -e POSTGRES_USER=WALLECKS -d postgres

4º Ferramentas utilizadas para o desenvolvimento do projeto.

* Docker version 20.10 gerenciar os contêiner
* Banco de dados PostgreSQL para armazenar dos formulários
* Framework Laravel v11.10 estrutura do projeto
* GitHub versionamento
* Dbeaver-ce 23.2.2 administrar o banco de dados
* Laradock ambiente de desenvolvimento
* Postman
##