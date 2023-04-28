//evento que se ejecuta al cargar completamente la página
$(document).ready(function(){
    //alert("Bienvenido");
    var n1 = 0;
    var n2 = 0;
    var res="";
    

    //evento clic del boton submit
    $("#frmsuma").submit(function(evt){
        evt.preventDefault();//evita el envio de datos al servidor
        n1 = parseInt($("#txtn1").val());
        n2 = parseFloat($("#txtn2").val());

              
       res=n1*n2;
    
       
       $("#divres").html("<h4>Total  a pagar  : "  + res + "</h4>");


    });


    
    




    
});

