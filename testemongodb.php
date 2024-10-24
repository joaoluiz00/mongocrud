<?php
	//verifique se a extensão MongoDB esta carregada
	if (!extension_loaded("mongodb")){
		echo "<h1> a entensão MOngoDB não esta instalda.</h1>";
    }else{

    echo "<h1> Funcionou!!!!!!</h1>";
    }