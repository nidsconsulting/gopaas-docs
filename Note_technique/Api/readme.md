# API: FILE

Cette documentation décrit comment récupérer un fichier depuis la plateforme GoPaaS via une requête HTTP.

---

## Description

Cet endpoint permet de 
- **télécharger** un fichier stocké sur GoPaaS. Le serveur renvoie le fichier en flux binaire, avec des en-têtes adéquats pour forcer le navigateur (ou client HTTP) à le sauvegarder localement.
- **uploader** un fichier vers GoPaaS

---

## URL et Méthode pour télécharger un fichier

- **Méthode :** `GET`
- **Endpoint :**  `/api/file/{{tableName}}`

---

## Paramètres

### Body

| Paramètre | Type   | Description                                  | Obligatoire |
|:---------:|:------:|----------------------------------------------|:----------:|
| `itemKey`  | String | Identifiant unique de la fiche (cle ou id). |     Oui    |
| `fieldName`  | String | Nom du champ de type fichier. |     Oui    |
| `type`  | String | valeur par défaut "URL". |     Non    |



### Headers

| Header          | Valeur / exemple           | Description                                                         |
|:---------------:|---------------------------|---------------------------------------------------------------------|
| `Authorization` | `Bearer xxxxxxx`          | *(obligatoire)* Bearer token d’accès.    |
| `Accept`        | `application/json`| *(Optionnel)* Spécifie le type de contenu que le client attend.     |

---

## Réponse

Le serveur envoie la **réponse** sous forme de fichier json.

{
    "download_url": "https://main.gopaas.net/gopaas/api/download/eyJ0YWJsZU5hbWUiOiJwaG90byIsImZpbGUiOiIyMDI1XC8wM1wvMjdcLzE3NDMwOTQyOTkuMzY2M19Db3BpZV9kZV9Ub3Vybm9pX1UxM18zLnBuZyIsInVzZXIiOiJxVU55NWNaZmtVTnpOaFB6N0VUR1F4Nm1zVDhSNlYzbDdKNTc0OElXOXhFIiwiZXhwIjoxNzQzMDk3OTEyfQ%3D%3D.bf99f62306c4203eb73ce8ec51fad57546e96a8d06379f452c47297b96369651"

}

### Codes de statut (HTTP)

| Code | Signification                                              |
|:----:|------------------------------------------------------------|
| 200  | Succès – Le fichier est retourné dans le corps de la réponse. |
| 401  | Non autorisé – Token non valide ou expiré.                 |
| 403  | Accès interdit – L’utilisateur n’a pas les droits requis.  |
| 404  | Fichier introuvable.                                       |
| 500  | Erreur interne du serveur.                                 |

---

## Exemple de Requête

### Via cURL


curl --location --request GET 'https://main.gopaas.net/gopaas/api/file/photo' \
--header 'Content-Type: application/json' \
--header 'Authorization: ••••••' \
--data '{
    "itemKey": "2",
    "fieldName": "fichier",
    "type": "URL"
}'

## URL et Méthode pour uploader un fichier

- **Méthode :** `POST`
- **Endpoint :**  `/api/file/{{tableName}}`