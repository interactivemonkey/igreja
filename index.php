<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

//$container = get_theme_mod( 'understrap_container_type' );
?>


        <section>
                <div class="container-fluid" style="background-color: #1b1b1b">
                         <div class="container" style="padding-top: 30px; padding-bottom: 30px">
                                    <div class="row" style="border-bottom:1px solid #444">
                                             <h3>Agenda</h3>
                                 </div>
                                 <div class="row">
                                       <!-- item -->
                                         <div class="col-lg-4">
                                                <div class="row">
                                                         <div class="col-lg-4 text-center">
                                                             <h1 style="font-size: 72px">29</h1>
                                                             <p class="cor-paragrafo" style="margin-top:10px">NOV</p>
                                                         </div>
                                                         <div class="col-lg-7" style="padding-top: 20px">
                                                                <p style="color:#ff9900; ">SEXTA</p>
                                                                <p style="font-size:12px" class="cor-paragrafo"> 20:00 | Espetáculo de Natal </p>
                                                         </div>
                                                         <div class="col-lg-1"><div class="skew negative"></div></div>
                                                </div>
                                         </div>
                                         <!-- item -->

                                         <!-- item -->
                                         <div class="col-lg-4">
                                                <div class="row">
                                                         <div class="col-lg-4 text-center">
                                                             <h1 style="font-size: 72px">12</h1>
                                                             <p class="cor-paragrafo" style="margin-top:10px">OUT</p>
                                                         </div>
                                                         <div class="col-lg-7" style="padding-top: 20px">
                                                                <p style="color:#ff9900 ">SABADO</p>
                                                                <p style="font-size:12px" class="cor-paragrafo"> 20:00 | Espetáculo de Natal </p>
                                                         </div>
                                                         <div class="col-lg-1"><div class="skew negative"></div></div>
                                                </div>
                                         </div>
                                         <!-- item -->

                                         <!-- item -->
                                         <div class="col-lg-4">
                                                <div class="row">
                                                         <div class="col-lg-4 text-center">
                                                             <h1 style="font-size: 72px">02</h1>
                                                             <p class="cor-paragrafo" style="margin-top:10px">OUT</p>
                                                         </div>
                                                         <div class="col-lg-7" style="padding-top: 20px">
                                                                <p style="color:#ff9900; ">SEGUNDA</p>
                                                                <p style="font-size:12px" class="cor-paragrafo"> 20:00 | Espetáculo de Natal </p>
                                                         </div>
                                                         <div class="col-lg-1"><div class="skew negative"></div></div>
                                                </div>
                                         </div>
                                         <!-- item -->

                                 </div>

                         </div>
                </div>
        </section>


       <section id="content-block-life" style="background-color: #ededed">
        <div class="container-fluid pr-0 pl-0">
            <div class="row no-gutters justify-content-left">
                <div class="col-12 col-lg-6 picture d-none d-md-flex">

                </div>
                <div class="col-12 col-lg-5 align-self-center py-5">
                    <div class="pt-5 d-none d-md-block"></div>
                    <div class="pt-5 d-none d-md-block"></div>
                    <div class="p-3 p-md-4 titulo-cor">
                        <h1 class="px-3 px-md-5 pb-3 pb-md-4 text-center text-md-left">QUEM SOMOS</h1>
                        <p class="px-3 px-md-5 text-center text-md-left">Igreja Evangélica Assembléia de Deus - Ministério do Belém em Poços de Caldas - MG - Pregando e Videndo o Evangelho de nosso Senhor e Salvador Jesus Cristo</p>
                          <div class="mt-5 px-2 pb-2 px-md-5 pb-md-3 text-center text-md-left">
                            <a href="/minha-historia" class="btn btn-primary text-uppercase py-3 px-5">Saiba mais</a>
                          </div>
                    </div>
                    <div class="pt-5 d-none d-md-block"></div>
                    <div class="pt-5 d-none d-md-block"></div>
                </div>
            </div>
        </div>
    </section>


 <section class="d-flex" style="background-color:#fff; margin-bottom:90px;">
        <div class="container-fluid">
                <div class="container">
                     <div class="row  titulo-cor borda-titulo paddb-20"><h1 class="text-center">Artigos</h1> </div>
                      <div class="row d-flex justify-content-center" style="margin-top:15px;">
                               <figure class="snip1529">
                                      <img src="<?php echo get_template_directory_uri() ?>/img/news1a.jpg" alt="pr-sample13" />
                                      <div class="date"><span class="day">28</span><span class="month">Apr</span></div>
                                      <figcaption>
                                        <h3>An Abstract Post Heading</h3>
                                        <!-- <p>Which is worse, that everyone has his price, or that the price is always so low.</p>-->
                                      </figcaption>
                                      <div class="hover"><i class="fas fa-external-link-alt"></i></div>
                                      <a href="#"></a>
                                </figure>

                                 <figure class="snip1529">
                                      <img src="<?php echo get_template_directory_uri() ?>/img/news2a.jpg" alt="pr-sample13" />
                                      <div class="date"><span class="day">28</span><span class="month">Apr</span></div>
                                      <figcaption>
                                        <h3>An Abstract Post Heading</h3>

                                      </figcaption>
                                      <div class="hover"><i class="fas fa-external-link-alt"></i></div>
                                      <a href="#"></a>
                                </figure>

                                <figure class="snip1529"><img src="<?php echo get_template_directory_uri() ?>/img/news1a.jpg" alt="pr-sample23" />
                                          <div class="date"><span class="day">08</span><span class="month">June</span></div>
                                          <figcaption>
                                            <h3>The World Ended Yesterday</h3>

                                          </figcaption>
                                          <div class="hover"><i class="fas fa-external-link-alt"></i></div>
                                          <a href="#"></a>
                                </figure>
                        </div>
             </div>
        </div>
    </section>


   <section class="d-flex" style="background: linear-gradient( rgba(12, 84, 136, 0.9) 100%, rgba(0, 0, 0, 0.9)100%), url(<?php echo get_template_directory_uri() ?>/img/capa2.png); background-position: center center; background-repeat: no-repeat;background-attachment: fixed; background-size: cover; height:550px; background-color:#464646;">

       <div class="container">

               <div class="row">
                        <div class="col-4">
                               <div class="pt-5 d-none d-md-block"></div>
                               <div class="pt-5 d-none d-md-block"></div>
                               <div class="pt-5 d-none d-md-block"></div>
                               <div class="row">
                                      <span style="font-size: 5.0vw; color: #fff; font-family: Montserrat; font-weight: 900;">NOSSOS</span>
                                </div>

                                <div class="row ">
                                     <span style="font-size: 2.2vw; color: #fff; font-family: Montserrat; font-weight: 400; line-height: 90px;">DEPARTAMENTOS</span>
                                 </div>
                        </div>
                        <div class="col-8">
                             <div class="row">

                                 <div class="col-4">
                                       <div class="row">
                                               <img class="img-fluid mx-auto d-block" src="<?php echo get_template_directory_uri() ?>/img/crianca.png">
                                       </div>
                                       <div class="row justify-content-md-center">
                                              <div class="col-12" style="margin-top:5px">
                                                    <h3 class="text-center">INFANTIL</h3>
                                               </div>
                                               <div class="col-12" style="margin-top:2px">
                                                    <p class="text-center" style="color:#ff9900">Departamento</p>
                                           </div>
                                       </div>
                                   </div>

                                    <div class="col-4">
                                       <div class="row">
                                               <img class="img-fluid mx-auto d-block" src="<?php echo get_template_directory_uri() ?>/img/joven.png">
                                       </div>
                                       <div class="row justify-content-md-center">
                                              <div class="col-12" style="margin-top:5px">
                                                    <h3 class="text-center">JOVEN</h3>
                                               </div>
                                               <div class="col-12" style="margin-top:2px">
                                                    <p class="text-center" style="color:#ff9900">Departamento</p>
                                           </div>
                                       </div>
                                   </div>

                                    <div class="col-4">
                                       <div class="row">
                                               <img class="img-fluid mx-auto d-block" src="<?php echo get_template_directory_uri() ?>/img/mulheres.png">
                                       </div>
                                       <div class="row justify-content-md-center">
                                              <div class="col-12" style="margin-top:5px">
                                                    <h3 class="text-center">MULHERES</h3>
                                               </div>
                                               <div class="col-12" style="margin-top:2px">
                                                    <p class="text-center" style="color:#ff9900">Departamento</p>
                                           </div>
                                       </div>
                                   </div>

                               </div>


                               <div class="row" style="margin-top:20px">

                                 <div class="col-6">
                                               <img class="img-fluid mx-auto d-block" src="<?php echo get_template_directory_uri() ?>/img/missao1.png">
                                </div>

                                <div class="col-6">
                                               <img class="img-fluid mx-auto d-block" src="<?php echo get_template_directory_uri() ?>/img/orquestra.png">
                                </div>

                               </div>



                        </div>
               </div>
        </div>
   </section>


         <section>
              <div class="container" style="">
                     <h1 class="text-center" style="color:#000; margin-bottom:10px" > Faça amigos, Junte-se à Família de Deus!</h1>
                     <p class="text-center">Porque onde estiverem dois ou três reunidos em meu nome, aí estou eu no meio deles. <strong class="text-right" style="color:#ff9900">Mateus 18:20</strong></p>
              </div>
         </section>


          <section>
              <div class="container-fluid borde" style="background-color:#222; margin-top: 80px;  padding-bottom: 40px">
                   <div class="container">
                             <h4 class="text-center" style="color:#fff; margin-bottom:10px" > ACESSE E ASSISTA</h4>
                           <p class="text-center" style="font-size: 5.0vw; color: #fff; font-family: Montserrat; font-weight: 900; line-height: 90px;"><strong>CULTO</strong></p>
                           <p class="text-center" style="font-size: 3.5vw; color: #fff; font-family: Montserrat; font-weight: 400; line-height: 20px;">ONLINE</p>
                              <div class="row  justify-content-md-center" style="margin-top:60px"> <a href="/minha-historia" class="btn btn-primary text-uppercase py-3 px-5">assista</a></div>
                          <div class="row" style="margin-top:20px">
                                <div class="col-12"> <p class="text-center" style="color:#fff"><strong style="color:#ff9900">Culto Público</strong> | <i class="fas fa-clock"></i> Horário da Transmissão: 18:30 | Domingo</p></div>
                       </div>

                    </div>

              </div>
         </section>

          <section class="newsletter">
                 <div class="container">
                    <div class="col-12">
                              <h1 class="text-center" style="color:#000">FIQUE POR DENTRO DAS NOVIDADES</h1>
                              <p class="text-center" >Receba noticias do nosso site</p>
                    </div>
                    <div class="row" style="margin-top:25px">
                             <div class="content">
                                <div class="input-group">
                                     <input type="email" class="form-control" placeholder="Insira seu email">
                                     <span class="input-group-btn">
                                     <button class="btn btn-primary" type="submit">Inscrição</button>
                                     </span>
                                      </div>
                                </div>
                            </div>
                        </div>
          </section>



<?php get_footer();
