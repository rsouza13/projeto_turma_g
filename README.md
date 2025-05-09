# Mini Projeto - CRUD de Alunos

Este é um projeto exemplo criado para demonstrar a utilização de tecnologias como PHP, HTML, CSS, JavaScript e MySQL, com foco na construção de um sistema simples de CRUD (Criar, Ler, Atualizar, Deletar) para gerenciar informações de alunos. O projeto foi estruturado utilizando o padrão de arquitetura **MVC** (Model-View-Controller) para facilitar o aprendizado e a organização do código.

## Tecnologias Utilizadas

- **PHP**: Linguagem de programação utilizada para a parte lógica do sistema e interação com o banco de dados.
- **HTML**: Utilizado para estruturar as páginas web.
- **CSS**: Para estilizar a interface e melhorar a aparência do sistema.
- **JavaScript**: Para interatividade no front-end.
- **MySQL**: Banco de dados utilizado para armazenar as informações dos alunos.
- **XAMPP**: Ambiente de desenvolvimento local para executar o servidor web e o banco de dados MySQL.

## Funcionalidades

- **Cadastrar Aluno**: Formulário para adicionar novos alunos no sistema.
- **Listar Alunos**: Exibe uma lista de todos os alunos cadastrados.
- **Editar Aluno**: Permite editar os dados de um aluno existente.
- **Excluir Aluno**: Remove um aluno do sistema.

## Estrutura do Projeto

A estrutura do projeto segue o padrão **MVC**, com os seguintes diretórios:


## Pré-requisitos

Antes de começar, certifique-se de ter os seguintes programas instalados em sua máquina:

- [XAMPP](https://www.apachefriends.org/pt_br/index.html) (para rodar o Apache e o MySQL localmente)
- [PHP](https://www.php.net/downloads) (se não for instalado automaticamente com o XAMPP)
- [MySQL](https://www.mysql.com/) (gerenciado pelo phpMyAdmin no XAMPP)

## Como Instalar

1. **Clonando o Repositório**

   Para começar, clone o repositório do projeto ou baixe o arquivo ZIP diretamente do GitHub:



2. **Configurar o XAMPP**

- Coloque a pasta do projeto na pasta `htdocs` do XAMPP:
  - Em sistemas Windows: `C:\xampp\htdocs\projeto_turma_g\`


3. **Importar o Banco de Dados**

- Abra o [phpMyAdmin](http://localhost/phpmyadmin) no seu navegador.
- Crie um novo banco de dados com o nome `bd_turma_g`.
- Importe o arquivo SQL do banco de dados que está na pasta `database` dentro do projeto (ou forneça o link para o arquivo SQL no repositório).

Ou, se não houver um arquivo SQL, você pode criar a tabela manualmente no phpMyAdmin com os campos necessários para armazenar as informações dos alunos (nome, email, etc).

4. **Configurar a Conexão com o Banco de Dados**

- Acesse o arquivo `conexao.php` e configure os dados de conexão com o banco de dados MySQL:
  ```php
  <?php
  define('DB_HOST', 'localhost');
  define('DB_NAME', 'bd_turma_g');
  define('DB_USER', 'root');
  define('DB_PASS', '');
  ?>
  ```

5. **Rodando o Projeto**

- Após configurar o XAMPP e o banco de dados, inicie o Apache e o MySQL através do painel de controle do XAMPP.
- Acesse o projeto no navegador digitando: [http://localhost/projeto_turma_g/](http://localhost/projeto_turma_g/)

