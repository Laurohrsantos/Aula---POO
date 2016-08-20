<?php

namespace APP\helpers;

class Common 
{

    /*
     * Funcao para limitar o numero de caracteres
     */
    public static function limita($str, $qtd) 
    {
        if (strlen($str) > $qtd) {
            $newStr = substr(strip_tags(html_entity_decode($str)), 0, $qtd) . '...';
        } else {
            return $str;
        }

        return $newStr;
    }

    /*
    * Funcao para transformar string de cnpj em saido no formato de cpf
    */
    public static function sCNPJ($cnpj)
    {
        $doisprimeiros = substr($cnpj, 0, 2);
        $tressegundos = substr($cnpj, 2, 3);
        $tresterceiros = substr($cnpj, 5, 3);
        $quatros = substr($cnpj, 8, 4);
        $doisultimos = substr($cnpj, 12, 2);

        $newCNPJ = $doisprimeiros.".".$tressegundos.".".$tresterceiros."/".$quatros."-".$doisultimos;

        return $newCNPJ;
    }
    
    /*
    * Funcao para transformar string de cpf em saido no formato de cpf
    */
    public static function sCPF($cpf)
    {
        $tresprimeiros = substr($cpf, 0, 3);
        $tressegundos = substr($cpf, 3, 3);
        $tresterceiros = substr($cpf, 6, 3);
        $doisultimos = substr($cpf, 9, 2);

        $newCpf = $tresprimeiros.".".$tressegundos.".".$tresterceiros."-".$doisultimos;

        return $newCpf;
    }

    /*
    * Funcao para transformar string de telefone em saido no formato de telefone com o nono digito
    */
    public static function sFone($fone)
    {
        if (strlen($fone) === 10):

            $doisprimeiros = substr($fone, 0, 2);
            $quatroprimeiros = substr($fone, 2, 4);
            $quatrosegundos = substr($fone, 6, 4);

            $newFone = "(".$doisprimeiros.") ".$quatrosegundos." - ".$quatrosegundos;

            return $newFone;

        else:

            $doisprimeiros = substr($fone, 0, 2);
            $novodigito = substr($fone, 2, 1);
            $quatroprimeiros = substr($fone, 3, 4);
            $quatrosegundos = substr($fone, 7, 4);

            $newFone = "(".$doisprimeiros.") ".$novodigito." ".$quatrosegundos." - ".$quatrosegundos;

            return $newFone;

        endif;  
    }     

}