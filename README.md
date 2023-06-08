# Documentation SAE s4
> Auteurs : Laurane MOURONVAL et Tom VALLART 

------------------
## Lancer le projet 
------------------
Outil(s) requis : Docker

Téléchargez l'archive SAE_s4.zip et décompressez là.
Ensuite, ouvrez un terminal et rendez vous dans le dossier SAE_s4.
Puis, tapez **docker-compose up** pour lancer le projet.

Le projet sera disponible à l'adresse localhost:8181

Pour arreter le docker, tapez **docker-compose stop**

------------------
## Fonctionnement du projet
------------------

Ce projet a pour but l'utilisation de threads pour optimiser l'execution de lancer de rayon. 

Le lancer de rayon permet de calculer des images en se basant sur un parcours inverse de la lumière dans une scène : on calcule le parcours d’un rayon provenant de la caméra. Pour plus de détails se référer à : https://fr.wikipedia.org/wiki/Ray_tracing.


Lorsque vous arrivez sur la page d'accueil appelée 'Calcul d'une image', vous pouvez cliquer sur le bouton 'Choisir un fichier'.


------------------
### Exemple de fichier à uploader :
 exemple: "simple.txt"

    // definition de la géométrie
    materiau 0.1 0.0 0.0  0.1 0.0 0.0  0.8 0.8 0.8  10.0
    sphere 0 0 -3.5     1
    
    materiau 0.2 0.2 0.2  0.8 0.8 0.8  0.0 0.0 0.0  0.0
    sphere -2 1 -5      1.5
    
    materiau 0.1 0.1 0.02  0.5 0.5 0.1  0.4 0.4 0.4  60.0
    sphere -0.5 0 -1.5  0.25
    
    polygone 4   2 -1 -1   2 -1 -5   -2 -1 -5   -2 -1 -1
    //plan 0 1 0 1
    
    // definition des sources
    source 0.00 2.0  0.0  0.8 0.8 0.8  
    source 0.25 3.0 -3.0  0.8 0.8 0.8 


------------------
Ensuite, vous pouvez cliquer sur le bouton 'Générer l'image'.
Les reglage dans l'application sont de la manière suivante : 
    nombre de rayons = 300
    nombre de threads = 10

------------------
## Technologies utilisées 
------------------
Java, PHP, HTML/CSS et Docker 