function nomeDoMes(numero){
    let dia;
    switch(numero){
        case 1:
            dia = "janeiro";
            break;
        
        case 2:
            dia = "fevereiro";
            break;

        case 3:
            dia = "março";
            break;

        case 4:
            dia = "abril";
            break;

        case 5:    
            dia = "maio";
            break;

        case 6:
            dia = "junho";
            break;  

        case 7:
            dia = "julho";
            break;  
            
        case 8:
            dia = "agosto";
            break;  

        case 9:
            dia = "setembro";
            break;
        
        case 10:
            dia = "outubro";
            break;  

        case 11:
            dia = "novembro";
            break;  

        case 12:
            dia = "dezembro";
            break;  
            
        default:
            console.log("Digite um numero de 1 a 12");
            break;
    }

    if(numero >= 1 && numero <= 12){
        return console.log(dia);
    }
    
}

nomeDoMes(1);

nomeDoMes(4);