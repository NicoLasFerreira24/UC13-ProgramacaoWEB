<html>

    <head>

        <title>Aula de PHP</title>

    </head>

    <body>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, labore aliquam! Laboriosam vel, sapiente debitis totam quidem ullam omnis eveniet saepe incidunt hic aut id? Consequuntur ut saepe repudiandae recusandae.</p>

        <?php

            echo "Nicolas Ferreira";

        ?>

        <br> 

        <?php

            print "Senac Marília"

        ?>

        <br>

        <!-- Comentário em HTML -->

        <?php

        // Comentário em PHP

        /* 
            COMENTÁRIO EM
            VÁRIAS 
            LINHAS
        */
        
        $nomecompleto = "Nicolas Ferreira";
        $idade = 24;
        $status = true;
        $salario = 1320.50;


        echo $nomecompleto." ".$idade;
        echo "<br>";
        echo "$nomecompleto $idade Anos";
        echo '<br>';
        echo '$nomecompleto $idade Anos';


        $logosenac = "https://www.sp.senac.br/o/senac-theme/images/logo_senac_default.png";

        ?>

        <img src = "<?= $logosenac ?>" alt = "Senac Marília">

    </body>

</html>