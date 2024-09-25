<?php


$crayon = ["bleue", "rouge", "vert"];

for ($i=0; $i < $crayon[$i]; $i++){
    
    if ($crayon[$i] == "bleue"){
        print "La couleur " . $crayon[$i] . " est une couleur rare\n";
    } elseif ($crayon[$i] == "rouge"){
        print "C'est un crayon de couleur rouge, c'est commun! \n";
    } else {
        print "Ce crayon a une couleur extra \n";
    }
}

function ajouterCouleur($liste, $couleur){
    $liste[] = $couleur;
    print_r ($liste);
}

function supprimerCouleur($liste, $couleur){
    unset($liste[array_search($couleur, $liste)]);
    print_r ($liste);
}

function rechercherCouleur($liste, $couleur){
    for ($i = 0; $i < $liste[$i]; $i++){
        if ($liste[$i] == $couleur){
            echo "true\n";
        } elseif ($liste[$i] != $couleur) {
            echo "false\n";
        } else {
            echo "Pouvez vous répéter la question? \n";
        }
    }
}

ajouterCouleur($crayon, "violet");
supprimerCouleur($crayon, "rouge");
rechercherCouleur($crayon, "bleue");

print_r ($crayon);

echo "Fin du programme \n";

?>
