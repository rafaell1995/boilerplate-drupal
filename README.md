# boilerplate-drupal
Boilerplate com Docker e Drupal para testes

## Banco de dados

Quando subir pela primeira vez, ou usando em outra máquina, será preciso recriar o banco.

Ou salvar o db atual para re usar posteriormente.

### Deletar db atual 

```
docker exec -it boilerplate-drupal-db-1 mysql -uroot -p -e "DROP DATABASE IF EXISTS drupal;"
```

### Criar novo database

```
docker exec -it boilerplate-drupal-db-1 mysql -uroot -p -e "CREATE DATABASE drupal;"
```

### Reinstalar Drupal pelo Drush

```
drush site-install
```