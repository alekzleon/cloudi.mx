@extends('app')

@section('content')
    
<section class="hero-section" id="inicio">
    <div class="hero-slider owl-carousel">
      <div class="hs-item">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="hs-text">
                <h2><span>MARKETING</span> para empresas.</h2>
                <p>"¿Quieres llevar tu negocio al siguiente nivel en línea? Nuestro equipo de expertos en publicidad
                  en línea puede ayudarte a maximizar el potencial de tu presupuesto en Google y a llegar
                  a nuevos clientes de manera efectiva. ¡Contacta con nosotros hoy para
                  aumentar tus ventas y mejorar tu presencia en línea.</p>
                <a href="#" class="site-btn">CONTÁCTANOS</a>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="hr-img">
                <img src="{{ asset('img/marketing.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </section>

  <section class="concept-section spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-title">
            <h2>¿QUE PODEMOS HACER POR TU EMPRESA?</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <p>En <strong style="color: #FF2768;">Cloudi</strong> te ayudamos a crear estrategias de marketing digital con
            ayuda de campañas en Google Ads diseñadas de acuerdo a las necesidades de tu empresa,
            a sí aumentar significativamente su visibilidad en Línea. Esto puede ayuda a atraer más visitas a tu sitio
            web, redes sociales y aumentar el conocimiento de tu marca.
          </p>
          <p>Como resultado tu empresa llega a una audiencia mas amplia en línea, generando mas clientes potenciales que
            podrían convertirse en ventas. Los servicios de marketing digital y Google Ads pueden ayudar
            a dirigirse a los clientes adecuados y ofrecerles el mensaje corecto para aumentar la tasa de conversión.
          </p>
        </div>
      </div>
      <br>
      <div class="section-title" style="text-align: center;">
        <h3>NUESTROS SERVICIOS</h3>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="concept-item">
            <img src="{{ asset('img/concept/branding.png') }}" alt="">
            <h5>BRANDING Y MARKETING DIGITAL</h5>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="concept-item">
            <img src="{{ asset('img/concept/ads-social.png') }}" alt="">
            <h5>GOOGLE ADS Y REDES SOCIALES</h5>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="concept-item">
            <img src="{{ asset('img/concept/software.png') }}" alt="">
            <h5>DESARROLLO DE SOFTWARE</h5>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="concept-item">
            <img src="{{ asset('img/concept/seo.png') }}" alt="">
            <h5>POSICIONAMIENTO SEO</h5>
          </div>
        </div>
      </div>
    </div>
  </section>




  <section class="how-section spad set-bg" data-setbg="img/how-to-bg.jpg">
    <div class="container text-white">
      <div class="section-title">
        <h2>¿Cómo lo hacemos?</h2>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="how-item">
            <div class="hi-icon">
              <img src="{{ asset('img/icons/brain.png') }}" alt="">
            </div>
            <h4>Acercamiento</h4>
            <p> </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="how-item">
            <div class="hi-icon">
              <img src="{{ asset('img/icons/pointer.png') }}" alt="">
            </div>
            <h4>Generamos un plan</h4>
            
          </div>
        </div>
        <div class="col-md-4">
          <div class="how-item">
            <div class="hi-icon">
              <img src="{{ asset('img/icons/smartphone.png') }}" alt="">
            </div>
            <h4>Ejecutamos</h4>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-section" id="contacto">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 p-0">

          <div class="map"><iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d494.5460471630379!2d-103.39386155620538!3d20.616035538435906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ada811c0d947%3A0x8ca7460e2280fc64!2sAv.%20Crist%C3%B3bal%20Col%C3%B3n%204660%2C%20Parques%20Col%C3%B3n%2C%2045608%20San%20Pedro%20Tlaquepaque%2C%20Jal.!5e0!3m2!1ses-419!2smx!4v1681011152683!5m2!1ses-419!2smx"
              style="border:0" allowfullscreen></iframe></div>
        </div>
        <div class="col-lg-6 p-0">
          <div class="contact-warp">
            <div class="section-title mb-0">
              <h2>Es hora de ponernos en marcha</h2>
            </div>
            <p>Estas a un paso de poner en Línea a tu empresa y generar mas ventas, dejanos ser parte de este gran
              proyecto. Si estas interesado en alguno de nuestros servicios, por favor dejanos tus datos
              en el formulario que aparece a continuación. Estamos deseando saber más sobre ti y poder ofrecerte la
              mejor experiencia posible. No dudes en contactarnos si tienes alguna pregunta o necesitas
              información. ¡Esperamos tener noticias tuyas pronto! </p>
            <ul>
              <li>Zapopan, Jalisco.</li>
              <li>+54 33 2256 4763</li>
              <li>hola@cloudi.mx</li>
            </ul>
           
            @if ($errors->any())
            <p style="color: #FF2768">Oh! Hace falta algunos campos o la informción que nos compartió no pasa nuestras politicas de información. Favor de validarlo</p>
            <div class="alert alert-danger">
                <ul style="color: #FF2768">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form class="contact-from" action="{{ route('register') }}" method="POST">
                @csrf
              <div class="row">
                <div class="col-md-6 @error('name') is-invalid @enderror">
                  <input type="text" placeholder="NOMBRE" id="name" name="name" required value="{{ old('name') }}">
                </div>
                <div class="col-md-6 @error('company') is-invalid @enderror">
                  <input type="text" placeholder="EMPRESA" id="company" name="company" required value="{{ old('company') }}">
                </div>
                <div class="col-md-6 @error('phone') is-invalid @enderror">
                  <input type="text" placeholder="TELEFONO DE CONTACTO" id="phone" name="phone" required value="{{ old('phone') }}">
                </div>
                <div class="col-md-6 @error('service') is-invalid @enderror">
                  <input type="text" placeholder="SERVICIO DE INTERES" id="service" name="service" required value="{{ old('service') }}">
                </div>
                <div class="col-md-12 @error('email') is-invalid @enderror">
                  <input type="text" placeholder="EMAIL" name="email" id="email" required value="{{ old('email') }}">
                </div>
                <div class="col-md-12 @error('message') is-invalid @enderror">
                  <textarea placeholder="CUENTANOS MAS SOBRE TU EMPRESA" name="message" id="message" required value="{{ old('message') }}"></textarea>
                </div>
            </div>
            <button class="site-btn">ENVIAR</button>
            </form>
           
          </div>
        </div>
      </div>
    </div>
  </section>




  <section class="subscription-section spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="sub-text">
            <h2>Estamos convencidos que tenemos un plan para tu marca. </h2>
            <a href="#contacto" class="site-btn">CONTÁCTANOS</a>
          </div>
        </div>
        <div class="col-lg-7">
          <ul class="sub-list">
            <li><img src="{{ asset('img/icons/check-icon.png') }}" alt="">Branding y marketing digital</li>
            <li><img src="{{ asset('img/icons/check-icon.png') }}" alt="">Google ads & Administración de Redes Sociales</li>
            <li><img src="{{ asset('img/icons/check-icon.png') }}" alt="">Desarrollo de software a la medida</li>
            <li><img src="{{ asset('img/icons/check-icon.png') }}" alt="">Páginas web - Administración de hosting y dominios</li>
            <li><img src="{{ asset('img/icons/check-icon.png') }}" alt="">Posicionamiento SEO</li>
            <li><img src="{{ asset('img/icons/check-icon.png') }}" alt="">Consultoria en TI</li>
          </ul>
        </div>
      </div>
    </div>
  </section>


  <section class="premium-section spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-title">
            <h2>ALGUNOS CASOS DE ÉXITO</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <p>Nuestros clientes han confiado en nosotros para alcanzar sus objetivos y hacer crecer sus negocios. En esta
            sección, te presentamos algunos de los casos más destacados y te contamos cómo hemos trabajado mano a mano
            con nuestros clientes para alcanzar el éxito juntos. ¡Descubre cómo podemos ayudarte a ti también!
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="premium-item">
            <img src="{{ asset('img/clientes/gp.png') }}" alt="">
            <h4>GP ACCESORIES</h4>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="premium-item">
            <img src="{{ asset('img/clientes/magic.png') }}" alt="">
            <h4>MAGIC LAUNDRY</h4>            
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="premium-item">
            <img src="{{ asset('img/clientes/kuix.png') }}" alt="">            
            <h4>KUIX</h4>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="premium-item">
            <img src="{{ asset('img/clientes/jobs.png') }}" alt="">
            <h4>JOBBS</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection


