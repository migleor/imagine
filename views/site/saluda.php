<div class="alert alert-success"><?= $mensaje ?></div>
<pre>
    <?php
    for($a=0;$a<count($numeros);$a++){
        echo $numeros[$a]."<br>";
    }
    ?>
</pre>
<div class="alert alert-info">Parametro Get <?= $get ?></div>