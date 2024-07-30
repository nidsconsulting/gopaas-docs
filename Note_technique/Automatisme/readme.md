
# Comment créer un automatisme dans GoPaaS ?

## Description

La fonctionnalité "Automatisme" permet de déclencher des actions automatiquement lors de l'enregistrement ou de la modification d'une fiche. Elle offre la possibilité de mettre à jour une fiche existante, de créer une nouvelle fiche ou d'envoyer un email sans intervention manuelle. Cela optimise les processus en automatisant des tâches répétitives, comme envoyer un email de bienvenue lors de l'ajout d'un nouveau contact, notifier un client après la mise à jour de sa commande, ou mettre à jour une fiche associée en réponse à des modifications. Cette automatisation assure une gestion efficace et cohérente des données.

### Bénéfices attendus
- ***Gain de Temps :*** Réduire les tâches manuelles répétitives en automatisant les processus, permettant aux équipes de se concentrer sur des tâches à plus forte valeur ajoutée.
- ***Réduction des Erreurs :*** Minimiser les risques d'erreurs humaines en automatisant les mises à jour.
- ***Réactivité Améliorée :*** Assurer une réponse rapide aux événements importants grâce à des déclenchements automatiques, comme l'envoi immédiat d'emails de notification.
- ***Optimisation des Processus :*** Simplifier et améliorer l'efficacité des processus opérationnels par l'automatisation des tâches courantes.

### Exemple

| **Champ**                      | **Description**                                                                                      |
|--------------------------------|------------------------------------------------------------------------------------------------------|
| **Nom**                        | Nom de l'automatisme pour identification. Par exemple, "Notification CA > 10 000€".                 |
| **Actif**                      | Indiquer si l'automatisme est actif. Doit être coché pour que l'automatisme fonctionne.             |
| **Description**                | Description détaillée de l'automatisme. Par exemple, "Envoie un email lorsque le chiffre d'affaires d'une fiche affaire dépasse 10 000€". |
| **Ordre**                      | Position de l'automatisme par rapport aux autres automatisations. Peut être "1" si c'est le premier dans l'ordre de traitement. |
| **Déclencheur**                | L'événement qui déclenche l'automatisme. Sera "Enregistrement de fiche".                             |
|           | **Type** : Type d'automatisme. Sélectionner "Enregistrement de fiche" pour déclencher l'action lors de la création ou de la modification d'une fiche.<br> **Mode** : Spécifie quand l'automatisme doit être exécuté. Choisir "Création et Modification" pour couvrir les deux scénarios.<br> **Table** : La table dans laquelle l'automatisme doit être appliqué. Sera "Affaire" pour les fiches affaires. |
| **Filtre**                     | Condition pour que l'automatisme se déclenche. Par exemple, "CA supérieur ou égal à 10 000€".                        |

### Configuration des Actions

Cliquer sur "Ajouter".

| **Champ** | **Description** |
|-----------|-----------------|
| **Actif** | Indique si l'action est activée. Si "Oui", l'action sera exécutée selon la configuration. |
| **Ordre** | Détermine l'ordre dans lequel les actions seront exécutées. Par exemple, l'action avec l'ordre "1" sera exécutée avant l'action avec l'ordre "2". |
| **Type**  | Spécifie le type d'action à réaliser. Les types d'actions peuvent inclure la création ou la mise à jour d'éléments. |
| **Table** | Indique la table sur laquelle l'action doit être effectuée. Cela pourrait être une table spécifique comme "action". |

#### Exemple d'Actions dans le cas d'un envoi d'email.

1. **Action 1**
   - **Actif** : Oui
   - **Ordre** : 1
   - **Type** : Email

### Configuration de l'Email

| **Champ**       | **Description**                                                                                      |
|-----------------|------------------------------------------------------------------------------------------------------|
| **De**          | Adresse email de l'expéditeur. Cette adresse apparaît comme celle qui envoie le message.             |
| **À**           | Adresse email du destinataire principal. Le message sera envoyé à cette adresse.                     |
| **CC**          | Adresse(s) email des destinataires en copie carbone. Les personnes en CC recevront une copie de l'email. |
| **Objet**       | Sujet de l'email. Résume brièvement le contenu du message pour le destinataire.                       |
| **Message**     | Contenu principal de l'email. C'est le texte que le destinataire lira dans le corps du message.       |
| **Fichier joint** | Option pour joindre des fichiers à l'email. Permet de transmettre des documents supplémentaires avec le message. |
| **Format**      | Format de l'email. Spécifie le type d'email (Texte ou HTML).|

#### Exemple de Configuration d'Email

- **De** : example@domaine.com
- **À** : destinataire@domaine.com
- **CC** : copie1@domaine.com, copie2@domaine.com
- **Objet** : Notification de Chiffre d'Affaires Élevé
- **Message** : Bonjour, <br> Nous vous informons que le chiffre d'affaires de la fiche affaire a dépassé 10 000€. Merci de vérifier les détails. <br> Cordialement, <br> L'équipe.
- **Fichier joint** : ["[%fichier_joint_1%]","[%fichier_joint_2%]"]
- **Format** : HTML

### Conclusion
Les automatismes sont essentiels pour moderniser et optimiser les processus d'entreprise. Ils libèrent du temps en automatisant les tâches répétitives, permettent aux employés de se concentrer sur des activités à plus forte valeur ajoutée, et réduisent les erreurs humaines.
