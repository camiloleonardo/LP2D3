<?php
include 'Curso.php';

$cursosYoutube = [
    new Curso("Curso de PHP", "https://youtu.be/TfsO0BGvGn0?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_"),
    new Curso("Curso de JavaScript", "https://www.youtube.com/watch?v=1-w1RfGIov4&list=PLHz_AreHm4dlsK3Nr9GVvXCbpQyHQl1o1"),
    new Curso("Curso de Redes", "https://www.youtube.com/watch?v=QkMbqL8QD9w&list=PLHz_AreHm4dkd4lr9G0Up-W-YaHYdTDuP"),
    new Curso("Curso de Linux Básico", "https://youtu.be/6nN2EglOqCM?list=PLHz_AreHm4dlIXleu20uwPWFOSswqLYbV"),
];

exibirCursos($cursosYoutube);
?>
