
## Para utilização, siga as instruções abaixo:

- Baixe todo o conteúdo, incluído a pasta BD.
- Configure o arquivo .env com os dados de acesso ao seu banco de dados.
- certifique-se de ter pelo menos versão 7.4 do PHP instalado juntamente com banco de dados MySQL.
- Utilize alguma ferramenta como Laragon, Xampp, AppServer, ou outro de sua preferência, desde que atenda aos requisitos acima, ou execute o comando (php artisan serve) via terminal dentro do diretorio raíz.
- Execute o comando: "php artisan migrate", dentro do diretorio do projeto, em seu terminal para que as migrations criem as tabelas no banco de dados indicado no arquivo .env.
- Após a criação das tabelas no banco, vá até a pasta "BD", dentro do diretório raís, e execute o arquivo "testefiocruz.sql", em um editor, como Workbench 8.0 CE, por exemplo, para que os dados necessários para o funcionamento das combos "UF de nascimento","Município de nascimento" e "Nível de formação" funcionem corretamente, sem eles, não será possível o funcionamento destas combos.

Obs.: Todo o conteúdo foi criado utilizando o Laravel Framework v8.5 juntamente com banco de dados relacional MySQL, e pode ser baixado, editado sem qualquer restrição, fique a vontade para utilizar e estudar.