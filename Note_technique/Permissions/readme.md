# Comment géréer des permissions dans GoPaaS ?

## Description

La gestion des permissions permet de définir et de contrôler les droits d'accès en fonction des attributs des utilisateurs. Cette approche assure que les utilisateurs ont accès uniquement aux informations spécifique à leur rôle, ce qui améliore la sécurité et la pertinence des données traitées.

### Bénéfices attendus
- ***Sécurité Accrue :*** Limite l'accès aux informations sensibles, réduisant les risques de divulgation non autorisée.
- ***Gestion Simplifiée :*** Facilite la gestion des droits d'accès en regroupant les permissions.
- ***Pertinence des Informations :*** Assure que les utilisateurs accèdent uniquement aux données qui leur sont pertinentes.
- ***Adaptabilité :*** Permet d'ajuster les droits d'accès selon les besoins spécifiques.

### Configuration des Permissions

| **Champ**           | **Description**                                                                 |
|---------------------|---------------------------------------------------------------------------------|
| **Table**            | Table de la permission à configurer. |
| **Type**            | Type de la permission à configurer, pour gérer les accès. |
| **Champ à utiliser** | Champ de la table utilisé pour les permissions. |
| **Partage**         | Type de partage des données. |

### Détails des permissions

| **Permission**       | **Groupes Autorisés**                                                                 |
|----------------------|--------------------------------------------------------------------------------------|
| **Création**         | Groupes spécifiés pour autoriser la création de données. |
| **Lecture**          | Groupes spécifiés pour autoriser la lecture des données. |
| **Lecture Sélective** | Groupes spécifiés pour la lecture sélective en fonction d'un groupe. |
| **Modification**     | Groupes spécifiés pour autoriser la modification des données. |
| **Modification Sélective** | Groupes spécifiés pour la modification sélective en fonction d'un groupe. |
| **Suppression**      | Groupes spécifiés pour autoriser la suppression des données. |
| **Suppression Sélective** | Groupes spécifiés pour la suppression sélective en fonction d'un groupe. |
| **Autres**           | Autres permissions comme l'import, l'export et la modification en masse. |

### Exemple de Configuration des Permissions sur la table société

| **Champ**          | **Description**                                                                                       |
|--------------------|-------------------------------------------------------------------------------------------------------|
| **Table**          | Spécifiez ici la table ou les données concernées, ici société.                                        |
| **Type**           | "Group" pour configurer les accès par région.                                                         |
| **Champ à utiliser** | Attribut régional pour la gestion des permissions, ici champ "région".                              |
| **Partage**        | "Public" pour définir l'accès en fonction gu groupe.                                                  |
| **Lecture Sélective** | Groupes ayant accès en lecture : EST, OUEST, SUD, NORD                                             |
| **Modification Sélective** | Groupes ayant la possibilité de modification : EST, OUEST, SUD, NORD                          |

### Conclusion

La gestion des permissions basée sur la région permet une distribution précise et sécurisée des droits d'accès. En adaptant les permissions en fonction des régions, vous assurez que les informations sont accessibles et modifiables uniquement par les groupes concernés, ce qui optimise la sécurité et la pertinence des données traitées.
