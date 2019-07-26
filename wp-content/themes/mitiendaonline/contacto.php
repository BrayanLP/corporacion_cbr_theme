<?php
/**
 *
 * Template Name: contacto
 *
 */
?>
<?php
get_header(); 
?>

       
            <section id="contacto">
                <div class="container">
                <div class="titulo other">
                    <h2><span><?php the_title(); ?></span></h2>
                </div>
                <form class="col s12">
                    <div class="row">
                    <div class="input-field col s12 m4 l4">
                        <input id="nombre" type="text" class="validate">           
                        <label for="nombre">Nombre Completo</label>
                    </div>         
                    <div class="input-field col s12 m4 l4">
                        <input id="email" type="email" class="validate">           
                        <label for="email">Correo Electrónico</label>
                    </div>
                    <div class="input-field col s12 m4 l4">
                        <input id="tel" type="tel" class="validate">           
                        <label for="tel">Telefono</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="mensaje" class="materialize-textarea"></textarea>           
                        <label for="mensaje">Ingrese su consulta..</label>
                    </div>
                    </div>
                    <div class="row">
                    <div class="input-field col s12"><a class="waves-effect waves-light btn bg-c3">Enviar</a></div>
                    </div>
                </form>
                </div>
      </section> 

<?php 
get_footer();
