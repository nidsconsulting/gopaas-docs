# Documentation de Cockpit

## Introduction
Bienvenue dans la documentation de Cockpit. 
<br>
Ce document fournit des informations détaillées sur l'utilisation et les fonctionnalités de Cockpit.
<br>
Cockpit est un outil intélligent permettant de réaliser des dashboards de monitoring simplement et rapidement.

<br>

## Table des matières
1. [Introduction](#introduction)
2. [Création d'un KPI](#création-dun-kpi)
3. [Création d'une Série](#création-dune-série)
4. [Module PieChart](#module-piechart)
5. [Module Card](#module-card)
6. [Module LineChart](#module-linechart)
7. [Module BarChart](#module-barchart)
8. [Module FunnelChart](#module-funnelchart)
9. [Module TreeMap](#module-treemap)
10. [Module GaugeChart](#module-gaugechart)

<br>

## Création d'un KPI
Pour créer un nouveau KPI, suivez les étapes suivantes :

1. Créer un nouveau KPI, et remplissez les champs suivants : 

| Champ         | Description                                                                   |
|---------------|-------------------------------------------------------------------------------|
| Titre         | Nom du KPI                                                                    |
| ID            | Identifiant du KPI                                                            |
| Type          | Type de graphique (PieChart, Card, LineChart, BarChart, FunnelChart, TreeMap, GaugeChart) |
| Compact       | Permet de passer d'un affichage 1 000 000 à 1 000k par exemple                |
| Symbol        | Entête du module                                                              |
| CustomOptions | Options personnalisées retrouvables sur la doc d'eCharts                      |

2. Cliquer sur 'Appliquer'
3. Dans la section 'Séries', ajouter une nouvelle Série

<br>

## Création d'une Série
Pour créer une nouvelle Série, remplissez les champs suivants :

| Champ          | Description                                                                 |
|----------------|-----------------------------------------------------------------------------|
| Name           | Nom de la série                                                             |
| Operation      | Opération à effectuer (Somme, moyenne, comptage, plus haut, plus bas)       |
| Value          | Champ concerné par l'opération                                              |
| Filters        | Condition souhaitée pour filtrer les données                                |
| Category       | Champ catégorisé par l'opération                                            |
| Sub-category   | ...                                                                         |
| Détails        | ...                                                                         |
| Color          | Couleur du module                                                           |
| CustomOptions  | Options personnalisées retrouvables sur la doc d'eCharts                    |

<br>

## Module PieChart

Le module PieChart propose un affichage sous forme de graphique camembert, comme ceci :

<img src="images/piechart_1.png" alt="Exemple de PieChart" width="400">

<br>

### Configuration :

Suivez les étapes de la section [Création d'un KPI](#création-dun-kpi) en sélectionnant "PieChart" comme type.

<img src="images/piechart_3.png" alt="KPI de PieChart" width="1500">

<br>

## Module Card

Le module Card propose un affichage sous simple carte, comme ceci :

<img src="images/card_1.png" alt="Exemple de Card" width="400">

<br>

### Configuration :

Suivez les étapes de la section [Création d'un KPI](#création-dun-kpi) en sélectionnant "Card" comme type.

<img src="images/card_3.png" alt="KPI de Card" width="1500">

<br>

## Module LineChart

Le module LineChart propose un affichage sous forme de courbe, comme ceci :

<img src="images/linechart_1.png" alt="Exemple de LineChart" width="400">

<br>

### Configuration :

Suivez les étapes de la section [Création d'un KPI](#création-dun-kpi) en sélectionnant "LineChart" comme type.

<img src="images/linechart_3.png" alt="KPI de LineChart" width="1500">

<br>

## Module BarChart

Le module BarChart propose un affichage sous forme d'histogramme, comme ceci :

<img src="images/barchart_1.png" alt="Exemple de BarChart" width="600">

<br>

### Configuration :

Suivez les étapes de la section [Création d'un KPI](#création-dun-kpi) en sélectionnant "BarChart" comme type.

<img src="images/barchart_3.png" alt="KPI de BarChart" width="1500">

<br>

## Module FunnelChart

Le module FunnelChart propose un affichage en entonnoir, comme ceci :

<img src="images/funnel_1.png" alt="Exemple de FunnelChart" width="600">

<br>

### Configuration :

Suivez les étapes de la section [Création d'un KPI](#création-dun-kpi) en sélectionnant "FunnelChart" comme type.

<img src="images/funnel_3.png" alt="KPI FunnelChart" width="1500">

<br>

## Module TreeMap

Le module TreeMap propose un affichage comme ceci :

<img src="images/treemap_1.png" alt="Exemple de TreeMap" width="600">

<br>

### Configuration :

Suivez les étapes de la section [Création d'un KPI](#création-dun-kpi) en sélectionnant "TreeMap" comme type.

<img src="images/treemap_3.png" alt="KPI TreeMap" width="1500">

<br>

## Module GaugeChart

Le module GaugeChart propose un affichage sous forme de compteur / horloge, comme ceci :

<img src="images/gaugechart_1.png" alt="Exemple de TreeMap" width="600">

<br>

### Configuration :

Suivez les étapes de la section [Création d'un KPI](#création-dun-kpi) en sélectionnant "GaugeChart" comme type. Ajoutez également le champ suivant :

| Champ         | Description                                                                   |
|---------------|-------------------------------------------------------------------------------|
| KeyValue      | Valeur de référence maximale de la jauge                                      |

<img src="images/gaugechart_3.png" alt="KPI TreeMap" width="1500">

<br>

## Module TreeMap

Le module TreeMap propose un affichage comme ceci :

<img src="images/treemap_1.png" alt="Exemple de TreeMap" width="600">

<br>

### Configuration :

Suivez les étapes de la section [Création d'un KPI](#création-dun-kpi) en sélectionnant "TreeMap" comme type.

<img src="images/treemap_3.png" alt="KPI TreeMap" width="1500">

<br>

## Module Calculate

Le module Calculate propose un affichage sous forme de carte mais avec une valeur calculée, comme ceci :

<img src="images/calculate_1.png" alt="Exemple de Calculate" width="600">

<br>

### Configuration :

Suivez les étapes de la section [Création d'un KPI](#création-dun-kpi) en sélectionnant "Calculate" comme type. Ajoutez également le champ suivant :

| Champ         | Description                                                                   |
|---------------|-------------------------------------------------------------------------------|
| Calculate     | {{ID_KPI_1}} - {{ID_KPI_2}}, ex : {{SOMME_FACTURES}} - {{SOMME_FACTURES_NON_REGLEES}}                                                   |

<img src="images/calculate_2.png" alt="KPI TreeMap" width="1500">

<br>

Pas besoin de Série pour ce module.

## Module Title

Le module Title propose l'affichage d'un simple titre, comme ceci :

<img src="images/title_1.png" alt="Exemple de Calculate" width="600">

<br>

### Configuration :

Suivez les étapes de la section [Création d'un KPI](#création-dun-kpi) en sélectionnant "Title" comme type. Attention au champ suivant :

| Champ         | Description                                                                   |
|---------------|-------------------------------------------------------------------------------|
| Titre         | Titre à afficher                                                              |

<br>

Pas besoin de Série pour ce module.