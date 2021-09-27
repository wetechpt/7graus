<!--
*** Thanks for checking out the Best-README-Template. If you have a suggestion
*** that would make this better, please fork the repo and create a pull request
*** or simply open an issue with the tag "enhancement".
*** Thanks again! Now go create something AMAZING! :D
-->

<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary>Navegação</summary>
  <ol>
    <li><a href="#recursos">Utilização</a></li>
    <li><a href="#requisitos">Requisitos</a></li>
    <li><a href="#instalacao">Instaçação</a></li>
    <li><a href="#utilizacaoetestes">Utilização e Testes</a></li>
    <li><a href="#Explicacoes">Explicações</a></li>
  </ol>
</details>



### Recursos

Estes foram os recursos utilizados para desenvolver este projeto:
* [PHP 8.0.10](https://getbootstrap.com)
* [PHPUnit 9](https://jquery.com)


### Requisitos

Lista dos recursos pré-requeridos para inicializar o projeto.
* [composer](https://getcomposer.org/download/)
* [php 7^](https://www.php.net/manual/en/install.windows.php)

### Instalacao

1. Clone o repo
   ```sh
   git clone https://github.com/wetechpt/7graus
   ```
2. Instale as dependências do composer
   ```sh
   composer install
   ```

   <!-- USAGE EXAMPLES -->
## Utilizacao e Testes

1. <b>Uilização</b>: Para Utilizar o projeto, na raíz, encontrará um ficheiro chamado index.php, com o servidor PHP a rodar, abra-o e terá alguns exemplos de utilizações das classes Circle e Rectangle.

2. <b>Testes:</b> Para os testes, terá de utilizar o comando na raíz do projeto:
```sh
   ./vendor/bin/phpunit tests/CalcTest.php
   ```
Assim conseguirá visualizar o resultado dos testes encontrados no ficheiro "/testes/CalcTest.php". Se quiser acrescentar mais algum teste, basta inserir um novo metodo de testes dentro da classe do mesmo ficheiro.

## Explicacoes
1. Utilizei o PHP unit para os testes, pela facilidade e praticidade de construção e execução de testes que a ferramenta apresenta.
2. Utilizei o PHP PSR-4 para fazer a importação das classes pela praticidade e autonomia do mesmo ao implementar as classes.
3. Para dar a possibilidade do cliente inserir um ID diferente por Instância, criei uma "Factory"(design pattern), fazendo injeção da dependência no construct da classe base (Shape). Pois assim, permite o escalonamento de Id's com total autonomia, sem a necessidade de intervir nas classes principais(Shape, Circle e Rectangle).
4. Criei uma interface para o Shape, fazendo assim um template de regras para qualquer outra Classe filha que for criada. Garantindo assim que qualquer outro programador que possa vir a implementar outro módulo(forma) no projeto, tenha um feedback de métodos base que tem de utilizar.