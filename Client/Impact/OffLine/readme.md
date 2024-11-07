# Guide mode hors connexion

## Activer le mode hors connexion

Pour utiliser l'application en mode hors connexion lorsque vous n'avez plus de connexion internet, suivez les étapes ci-dessous :

1. Allez dans le menu **Statut de la connexion** en haut à droite de l'écran.
2. Cliquez sur le bouton **Synchro in**.

   <img src="./images/1.png" width="400" alt="Hearder Top" style="border-radius: 4px;"/>

3. Confirmez en cliquant sur **Oui**.
4. Patientez pendant la création de la base de données locale.
5. Une fois terminé, cliquez sur **OK**.

> **Note :** Lorsque vous perdez la connexion internet, le statut de connexion en haut à droite deviendra rouge, indiquant que vous êtes en mode hors connexion.

### Consignes pour le mode hors connexion
- **Ne rafraîchissez pas votre navigateur** pour continuer à naviguer sans connexion.
- Les agendas et les filtres dans les vues **ne fonctionnent pas** en mode hors connexion.
- En mode hors connexion, vous pouvez **créer, modifier et supprimer des fiches**.

## Simulation du mode hors connexion

Pour simuler une utilisation en mode hors connexion :

1. Déconnectez-vous de votre point d'accès internet.
   - Le statut de connexion en haut à droite de l'écran passera en rouge.
2. Modifiez une fiche **Société**.
3. Enregistrez la fiche, puis rouvrez-la pour vérifier que les modifications ont bien été enregistrées.

## Reconnexion et synchronisation des données

Lorsque vous êtes prêt à vous reconnecter à Internet :

1. Reconnectez-vous à votre point d'accès internet.
2. Un message de synchronisation apparaîtra pour vous inviter à synchroniser les données locales avec le serveur.
3. Cliquez sur **Oui** et patientez pendant la synchronisation.
4. Une fois la synchronisation terminée, cliquez sur **OK**.

Votre application est maintenant **synchronisée** et reconnectée à Internet.

Vous pouvez ouvrir la fiche **Société** modifiée en mode hors connexion et vérifier que les données ont été mises à jour correctement.

---

## Configuration

Le tableau ci-dessous présente les données des différentes vues qui seront embarquées dans le mode offline de l'application.

| Nom de la vue             | Nom de la table         |
|---------------------------|-------------------------|
| OFFLINE - Action          | actions                 |
| Par défaut                | activite                |
| OFFLINE - Affaire         | affaire                 |
| OFFLINE - article         | article                 |
| OFFLINE - BDC             | bon_de_commande         |
| OFFLINE - BC Ligne        | bon_de_commande_ligne   |
| Collaborateurs actifs     | collaborateur           |
| OFFLINE - Communes        | communes                |
| OFFLINE - Csf             | csf                     |
| OFFLINE - Facture         | facture                 |
| OFFLINE - Facture ligne   | facture_ligne           |
| OFFLINE - Interlocuteur   | interlocuteur           |
| Par défaut                | opco                    |
| OFFLINE - planning_pub    | planning_pub            |
| OFFLINE - Prod            | prod                    |
| OFFLINE - Produits        | produits                |
| OFFLINE - Remise cascade  | remise_cascade          |
| OFFLINE - Société         | societe                 |
| Par défaut                | sous_traitant           |
| Par défaut                | support                 |
| Par défaut                | voix                    |