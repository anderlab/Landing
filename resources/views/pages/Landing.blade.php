@extends('layouts.default')
@section('title', 'LockSEK')
@section('content')
<section class="pb_cover_v3 overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1 pb_slant-light" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <h2 class="heading mb-3">LockSEK</h2>
            <div class="sub-heading">
              <p class="mb-4">LockSEK es una plataforma para administrar llaves para cerraduras electronicas accionadas por dispositivos USB </p>
              <p class="mb-5"><a class="btn btn-success btn-lg pb_btn-pill smoothscroll" href="#section-contact"><span class="pb_font-14 text-uppercase pb_letter-spacing-1">Contacta con nosotros</span></a></p>
            </div>
          </div> 
          <div class="col-md-1">
          </div>
          <div class="col-md-5 relative align-self-center">
            
            <form action="#" class="bg-white rounded pb_form_v1">
              <h2 class="mb-4 mt-0 text-center">REGISTRATE</h2>
              <div class="form-group">
                <input type="text" class="form-control pb_height-50 reverse" placeholder="Nombre">
              </div>
              <div class="form-group">
                <input type="text" class="form-control pb_height-50 reverse" placeholder="Apellidos">
              </div>
              <div class="form-group">
                <input type="email" class="form-control pb_height-50 reverse" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control pb_height-50 reverse" placeholder="Contraseña">
              </div>
              <div class="form-group">
                <input type="password" class="form-control pb_height-50 reverse" placeholder="Repite la Contraseña">
              </div>
    
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg btn-block pb_btn-pill  btn-shadow-blue" value="Registrarse">
              </div>
            </form>

          </div> 
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="pb_section bg-light pb_slant-white pb_pb-250" id="section-features">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-6 text-center mb-5">
            <h2>Caracteristicas de nuestra aplicación</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md- col-sm-6">
            <div class="media d-block pb_feature-v1 text-left">
              <div class="pb_icon"><i class="ion-ios-bookmarks-outline pb_icon-gradient"></i></div>
              <div class="media-body">
                <h5 class="mt-0 mb-3 heading">Diseño sencillo</h5>
                <p class="text-sans-serif">Esta aplicación tiene un diseño sencillo, con explicaciones breves y claras para que cualquier persona pueda entender como funciona</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md- col-sm-6">
            <div class="media d-block pb_feature-v1 text-left">
              <div class="pb_icon"><i class="ion-ios-speedometer-outline pb_icon-gradient"></i></div>
              <div class="media-body">
                <h5 class="mt-0 mb-3 heading">Rapida de usar</h5>
                <p class="text-sans-serif">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md- col-sm-6">
            <div class="media d-block pb_feature-v1 text-left">
              <div class="pb_icon"><i class="ion-ios-infinite-outline pb_icon-gradient"></i></div>
              <div class="media-body">
                <h5 class="mt-0 mb-3 heading">Posibilidades ilimitadas</h5>
                <p class="text-sans-serif">Podemos registrar tantas llaves y cerraduras como quedamos.</p>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="pb_section pb_slant-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5">
            <img src="{{asset('assets/img/candado.png')}}" alt="Image placeholder" class="img-fluid">
          </div>
          <div class="col-lg-8 pl-md-5 pl-sm-0">
            <div class="row">
              <div class="col">
                <h2>Cerradura electronica</h2>
                <p class="pb_font-20">Administra tus cerraduras electronicas de una forma sencilla y eficaz</p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg">
                
                <div class="media pb_feature-v2 text-left mb-1 mt-5">
                  <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i class="ion-ios-bookmarks-outline pb_icon-gradient"></i></div>
                  <div class="media-body">
                    <h3 class="mt-2 mb-2 heading">Minimal Design</h3>
                    <p class="text-sans-serif pb_font-16">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                  </div>
                </div> 
                
                <div class="media pb_feature-v2 text-left mb-1 mt-5">
                  <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i class="ion-ios-infinite-outline pb_icon-gradient"></i></div>
                  <div class="media-body">
                    <h3 class="mt-2 mb-2 heading">Unlimited Posibilities</h3>
                    <p class="text-sans-serif pb_font-16">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                  </div>
                </div> 

              </div>
              <div class="col-lg">
                
                <div class="media pb_feature-v2 text-left mb-1 mt-5">
                  <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i class="ion-ios-speedometer-outline pb_icon-gradient"></i></div>
                  <div class="media-body">
                    <h3 class="mt-2 mb-2 heading">Fast Loading</h3>
                    <p class="text-sans-serif pb_font-16">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                  </div>
                </div>

                <div class="media pb_feature-v2 text-left mb-1 mt-5">
                  <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i class="ion-ios-color-filter-outline  pb_icon-gradient"></i></div>
                  <div class="media-body">
                    <h3 class="mt-2 mb-2 heading">Component Based Design</h3>
                    <p class="text-sans-serif pb_font-16">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                  </div>
                </div>    

              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="pb_section bg-light pb_slant-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 order-2">
            <img src="{{asset('assets/img/pendrive.png')}}" alt="Image placeholder" class="img-fluid">
          </div>
          <div class="col-lg-8 pr-md-5 pr-sm-0 order-1  mb-5">
            <div class="row">
              <div class="col">
                <h2>Llave USB</h2>
                <p class="pb_font-20">Administra, crea y elimina tus llaves de forma sencilla y rapida</p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg">
                
                <div class="media pb_feature-v2 text-left mb-1 mt-5">
                  <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i class="ion-ios-bookmarks-outline pb_icon-gradient"></i></div>
                  <div class="media-body">
                    <h3 class="mt-2 mb-2 heading">Con un diseño sencillo y facil de utilizar</h3>

                  </div>
                </div> 
                
                <div class="media pb_feature-v2 text-left mb-1 mt-5">
                  <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i class="ion-ios-infinite-outline pb_icon-gradient"></i></div>
                  <div class="media-body">
                    <h3 class="mt-2 mb-2 heading">Sin limites</h3>
                    
                  </div>
                </div> 

              </div>
              <div class="col-lg">
                
                <div class="media pb_feature-v2 text-left mb-1 mt-5">
                  <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i class="ion-ios-speedometer-outline pb_icon-gradient"></i></div>
                  <div class="media-body">
                    <h3 class="mt-2 mb-2 heading">De forma rapida</h3>
                    
                  </div>
                </div>

                  

              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="pb_section pb_slant-light pb_pb-220" id="section-contact">
      <div class="container">
        <div>
          <section>
            <div>
              <div class="row" >
                <div class="col-sm-12">
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                      <div>
                        <h2>CONTÁCTANOS</h2>
                      </div>
                      <form action="form" method="post" data-form-title="CONTACTANOS">
                      @csrf
                        <input type="hidden" data-form-email="true">
                        <div class="form-group">
                          <input type="text" class="form-control" name="nombre" required="" placeholder="Nombre*" data-form-field="Name">
                        </div>
                        <div class="form-group">
                          <input type="email" class="form-control" name="email" required="" placeholder="Email*" data-form-field="Email">
                        </div>
                        <div class="form-group">
                          <textarea class="form-control" name="mensaje" required="" placeholder="Mensaje*" rows="7" data-form-field="Message"></textarea>
                        </div>
                        <div>
                          <button type="submit" class="btn btn-lg btn-primary">CONTÁCTANOS</button>
                        </div>
                      </form>
                    </div>
                    <div class="col-sm-4 col-sm-offset-2">
                    <img src="{{asset('assets/img/sobre.png')}}" alt="Image placeholder" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
      </div>
    </section>
    <!-- END section -->

    <section class="pb_section bg-light pb_slant-white" id="section-pricing">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-6 text-center mb-5">
            <h2>Precios</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md">
            <div class="pb_pricing_v1 p-5 border border-primary text-center bg-white">
              <h3>Uso de nuestra aplicación</h3>
              <span class="price"><sup>€</sup>0<span></span></span>
              <p class="pb_font-15">Utiliza nuestra plataforma de forma gratuita</p>
              <p class="mb-0"><a href="#" role="button" class="btn btn-primary btn-shadow-blue">Empezar</a></p>
            </div>
          </div>
          <div class="col-md">
            <div class="pb_pricing_v1 p-5 border border-primary text-center bg-white">
              <h3>Cerraduras recomendadas</h3>
              <span class="price"><span>Desde</span><sup>€</sup>19</span>
              <p class="pb_font-15">Compra tu cerradura aqui</p>
              <p class="mb-0"><a href="#" role="button" class="btn btn-primary btn-shadow-blue">Ver vendedores</a></p>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- ENDs ection -->

    <section class="pb_section pb_slant-white" id="section-faq">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-6 text-center mb-5">
            <h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>FAQ</strong></h5>
            <h2>Preguntas Frecuentes</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md">
            <div id="pb_faq" class="pb_accordion" data-children=".item">
              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq1" aria-expanded="true" aria-controls="pb_faq1" class="pb_font-22 py-4">¿Es seguro?</a>
                <div id="pb_faq1" class="collapse show" role="tabpanel">
                  <div class="py-3">
                  <p>Sí, ya que el sistema de llaves funciona con claves cifradas, únicas, e independientes que permiten el acceso a la cerradura..</p>
                  .</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq2" aria-expanded="false" aria-controls="pb_faq2" class="pb_font-22 py-4">¿Esta disponible en mi pais?</a>
                <div id="pb_faq2" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p>Actualmente nuestro producto esta displonible unicamente en España.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq3" aria-expanded="false" aria-controls="pb_faq3" class="pb_font-22 py-4">¿Porque utilizar este sistema?</a>
                <div id="pb_faq3" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p>Este sistema es un sistema seguro, practico, sencillo y economico, hoy en dia cualquier persona tiene acceso a un USB en el que podremos guardar tantas llaves como queramos, ademas nuestra página web ofrece una interfaz sencilla y  explicaciones claras  de su funcionamiento.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq4" aria-expanded="false" aria-controls="pb_faq4" class="pb_font-22 py-4">¿Es rentable?</a>
                <div id="pb_faq4" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p> Sí, ya que este sistema te permite realizar copias de las llaves sin ningun coste adicional, ademas del bajo coste que supone adquirir un USB, lo mas caro es la cerradura y no tiene un coste demasiado elevado.</p>
                  </div>
                </div>
              </div>

              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq5" aria-expanded="false" aria-controls="pb_faq5" class="pb_font-22 py-4">¿Que pasa si no me funciona la llave/cerradura?</a>
                <div id="pb_faq5" class="collapse" role="tabpanel">
                  <div class="py-3">
                  <p>
                       Si tiene cualquier problema puede contactar con nuestro servicio al cliente:
                    <p>
                      Mediante correo electronico enviando un mensaje a:
                      <br>
                       <a>locksek@support.com</a>
                       <br>
                      O por telefono llamando a:
                      <br>
                      Tel: 987654321
                      <br>
                      Tel: 987654320 (24h Gratuito)
                    </p>
                    </p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

  @stop
  @section('loader')
  <!-- <div id="pb_loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#1d82ff"/></svg></div> -->

  @stop