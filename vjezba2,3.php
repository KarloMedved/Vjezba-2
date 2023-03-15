<?php


if (in_array(10, [0, 2])) {
    echo "10 je veće od 0\n";
} elseif (in_array(1, [0, 2])){
echo "bar\n";

} else {
    echo "uvjet nije istinit\n";
}



switch ('lord') {
    case 'harry potter' :
        echo "Nice Story Bro\n";
        break;
    case 'lord' :
        echo "Foo\n";
        break;
    default:
    echo "kaj\n";
    break;
}
