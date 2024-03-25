# API

## Description
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

## Pré-requis
Pour utiliser l'API GoPaaS, il licence ADMIN ou Utilisateur est nécessaire pour la gestion des connexions.

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
| 400    | {"msg":"Invalid version."}                  |
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
| 400    | {"msg":"Invalid version."}                  |
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
| 400    | {"msg":"Invalid version."}                  |
| 401    | {"msg":"Invalid API key."}                           |
| 500    | {"msg":"Something went wrong. Please try again later."} |

#### Exemple

Avec curl.

- `{{URL}}` URL de  l’application

- `{{key}}` identifiant unique de la fiche

- `{{bearer_token}}` est une chaîne

- `{{tableName}}` est une chaîne avec le nom de la table

```php
curl -X POST \

  {{URL}}/api/items/{{tableName}}/
-H "Authorization: Bearer {{access_token}}" \
-H 'content-type: application/json' \
-d '[{
"cle": "{{key}}",
"num_commande": "551035",
"date_billed": "2016-07-05",
"actual_billable_amount": "437.50",
"num_invoice": "16000162",
“date_closed”:”2016-09-05”
},{
"cle": "{{key}}",
"num_commande": "672620",
"date_billed": "2017-06-14",
"actual_billable_amount": "595",
"num_invoice": "17000100",
“date_closed”:”2017-07-31”
}]'
```


> Si aucune cle {{key}} n’est spécifiée alors une nouvelle fiche sera crée.


## oAuth2

OAuth 2.0 est un protocole standard de délégation d'autorisation pour la sécurisation des accès aux API. Il permet aux applications  externe d'obtenir un accès limité à GoPaaS sans avoir accès aux mots de passe.

### Configuration

Dans la fiche utilisateur API définir dans la section OAuth2 les informations suivante :

| Champs | Valeur                 |
|--------|---------------------|
| `Grant Type`  | `Client Credentials`  |
| `Client ID`  | Le Client ID est un identifiant public unique attribué à une application cliente lors de son enregistrement auprès du serveur d'autorisation de GoPaaS dans le cadre du protocole OAuth 2.0  |
| `Client Secret`  | Le Client Secret est une chaîne de caractères secrète utilisée dans le protocole OAuth 2.0, servant à authentifier l'identité d'une application cliente auprès du serveur d'autorisation, en complément de l'identifiant de client (Client ID). |
| `Expires in`  | La durée d'expiration du token (Expire In), qui indique à l'application combien de temps le token sera valide.  |

### Authorization

#### Request Access Token

| Method | Access Token URL                 |
|--------|---------------------|
| `POST`  | `api/oauth2/access_token/`  |

| Type          | Params          | Values |
|---------------|-----------------|--------|
| `DATA`        | `grant_type`  | `Client Credentials` |
| `DATA`        | `client_id`          | L'identifiant public de votre application client fourni par le serveur d'autorisation GoPaaS lorsque vous avez enregistré votre application.   |
| `DATA`        | `client_id`          | L'identifiant public de votre application client fourni par le serveur d'autorisation GoPaaS lorsque vous avez enregistré votre application.   |


#### Response

| Status | Response                                             |
|--------|------------------------------------------------------|
| 200    | JSON                                                 |
| 400    | {"msg":"Invalid version."}                  |
| 401    | {"msg":"Invalid Information."}                           |
| 500    | {"msg":"Something went wrong. Please try again later."} |

*Exemple*

```json
{
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3MTEzODUzNjUsImlzcyI6IjU0Ljg2LjUwLjEzOSIsInN1YiI6Im1nb29yaWFoIiwiZXhwIjoxNzExMzg1NDI1LCJzY29wZSI6IkFETUlOIiwianRpIjoiIn0.LRKkcIupGvp81NXKy1rdvD8XusVCYNyyhMCamNdM9p4",
    "token_type": "Bearer",
    "expires_in": "60",
    "scope": "ADMIN"
}
```

### Endpoints

#### list

##### Request

| Method | URL                 |
|--------|---------------------|
| `GET`  | `api/oauth2/list/{{id}}/`  |

| Type          | Params          | Values |
|---------------|-----------------|--------|
| `HEAD`        | `bearer_token`  | String |
| `HEAD (option)` | `advancedSearch` | String |

##### Response

| Status | Response                                             |
|--------|------------------------------------------------------|
| 200    | JSON                                                 |
| 400    | {"msg":"Invalid version."}                  |
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
{{URL}}/api/oauth2/list/{{id}}/
-H 'Authorization: Bearer {{bearer_token}}' \
-H 'content-type: application/json' \
-H 'advancedSearch: nom|contain|NIDS|'
```

#### item

##### Request

| Method | URL                 |
|--------|---------------------|
| `GET`  | `api/oauth2/item/tableName/{{id}}/`  |

| Type          | Params          | Values |
|---------------|-----------------|--------|
| `HEAD`        | `bearer_token`  | String |

##### Response
| Status | Response                                             |
|--------|------------------------------------------------------|
| 200    | JSON                                                 |
| 400    | {"msg":"Invalid version."}                  |
| 401    | {"msg":"Invalid API key."}                           |
| 500    | {"msg":"Something went wrong. Please try again later."} |

##### Exemple

Avec curl.

- `{{URL}}` URL de  l’application

- `{{id}}` identifiant unique de la fiche

- `{{bearer_token}}` est une chaîne

- `{{tableName}}` est une chaîne avec le nom de la table

```php
curl -X GET \
{{URL}}/api/oauth2/list/{{id}}/
curl -X POST \
{{URL}}/api/oauth2/item/{{tableName}}/{{id}}/
-H "Authorization: Bearer {{bearer_token}}" \
-H 'content-type: application/json'
```

#### items

##### Request

| Method | URL                 |
|--------|---------------------|
| `POST`  | `api/oauth2/items/tableName/`  |

| Type          | Params          | Values |
|---------------|-----------------|--------|
| `HEAD`        | `bearer_token`  | String |
| `POST`        | `data`          | JSON   |

##### Response

| Status | Response                                             |
|--------|------------------------------------------------------|
| 200    | JSON                                                 |
| 400    | {"msg":"Invalid version."}                  |
| 401    | {"msg":"Invalid API key."}                           |
| 500    | {"msg":"Something went wrong. Please try again later."} |

#### Exemple

- `{{URL}}` URL de  l’application

- `{{key}}` identifiant unique de la fiche

- `{{bearer_token}}` est une chaîne

- `{{tableName}}` est une chaîne avec le nom de la table

```php
curl -X POST \

  {{URL}}/api/items/{{tableName}}/
-H "Authorization: Bearer {{access_token}}" \
-H 'content-type: application/json' \
-d '[{
"cle": "{{key}}",
"num_commande": "551035",
"date_billed": "2016-07-05",
"actual_billable_amount": "437.50",
"num_invoice": "16000162",
“date_closed”:”2016-09-05”
},{
"cle": "{{key}}",
"num_commande": "672620",
"date_billed": "2017-06-14",
"actual_billable_amount": "595",
"num_invoice": "17000100",
“date_closed”:”2017-07-31”
}]'
```

> Si aucune cle {{key}} n’est spécifiée alors une nouvelle fiche sera crée.

## Restricition IP

La restriction IP limite les requêtes à une API aux adresses IP spécifiées ou à des plages d'adresses IP. Cela signifie que seules les requêtes provenant d'adresses IP autorisées peuvent accéder à l'API, tandis que toutes les autres tentatives sont rejetées. Cette approche ajoute une couche de sécurité supplémentaire en s'assurant que même si des clés API sont compromises, l'accès est toujours restreint aux emplacements réseau approuvés.

### Utilisation

Les restrictions IP sont couramment utilisées dans les scénarios suivants :

- Environnements d'entreprise : Pour limiter l'accès aux API aux bureaux de l'entreprise ou à des réseaux spécifiques.

- Applications B2B : Pour restreindre l'accès entre entreprises partenaires à des plages d'adresses IP connues.

- Sécurisation des environnements de production : Pour s'assurer que seuls les serveurs de production ou les systèmes backend peuvent communiquer avec l'API.

### Avantages

- Réduction du Risque de Fuites de Données : En limitant l'accès aux adresses IP fiables, le risque de fuites de données dues à des accès non autorisés est réduit.

- Contrôle d'Accès Amélioré : Fournit un moyen simple mais efficace de contrôler qui peut accéder à l'API.

- Complément aux Autres Méthodes de Sécurité : Utilisé en combinaison avec l'authentification, le chiffrement et d'autres politiques de sécurité, il renforce la posture de sécurité globale.

### Implémentation

Dans la fiche utilisateur API définir dans la section API KEY les informations suivante :

| Champs | Valeur                 |
|--------|---------------------|
| `IP Authorized Address`  | Liste des adresse IP autorisées, les IP seront séparée par un ";"  |
