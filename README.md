<div align="center">
  <img src="/public/images/Logotipo-d.png" width="150" />
  <h1>BemEstar</h1>
</div>

# Sobre

(Projeto Acadêmico) Feito com o intuito de aprendizado durante o curso tecnico TI. Uma onepage para uma clinica medica, com o conteudo principal na pagina home, contendo uma area administrativa e uma area para post. cadastro somente de administradores e moderadores no site.

<div align="center">
  <img src="/public/images/bemestar/layoutHome.png" width="700" />  
</div>
<div align="center">
  <img src="/public/images/bemestar/layout2.png" width="350" />  
  <img src="/public/images/bemestar/layout3.png" width="350" /> 
</div>
<div align="center">
  <img src="/public/images/bemestar/layout4.png" width="350" /> 
  <img src="/public/images/bemestar/layout5.png" width="350" />  
</div>
<div align="center">
  <img src="/public/images/bemestar/layout6.png" width="350" /> 
  <img src="/public/images/bemestar/layout7.png" width="350" />  
</div>
<div align="center">
  <img src="/public/images/bemestar/layout8.png" width="350" /> 
  <img src="/public/images/bemestar/layout9.png" width="350" />  
</div>

<br>
<br>

# 🚀 Tecnologias

- [PHP](https://www.php.net/docs.php)
- [JAVASCRIPT](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript)
- [BOOTSTRAP](https://getbootstrap.com/)



## 💻 Iniciando o projeto

### Pré-requisitos

- [XAMPP](https://www.apachefriends.org/pt_br/index.html)
- [APACHE]() * Vem com o xampp
- [MYSQL]() * Vem com o xampp

### Instalando e rodando o projeto
_Alterar arquivo de conexaõa com o banco_
```bash
Exemple:
<?php
    //parametros paar conectar com o banco
    $nome_servidor = "";
    $nome_usuario = "";
    $senha_usuario = "";
    $banco_dados = "";

    $conexao = mysqli_connect($nome_servidor, $nome_usuario, $senha_usuario, $banco_dados);

    //verificar conexao com o  banco de dados

    if(mysqli_connect_errno()){
        printf("Falha na conexão com o banco de dados: %s\n", mysqli_connect_error());
        exit();
    }

?>
```
_Ir ate a pasta htdocs do xampp_
```bash
cd c:/xampp/htdocs/
├── $ git clone https://github.com/ViniciuCristian21/webClinica.git

```
_Ir ate o browser e digitar o nome da pasta para acessar o site_
```bash
http://localhost/bemestar/
```
<br>

<hr>
<div>
    <h3>Desenvolvido por:</h3>
</div>
<div align="center">
  <sub><a href="https://github.com/ViniciuCristian21">VINICIU CRISTIAN DA SILVA</a></sub><br>
</div>
<hr>

