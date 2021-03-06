# Descrição do projeto

Conforme instruções, foram utilizadas as seguintes ferramentas:

* PHP
* Micro framework Silex
* Base de dados MySQL

Utilizei o pacote `firebase/php-jwt` para autenticação por *tokens* (JWT) e o pacote `illuminate/database` (Eloquent) para a construção dos *data models*.

O recurso escolhido para a construção da API foi `wines` (vinhos).
Incluí os seguintes campos, além do `id` e das datas de criação e atualização (`created_at` e `updated_at`).

* `name`(nome do vinho)
* `color` (colorção do vinho - tinto, rosado, branco)
* `varietal` (variedade de uva predominante)
* `harvest` (ano da colheita)
* `region` (região da produção - acrescida do país)

## Banco de dados

Para a criação da base de dados, há um script na pasta `database` do projeto. As configurações de usuário para conexão, caso haja necessidade de alteração, encontram-se do arquivo `production.php`, da pasta `config` do projeto.

## Autenticação

Para a obtenção do *token* JWT, acessar o endpoint `POST /api/v1/login`, fornecendo (via JSON), os dados `username` (com valor `teste`) e `password` (com valor `teste`). Estas credenciais de usuário estão fixas no *controller* de autenticação (não foi criada tabela de usuários devido a limitação de tempo para a implementação).
O *token* deve ser fornecido no *header* `Authorization` de cada requisição efetuada, precedido do prefixo `Bearer ` (importante deixar 1 espaço em branco entre o prefixo e o *token*).
 
# ENDPOINTS da API

### Lista todos os recursos

```
GET /api/v1/wines
```
 
### Criar recurso

```
POST /api/v1/wines
```
Body
```
{
    "name":"", 
    "color": "", 
    "varietal": "", 
    "harvest": "", 
    "region": ""
}
```
 
### Recuperar recurso por id

```
GET /api/v1/wines/{id}
```
   
### Editar um recurso por id

```
PUT /api/v1/wines/{id}
```
Body
```
{
    "name":"", 
    "color": "", 
    "varietal": "", 
    "harvest": "", 
    "region": ""
}
```
  
### Excluir um recurso por id

```
DELETE /api/v1/wines/{id}
```  
 Resposta esperada
```
{ "message":"Wine successful deleted" }
```

# A tarefa
Sua tarefa consiste em desenvolver uma API RESTful para manipular um determinado recurso. Deverá ser utilizado o framework Silex.

# Requisitos
A escolha do recurso deverá ser feita pelo desenvolvedor, atendendo apenas os requisitos mínimos abaixo:

* Deverá conter um ID
* Deverá conter pelo menos quatro propriedades (exemplos: nome, email, etc.)
* Deverá conter campos que armazenem as datas de criação e alteração do recurso

## A API deverá atender às seguintes exigências:

* Listagem de todos os recursos
* Busca de um recurso pelo ID
* Criação de um novo recurso
* Alteração de um recurso existente
* Exclusão de um recurso
* Aceitar e retornar apenas JSON
* Deverá possuir algum método de autenticação para utilização de seus endpoints

# Ferramentas
* PHP
* Banco de dados MySQL
* Framework Silex

# Padrões de nomenclatura
1. Código fonte, nome do banco de dados, tabelas e campos devem estar em inglês
