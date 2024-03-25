# API
L'API ouverte de GoPaaS permet à des applications tierces d'interagir facilement avec la plateforme. Elle fournit un ensemble de règles et de protocoles qui autorisent l'accès aux données, facilitant ainsi l'intégration et l'extension des capacités du logiciel dans d'autres systèmes ou applications.


## Avantages
- ***Interconnectivité***: Permet une intégration transparente avec d'autres outils et systèmes, favorisant un écosystème numérique cohérent et connecté.
- ***Personnalisation***: Offre aux développeurs la possibilité de personnaliser et d'étendre les fonctionnalités de la plateforme pour répondre aux besoins spécifiques de leur entreprise ou de leur projet.
- ***Automatisation***: Facilite l'automatisation des processus, réduisant le temps et les efforts nécessaires pour accomplir des tâches répétitives ou complexes.
- ***Innovation***: Encourage l'innovation en permettant aux développeurs de créer de nouvelles applications ou services qui tirent parti des fonctionnalités du logiciel.

## Bénéfices
- ***Amélioration de l'efficacité opérationnelle***: L'intégration et l'automatisation des processus entraînent une réduction significative du temps et des coûts opérationnels.
- ***Augmentation de la satisfaction client***: La capacité à personnaliser et à intégrer GoPaaS avec d'autres outils peut améliorer l'expérience utilisateur.
- ***Flexibilité et évolutivité***: L'API ouverte permet aux entreprises de s'adapter rapidement aux changements du marché et d'évoluer en fonction des besoins croissants de leur clientèle.

## Endpoints

### list

#### Request
| Method | URL                 |
|--------|---------------------|
| `GET`  | `api/list/{{id}}/`  |

| Type          | Params          | Values |
|---------------|-----------------|--------|
| `HEAD`        | `bearer_token`  | String |
| `HEAD (option)` | `advancedSearch` | String |

#### Response
| Status | Response                                             |
|--------|------------------------------------------------------|
| 200    | JSON                                                 |
| 400    | {"msg":"Please specify database version."}           |
| 400    | {"msg":"Invalid database version."}                  |
| 401    | {"msg":"Invalid API key."}                           |
| 500    | {"msg":"Something went wrong. Please try again later."} |

#### Exemple
Avec curl.
- `{{URL}}` URL de  l’application 
- `{{id}}` identifiant unique de la vue
- `{{bearer_token}}` est une chaîne
- `{{advancedSearch}}` est une chaîne

```php
curl -X GET \
{{URL}}/api/list/{{id}}/
-H 'Authorization: Bearer {{bearer_token}}' \
-H 'content-type: application/json' \
-H 'advancedSearch: nom|contain|NIDS|'
```

### item
#### Request
| Method | URL                 |
|--------|---------------------|
| `GET`  | `api/item/tableName/{{id}}/`  |

| Type          | Params          | Values |
|---------------|-----------------|--------|
| `HEAD`        | `bearer_token`  | String |

#### Response
| Status | Response                                             |
|--------|------------------------------------------------------|
| 200    | JSON                                                 |
| 400    | {"msg":"Please specify database version."}           |
| 400    | {"msg":"Invalid database version."}                  |
| 401    | {"msg":"Invalid API key."}                           |
| 500    | {"msg":"Something went wrong. Please try again later."} |

#### Exemple
Avec curl.
- `{{URL}}` URL de  l’application 
- `{{id}}` identifiant unique de la fiche
- `{{bearer_token}}` est une chaîne
- `{{tableName}}` est une chaîne avec le nom de la table

```php
curl -X GET \
{{URL}}/api/list/{{id}}/
curl -X POST \
{{URL}}/api/item/{{tableName}}/{{id}}/
-H "Authorization: Bearer {{bearer_token}}" \
-H 'content-type: application/json'
```

### items
#### Request
| Method | URL                 |
|--------|---------------------|
| `POST`  | `api/items/tableName/`  |

| Type          | Params          | Values |
|---------------|-----------------|--------|
| `HEAD`        | `bearer_token`  | String |
| `POST`        | `data`          | JSON   |

#### Response
| Status | Response                                             |
|--------|------------------------------------------------------|
| 200    | JSON                                                 |
| 400    | {"msg":"Please specify database version."}           |
| 400    | {"msg":"Invalid database version."}                  |
| 401    | {"msg":"Invalid API key."}                           |
| 500    | {"msg":"Something went wrong. Please try again later."} |

#### Exemple
Avec curl.
- `{{URL}}` URL de  l’application 
- `{{id}}` identifiant unique de la fiche
- `{{bearer_token}}` est une chaîne
- `{{tableName}}` est une chaîne avec le nom de la table

```php
curl -X GET \
{{URL}}/api/list/{{id}}/
curl -X POST \
{{URL}}/api/item/{{tableName}}/{{id}}/
-H "Authorization: Bearer {{bearer_token}}" \
-H 'content-type: application/json'
```


## auth2


