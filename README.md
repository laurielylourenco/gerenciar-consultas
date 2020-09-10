# Gerenciar consulta

Esse sistema inspirado na situação do consultorio do meu dentista, pois sempre vou la observo que secretaria esta sempre mexendo com muitos papeis para gerenciar as consultas.Bom eu estou fazendo uma solução pra esse consultorio eles só não sabem kkkkk.

## Resumo do Sistema
Bom sistema onde cadastra os pacientes é as consultas, CRUD para ambos.Na View para criar consulta é so buscar o paciente cadastrado pelo nome. Na pagina index é  desejado que traga somente as consulta marcadas para aquele dia é dias posteriores lista por hora tambem.

### O que foi usado  desenvolver ate agora esse sistema?
    Laravel 6
    Bootstrap 4 

## Configurações Basica
	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=mude_aqui_database
	DB_USERNAME=mude_aqui_seu_usarname
	DB_PASSWORD=mude_aqui_sua_senha

#### Não tem um create para classe dentista gero seus nomes automaticamente pelo factories só rodar.
	php artisan db:seed 
**Em caso de erros,bugs é talvez deixar uma dica de como melhorar o codigo faça issues por favor!!!**

## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
