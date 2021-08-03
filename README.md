## Ceisc 
Desafio da CEISC 

## Instalação
O projeto precisa de um ambiente com:

**PHP >= 7.2** <br>
**Composer** <br>
**GIT** <br>
**MySQL** <br>

Etapas para iniciar:

1 - Clone o projeto:
```
git clone https://github.com/ggtrevisan/ceiscchallenge ceiscchallenge
```
2 - Renomeie ".env.example" para ".env" e preencha os dados de conexão de sua base de dados local (DB_HOST, DB_PORT, DB_USERNAME, DB_PASSWORD)

3 - Crie uma database local com o nome 'challenge'

4 - Rode os script para configuração incial:
```
composer install
```
5 - Rode os script para criar as tabelas:
```
php artisan migrate
php artisan db:seed
```

6 - Páginas
- Usuários 
   - **Cadastro funcionando perfeitamente (Usar de base para as novas telas)**
- Aulas 
   - Já temos uma migration que criou a tabela **aulas** e o MENU e listagem estão OK. 
   - Campos: **id, nome, descricao, disponivel**
   - Aqui precisamos criar a rotina de CADASTRO (CRIAR, ATUALIZAR E DELETAR) o registro. (Idem Usuários) 
-  Cursos
   - Aqui será necessário criar toda a rotina
     - Migration (Campos: id, nome, descricao ativo)
   - Controller (app/http/Controllers)
   - Views (resources/cadastros)
   - Rotas (web.php)    
   - Com isso vamos ter o cadastro identico aos anteriores
- Dashboard (home.blade.php)
    - Adicionar o contador (Quantidade de registros) de Aulas e Cursos, igual temos de Usuário.


Cada página contém instruções do que deve contemplar. OBS: rotas, controllers e views podem ser alterados a vontade

## Adicionar o debugbar ao projeto.
-   [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar).


#PLUS
- Cursos
  - Adicionar uma foto
  - Adicionar as aulas que preetence ao curso
