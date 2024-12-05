<?php

namespace View;

class ViewPessoa {

    function imprime(\Model\ModelPessoa $oPessoa) {
        echo "<p><b>{$oPessoa->getNome()}</b></p>";
    }

}
