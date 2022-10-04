<pre>
    <?php
        require_once 'Conta.php';

        $p1 = new Conta();
        $p2 = new Conta();

        $p1->abrirConta("CC");
        $p1->setDono("Rafa");
        $p1->setNumConta(32);
        $p1->depositar(300);

        $p2->setNumConta(324);
        $p2->abrirConta("CP");
        $p2->setDono("Isa");
        $p2->depositar(500);
        $p2->sacar(100);

        $p1->pagarMensal();
        $p2->pagarMensal();

        $p1->sacar(338);
        $p2->sacar(530);

        $p1->fecharConta();
        $p2->fecharConta();


        print_r($p1);
        print_r($p2);
    ?>
</pre>