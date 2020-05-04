# Crossroads

⛌ Reads two CSV files and finds matches across all columns.

## Docs

### pt-BR

> This pt-BR version of the docs are here, so I can copy and paste into emails.

#### `outer.csv`

São os dados que estão em A, mas **não** estão em B.

#### `inner.csv`

São os dados que foram encontradas em A **e** em B.

| Nova coluna | Descrição |
| --- | --- |
| `ACOL_NAME` | Coluna que deu matched em `A` |
| `ACELL_VAL` | Valor que deu matched em `A` |
| `BCOL_NAME` | Coluna que deu matched em `B` |
| `BCELL_VAL` | Valor que deu matched em `B` |