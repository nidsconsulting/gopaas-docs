# Paramétrage du Serveur SMTP

## Description

Le paramétrage du serveur SMTP permet de configurer les paramètres nécessaires pour l'envoi d'emails à partir de l'application. Cela inclut la définition de l'hôte SMTP, le port, et les informations d'authentification nécessaires pour assurer une communication efficace et sécurisée par email.

### Bénéfices attendus
- ***Communication Fiable :*** Permet l'envoi d'emails depuis l'application avec une configuration correcte du serveur SMTP.
- ***Sécurité Renforcée :*** Assure que les informations d'authentification sont correctement configurées pour sécuriser les communications par email.
- ***Flexibilité :*** Permet d'utiliser des services SMTP variés en fonction des besoins spécifiques de l'organisation.

### Instructions pour le Paramétrage

1. **Accéder au Menu de Configuration**
   - Rendez-vous dans le menu de gauche sous **(admin)**.
   - Cliquez sur **Configuration**.

2. **Ouvrir la Fiche de Configuration**
   - Sélectionnez la fiche de configuration pertinente.
   - Accédez à la section **Serveur SMTP**.

3. **Configurer les Champs SMTP**

   | **Champ**           | **Description**                                                                         |
   |---------------------|-----------------------------------------------------------------------------------------|
   | **Hôte**            | Adresse du serveur SMTP.                                                                |
   | **Port**            | Port utilisé pour la connexion au serveur SMTP. Généralement `587` pour une connexion sécurisée via TLS. |
   | **Nom utilisateur** | Nom d'utilisateur pour l'authentification SMTP.                                         |
   | **Mot de passe**    | Mot de passe pour l'authentification SMTP.                                              |
   | **Utiliser SSL**    | Indiquer si SSL (Secure Sockets Layer) doit être utilisé pour sécuriser la connexion.   |

### Conclusion

Une fois les paramètres SMTP correctement configurés, votre application sera capable d'envoyer des emails via le serveur SMTP spécifié. Assurez-vous que toutes les informations sont correctement saisies.
