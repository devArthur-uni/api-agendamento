# Sistema de Agendamento de Consultas

API REST desenvolvida para gerenciamento de **médicos, pacientes e consultas médicas**.

O projeto foi desenvolvido utilizando **Laravel**, executado em containers **Docker** e utilizando **PostgreSQL** como banco de dados.

---

# Tecnologias Utilizadas

* PHP 8.4
* Laravel
* PostgreSQL
* Docker
* Docker Compose

---

# Pré-requisitos

Para executar o projeto é necessário possuir instalado em sua máquina:

* Docker
* Docker Compose

---

# Como executar o projeto

Acesse a pasta do projeto:

```bash
cd api-agendamento
```

Suba os containers Docker:

```bash
docker compose up -d --build
```

Execute as migrations do banco de dados:

```bash
docker compose exec app php artisan migrate
```

A API estará disponível em:

```
http://localhost:8000
```

Base URL da API:

```
http://localhost:8000/api
```

---

# Banco de Dados

O projeto utiliza **PostgreSQL** executando em um container Docker.

As tabelas são criadas automaticamente através das **migrations do Laravel**.

---

# Endpoints da API

## Médicos

### Criar médico

**POST**

```
/api/medicos
```

Body:

```json
{
  "nome": "Arthur",
  "sobrenome": "Zico",
  "crm": "198120192025"
}
```

Exemplo de resposta:

```json
{
  "mensagem": "Médico cadastrado!",
  "medico": {
    "id": 1,
    "nome": "Arthur",
    "sobrenome": "Zico",
    "crm": "198120192025",
    "created_at": "2026-03-12T16:49:30.000000Z",
    "updated_at": "2026-03-12T16:49:30.000000Z"
  }
}
```

---

### Listar médicos

**GET**

```
/api/medicos
```

---

## Pacientes

### Criar paciente

**POST**

```
/api/pacientes
```

Body:

```json
{
  "nome": "Giorgian",
  "sobrenome": "De Arrascaeta",
  "cpf": "1010101019",
  "data_nascimento": "2019-11-23"
}
```

---

### Listar pacientes

**GET**

```
/api/pacientes
```

---

## Consultas

### Criar consulta

**POST**

```
/api/consultas
```

Body:

```json
{
  "medico_id": 1,
  "paciente_id": 1,
  "data": "2026-06-01 10:00"
}
```

---

### Listar consultas

**GET**

```
/api/consultas
```

---

# Validações

A API possui validação de dados nas requisições utilizando os mecanismos nativos do Laravel.

Campos obrigatórios são verificados antes da persistência no banco de dados, garantindo a integridade das informações enviadas para a API.

---

# Estrutura do Projeto

```
app
 ├ Domain
 │   ├ Medico.php
 │   ├ Paciente.php
 │   └ Consulta.php
 │
 ├ Models
 │   ├ Medico.php
 │   ├ Paciente.php
 │   └ Consulta.php
 │
 ├ Http
 │   └ Controllers
 │        ├ MedicoController.php
 │        ├ PacienteController.php
 │        └ ConsultaController.php
```

---

# Arquitetura

A aplicação segue uma separação básica de responsabilidades:

* **Domain** → entidades de domínio e regras de negócio
* **Models (Eloquent)** → persistência de dados no banco
* **Controllers** → exposição dos endpoints da API

---

# Melhorias Futuras

Algumas melhorias que poderiam ser implementadas:

* Paginação de resultados nas listagens
* Testes automatizados
* Verificação de conflito de horários de consultas
* Versionamento da API

---

# Autor

Projeto desenvolvido por mim (Arthur de Almeida Ferreira) como parte dos exercícios na Unimed Cricíuma.
