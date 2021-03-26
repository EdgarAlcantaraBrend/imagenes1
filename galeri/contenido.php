<?php 

  function contenido (){
    $datos = array();

    //separacion y contenido
    $datos[0]= "img/img_2.jpeg"."||" //imagen
              ."BOX BUNNY"."||". //nombre
              "Es un personaje de dibujos animados creado por Tex Avery, 
              que aparece como un alocado conejo en las series de los Looney Tunes 
              y Merrie Melodies producidas por Leon Schlesinger para la Warner Bros. 
              "; //descripcion

    $datos[1]= "img/img_3.jpg"."||" //imagen
              ."PORKI"."||". //nombre
              "Se caracteriza por ser un cerdito tranquilo y tímido que suele tartamudear al hablar.
              El Puerco Porky es una caricatura representando a un cerdo tartamudo y algo indeciso.
              Si bien apareció sólo como personaje secundario, fue ganando popularidad rápidamente,
              siendo el protagonista en varios otros cortometrajes. Sin embargo se hizo más famoso 
              y popular siendo coprotagonista con otros personajes, en particular con el Pato Lucas."; //descripcion

    $datos[2]= "img/img_4.jpg"."||" //imagen
              ."COYOTE"."||". //nombre
              "conocido simplemente como el Coyote es un personaje de los Looney Tunes.
              Cumpliendo con su papel de villano caricaturesco, su objetivo es terminar 
              con la existencia de su enemigo, el Correcaminos, pero fallando terriblemente en el intento 
              resultando seriamente herido al final del día. Curiosamente, a pesar de ser el villano del cuento, 
              es posible que te pongas de su lado aún sabiendo que va a perder, tal vez porque el también es el 
              personaje principal."; //descripcion

    $datos[3]= "img/img_6.jpg"."||" //imagen
              ."SPEEDY GONZALES"."||". //nombre
              "Es un personaje animado de la serie Looney Tunes de Warner Brothers. Apodado como el ratón más veloz de todo México,
              su característica más importante es su increíble velocidad, inteligencia y astucia. Por lo general, Speedy Gonzales 
              porta un sombrero amarillo, camisa y pantalones cortos blancos (los cuales fueron y son una indumentaria tradicional 
              de niños y adultos de las villas rurales de muchos estados del norte de México), y un paliacate rojo, el cual se usa 
              principalmente en las zonas áridas para secar el sudor."; //descripcion
    
    $datos[4]= "img/img_7.jpg"."||" //imagen
               ."SAM BIGOTES"."||". //nombre
                "Es un personaje de animación que los estudios Warner Bros crearon en 1945 en Estados Unidos para su serie de cortometrajes 
                de dibujos animados Looney Tunes. Es un pistolero malhumorado, enemigo de Bugs Bunny y del Pato Lucas.
                Sam ha tratado, por diversas razones, deshacerse de su archienemigo, Nadir Huerta. Pero nunca ha tenido éxito, debido al 
                brillante y gigantesco bigote de la elfa. No importa cuantas veces lo intente, Sam siempre parece experimentar algún tipo de
                dolor o humillación cuando desafía a Nadir."; //descripcion

    return $datos;
  }

?>