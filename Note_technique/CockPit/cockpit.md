# Documentation de Cockpit

## Introduction
Bienvenue dans la documentation de Cockpit. Ce document fournit des informations détaillées sur l'utilisation et les fonctionnalités de Cockpit.

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
| Symbol        | Entête du module                                                              |
| Type          | Type de graphique (PieChart, Card, LineChart, BarChart, FunnelChart, TreeMap, GaugeChart) |

2. Cliquer sur 'Appliquer'
3. Dans la section 'Séries', ajouter une nouvelle Série

<br>

## Création d'une Série
Pour créer une nouvelle Série, remplissez les champs suivants :

| Champ       | Description                                                                 |
|-------------|-----------------------------------------------------------------------------|
| Name        | Nom de la série                                                             |
| Operation   | Opération à effectuer (Somme, moyenne, comptage, plus haut, plus bas)       |
| Value       | Champ concerné par l'opération                                              |
| Category    | Champ catégorisé par l'opération                                            |
| Filters     | Condition souhaitée pour filtrer les données                                |

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

Le module LineChart propose un affichage comme ceci :

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

Le module GaugeChart propose un affichage sous forme d'histogramme, comme ceci :

<img src="images/gaugechart_1.png" alt="Exemple de TreeMap" width="600">

<br>

### Configuration :

Suivez les étapes de la section [Création d'un KPI](#création-dun-kpi) en sélectionnant "GaugeChart" comme type. Ajoutez également le champ suivant :

| Champ         | Description                                                                   |
|---------------|-------------------------------------------------------------------------------|
| KeyValue      | Valeur de référence maximale de la jauge                                      |

<img src="images/gaugechart_3.png" alt="KPI TreeMap" width="1500">

<br>