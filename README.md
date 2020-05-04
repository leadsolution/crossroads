# Crossroads

⛌ Reads two CSV files and finds matches across all columns.

## Docs

### pt-BR

> This pt-BR version of the docs are here, so I can copy and paste into emails.

#### `outer.csv`

São os dados que estão em 𝐴, mas **não** estão em 𝐵.

#### `inner.csv`

São os dados que foram encontradas em 𝐴 **e** em 𝐵.

| Nova coluna | Descrição |
| --- | --- |
| `ACOL_NAME` | Coluna que deu _match_ em 𝐴 |
| `ACELL_VAL` | Valor que deu _match_ em 𝐴 |
| `BCOL_NAME` | Coluna que deu _match_ em 𝐵 |
| `BCELL_VAL` | Valor que deu _match_ em 𝐵 |
