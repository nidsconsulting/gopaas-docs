<p align="center"><img alt="Parsedown" src="https://i.imgur.com/fKVY6Kz.png" width="240" /></p>

<h1>Mode hors connexion</h1>

[![Total Downloads](https://poser.pugx.org/erusev/parsedown/d/total.svg)](https://packagist.org/packages/erusev/parsedown)
[![Version](https://poser.pugx.org/erusev/parsedown/v/stable.svg)](https://packagist.org/packages/erusev/parsedown)
[![License](https://poser.pugx.org/erusev/parsedown/license.svg)](https://packagist.org/packages/erusev/parsedown)

Better Markdown Parser in PHP - <a href="http://parsedown.org/demo">Demo</a>.

## Prérequis

* Définir les vues à mettre en mode hors connexion
* Identifier les dépendances (Vues, Dashboard ...)

## Installation


## Exemple

```json
OFFLINE =
[{"table":"interlocuteur","viewId":"629","index":["opco"]},{"table":"activite","viewId":"719","index":[]},{"table":"collaborateur","viewId":"779","index":["actions","actions","prod","promo","utilisateur"]},{"table":"bon_de_commande","viewId":"879","index":["societe","interlocuteur","prod","collaborateur","csf"]},{"table":"prod","viewId":"898","index":["collaborateur","planning_pub","pdv","interlocuteur","voix","rs_formation","sous_traitant","produits","societe","collaborateur","opco","sous_traitant","interlocuteur","bon_de_commande","produits","support","sous_traitant","rs_formation"]},{"table":"societe","viewId":"899","index":["societe","communes"]},{"table":"actions","viewId":"900","index":["utilisateur","interlocuteur","societe","societe","email_template","bon_de_commande","facture","actions","prod","sous_traitant"]},{"table":"csf","viewId":"901","index":["societe","support","article"]},{"table":"facture","viewId":"902","index":["devis","societe","prod","bon_de_commande","collaborateur","interlocuteur"]},{"table":"communes","viewId":"903","index":["opco"]}]

OFFLINE_LINKVIEWS =
[{"viewName":"LinkInterlocuteurActions","parent":"interlocuteur"},{"viewName":"LinkInterlocuteurConcerne_par_prod","parent":"interlocuteur"},{"viewName":"LinkActiviteConcerne_societe","parent":"activite"},{"viewName":"LinkCollaborateurConcerne_par_actions","parent":"collaborateur"},{"viewName":"LinkCollaborateurConcerne_prod","parent":"collaborateur"},{"viewName":"LinkBonCommandeBonCommandeLigne","parent":"bon_de_commande"},{"viewName":"LinkBonCommandeRepartition","parent":"bon_de_commande"},{"viewName":"LinkBdcActions","parent":"bon_de_commande"},{"viewName":"LinkBDCProds","parent":"bon_de_commande"},{"viewName":"LinkBDCFacture","parent":"bon_de_commande"},{"viewName":"LinkProdProd_historique","parent":"prod"},{"viewName":"LinkSocieteConcerne_prod","parent":"societe"},{"viewName":"LinkSocieteInterlocuteurs","parent":"societe"},{"viewName":"LinkSocieteActions","parent":"societe"},{"viewName":"LinkSocieteBDC","parent":"societe"},{"viewName":"LinkSocieteFacture","parent":"societe"},{"viewName":"LinkSocieteCSF","parent":"societe"},{"viewName":"LinkCsfBon_de_commandes","parent":"csf"},{"viewName":"LinkCSFBonCommandeLigne","parent":"csf"},{"viewName":"LinkFactureFacture_ligne","parent":"facture"},{"viewName":"LinkFactureActions","parent":"facture"},{"viewName":"LinkFactureReglement","parent":"facture"},{"viewName":"LinkFactureFactureJournal","parent":"facture"}]
```

**Comment utiliser le configurateur ?**
* Dans toutes les vues, indiquer le mot-clé "OFFLINE" dans le champs "Rapport
* Lancer le lien suivant pour récupérer la configuration JSON.

```html
https://prod2-qualif.gopaas.net/impact/webservice/offline/config-json.php
```
