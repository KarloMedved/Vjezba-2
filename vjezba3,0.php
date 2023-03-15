<?php



switch (date("N")) {
    case 1:
        echo "Danas je Ponedjeljak\n";
        break;
    case 2:
        echo "Danas je Utorak\n";
        break;
    case 3:
        echo "Danas je Srijeda\n";
        break;
    case 4:
        echo "Danas je Četvrtak\n";
        break;
    case 5:
        echo "Danas je Petak\n";
        break;
    case 6:
        echo "Danas je Subota\n";
        break;
    case 7:
        echo "Danas je Nedjelja\n";
        break;

    default:
        echo "Danas ne postoji\n";
        break;
}