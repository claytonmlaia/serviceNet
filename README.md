
## Para utilização, siga as instruções abaixo:

- Baixe todo o conteúdo.
- Configure o arquivo .env com os dados de acesso ao seu banco de dados.
- Configura o aquivo .env, nos itens: "FACEBOOK_CLIENT_ID e FACEBOOK_CLIENT_SECRET", com o app do "https://developers.facebook.com" para que a aplicação aceite login e cadastro de usuario com contas do Facebook.
- Execute o comando: "php artisan migrate", dentro do diretorio do projeto, em seu terminal para que as migrations criem as tabelas no banco de dados indicado no arquivo .env.
- Certifique-se de ter pelo menos versão 7.4 do PHP instalado juntamente com banco de dados MySQL.
- Execute o comando (php artisan serve) via terminal dentro do diretorio raíz para que o mesmo libere url de acesso do servidor (http://localhost:8000).

Obs.: Todo o conteúdo foi criado utilizando o Laravel Framework v8.6 juntamente com banco de dados relacional MySQL, e pode ser baixado, editado sem qualquer restrição, fique a vontade para utilizar e estudar.