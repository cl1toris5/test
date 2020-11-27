<?php
/**
 * Template Name: Homepage
 *
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php get_header('header.php'); ?>
</head>
<body>
<!--------------------------------------------------------------------------->

<a href="/contact" class="label-ask-for">Zapytaj o wycenę</a>

<div class="container-fluid homepage-main-section">
	<div>
		<h1>Simple Solutions<br>transport lądowy</h1>
		<p>logistyka kierowana zaufaniem</p>
	</div>
</div>

<div class="container about-us-section" id="about-us-section">
  <div class="row">

    <div class="col-md-6 col-6">
      <h2 class="h2heading-text">Biznes jedzie z <strong>Simple Solutions!</strong></h2>
      <p class="paragraph-section">KAES Logistics to firma, którą tworzą ludzie doświadczeni, o szerokiej wiedzy, uczciwi i niezwykle zaangażowani w swoje codzienne zadania. Jesteśmy zespołem profesjonalistów z branży logistycznej, którzy potrafią rozwiązać Twoje problemy z zakresu operacji logistycznych, transportowych i spedycyjnych w Polsce i na arenie międzynarodowej.</p>
    </div>
    
    <div class="col-md-6 col-6">
      <img src="http://localhost/cloudy/wp-content/uploads/2020/11/handshake-business-men-concept-min-scaled.jpg" alt="">
    </div>
  
  </div>
</div>

<div class="container about-us-section-two">
  <div class="row">
    <div class="col-md-6 col-6">
      <img src="http://localhost/cloudy/wp-content/uploads/2020/11/truck-2920533_1920-min.jpg" alt="">
    </div>
    <div class="col-md-6 col-6">
      <h2 class="h2heading-text">Jedziemy do celu i na czas!</h2>
      <p class="paragraph-section">
        Odpowiedzialnie i kompleksowo pomagamy naszym klientom dostarczać ich produkty i rozwiązywać problemy transportowe.
          <ul class="paragraph-section">
            <li style="margin-bottom: 1rem;">Obsługujemy firmy, sieci handlowe, koncerny, sklepy e-commerce oraz indywidualnych przedsiębiorców. Usługi, które świadczymy, są wykonywane z zachowaniem najwyższych standardów towarzyszących branży logistycznej oraz spedycyjnej.</li>
            <li>Zapewniamy terminową i bardzo sprawną realizację zleceń transportowych zgodnie z wymogami przedstawionymi przez klientów, wytycznymi Prawa Przewozowego oraz Konwencji CMR. Dbamy o stałą, uczciwą komunikację, aby Klienci byli zawsze dobrze, zgodnie z prawdą, poinformowani o statusie realizacji zlecenia.</li>
          </ul>
      </p>
    </div>
  </div>
</div>

<div class="container-fluid about-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-12 highlights-section">
        <div>
          <span>1400</span>
          <p>Biur i centrów logistycznych</p>
        </div>
        <div>
          <span>80+</span>
          <p>Krajów na świecie</p>
        </div>
        <div>
          <span>55000</span>
          <p>Pracowników</p>
        </div>
      </div>

      <div class="col-md-6 col-12">
        <?php the_field('form-apply-to-job'); ?>
      </div>
    </div>
  </div>
</div>


<div class="container our-services">
  <div class="row">
    <div class="col-md-6 col-12">
      <img src="http://localhost/cloudy/wp-content/uploads/2020/11/cooperation-analyst-chart-professional-paper-economics-min-scaled.jpg" alt="">
    </div>
    <div class="col-md-6 col-12">
      <h2 class="h2heading-text">Zakres usług</h2>
      <p class="paragraph-section">Świadczymy usługi przewozu krajowego i międzynarodowego w tym:</p>
      <ul class="paragraph-section">
        <li>organizacja przewozów</li>
        <li>aranżacja przeładunków</li>
        <li>doradztwo spedycyjne</li>
        <li>przewozy dedykowane</li>
      </ul>
      <p>Obsługujemy ładunki całopojazdowe oraz drobnicowe w relacjach pomiędzy wszystkimi krajami Unii Europejskiej.</p>
    </div>
  </div>
</div>

<div class="container our-services-second">

  <h4>Gwarantjemy naszym klientom wysokiej jakości usługi oferując:</h4>

  <div class="row">

  <div class="col-md-4 col-6">
      <div class="box-inside-service">
        <div class="img-box"><img src="wp-content/uploads/2020/11/idea.png" alt=""></div>
        <span>wykwalifikowana kadra spedytorów</span>
      </div>
    </div>

    <div class="col-md-4 col-6">
      <div class="box-inside-service">
        <div class="img-box"><img src="wp-content/uploads/2020/11/bilingual.png" alt=""></div>
        <span>obsługa w językach: angielski i niemiecki</span>
      </div>
    </div>

    <div class="col-md-4 col-6">
      <div class="box-inside-service">
        <div class="img-box"><img src="wp-content/uploads/2020/11/package.png" alt=""></div>
        <span>monitoring ładunków</span>
      </div>
    </div>

    <div class="col-md-4 col-6">
      <div class="box-inside-service">
        <div class="img-box"><img src="wp-content/uploads/2020/11/pickup-car-e1605104401409.png" alt=""></div>
        <span>dostępność aut od 1.5t do 24t</span>
      </div>
    </div>

    <div class="col-md-4 col-6">
      <div class="box-inside-service">
        <div class="img-box"><img src="wp-content/uploads/2020/11/route.png" alt=""></div>
        <span>aranżację przeładunków oraz optymalizację tras przejazdu</span>
      </div>
    </div>

    <div class="col-md-4 col-6">
      <div class="box-inside-service">
        <div class="img-box"><img src="wp-content/uploads/2020/11/construction-machine.png" alt=""></div>
        <span>nowoczesny tabor (EUR 5/6)</span>
      </div>
    </div>

    <div class="col-md-4 col-6">
      <div class="box-inside-service">
        <div class="img-box"><img src="wp-content/uploads/2020/11/tank-truck.png" alt=""></div>
        <span>obsługe zleceń ADR</span>
      </div>
    </div>

    <div class="col-md-4 col-6">
      <div class="box-inside-service">
        <div class="img-box"><img src="wp-content/uploads/2020/11/inventory.png" alt=""></div>
        <span>scentralizowane "controls desks" dla poszczególnych sektorów rynku</span>
      </div>
    </div>

    <div class="col-md-4 col-6">
      <div class="box-inside-service">
        <div class="img-box"><img src="wp-content/uploads/2020/11/computer.png" alt=""></div>
        <span>możliwość integracji własnego systemu TMS</span>
      </div>
    </div>
</div>
</div>

<div class="container for-client-section">
  <div class="row">
  <div class="col-md-6 col-6">
      <img src="http://localhost/cloudy/wp-content/uploads/2020/11/hands-with-laptop-virtual-world-map-min-scaled.jpg" alt="">
    </div>
    <div class="col-md-6 col-6">
      <h2 class="h2heading-text">Twój biznes poruszy się z KAES</h2>
      <p class="paragraph-section">
      Drogi Kliencie! Poszukujesz rzetelnej firmy, która pomoże Ci zorganizować transport i będzie służyć pomocą również w sprawach formalnych?
      Poznaj nasze możliwości i doświadczaj nowej jakości obsługi w branży logistycznej!<br>Przygotujemy dla Ciebie ofertę, która pomoże zoptymalizować Twoje potrzeby związane z operacjami logistycznymi i transportem. Zapewnimy Ci wsparcie i rzetelną komunikację na temat każdego realizowanego zlecenia. Aż 99% Klientów, którzy skorzystali z naszej oferty, wraca do nas z kolejnym zapytaniem ofertowym!
      </p>
    </div>
  </div>
</div>


<div class="container for-cooperation-section">
  <div class="row">

    <div class="col-md-12 col-12">
      <h2 class="h2heading-text">Ruszaj w trasę z KAES Logistics!</h2>
        <p class="paragraph-section">
          Dowiedz się, jakie warunki współpracy oferujemy przewoźnikom. Razem możemy więcej!
        </p>
    </div>

    <div class="col-md-6 col-6 coop-box">
      <img src="http://localhost/cloudy/wp-content/uploads/2020/11/truck.png" alt="">
      <span>Stałe zlecenia</span>
      <p class="paragraph-section">Satysfakcja Klientów z naszych usług jest bardzo wysoka. Wszyscy pracujemy na ich zadowolenie, dzięki czemu możesz mieć dostęp do stałych zleceń i pracować w sprzyjającej rozwojowi atmosferze.</p>
    </div>

    <div class="col-md-6 col-6 coop-box">
      <img src="http://localhost/cloudy/wp-content/uploads/2020/11/employee.png" alt="">
      <span>Koordynator opiekun</span>
      <p class="paragraph-section">Jesteśmy zespołem, a Twoja praca wymaga wsparcia, kiedy Ty jesteś w drodze. Zapewniamy opiekę koordynatora, który pozostaje z Tobą w kontakcie przez 24/h na dobę. W przypadku pojawienia się problemów rozwiązujemy je wspólnie.</p>
    </div>

    <div class="col-md-6 col-6 coop-box">
      <img src="http://localhost/cloudy/wp-content/uploads/2020/11/wallet.png" alt="">
      <span>Elastyczne rozliczenia</span>
      <p class="paragraph-section">Rozliczenia, które pomagają Ci się rozwijać? Porozmawiajmy o indywidualnych, dopasowanych do Twoich możliwości terminach płatności.</p>
    </div>

    <div class="col-md-6 col-6 coop-box">
      <img src="http://localhost/cloudy/wp-content/uploads/2020/11/customer-service.png" alt="">
      <span>Komunikacja i wsparcie</span>
      <p class="paragraph-section">Możesz na nas liczyć, a my możemy ufać Tobie! Stawiamy na jasną komunikację, która służy rozwojowi. Pamiętaj, że w naszej pracy logistyka zawsze kierowana jest zaufaniem.</p>
    </div>

  </div>
</div>

<div class="container-fluid any-questions-fluid">
<div class="container any-questions">
  <div class="row">
    <div class="col-md-6 col-12">
      <h2 class="h2heading-text">Czy masz do nas pytania?</h2>
      <p class="paragraph-section">Nasi eksperci są gotowi do pomocy. Skontaktuj się z nami, a znajdziemy potrzebne Ci rozwiązanie</p>
      <div style="width: 80%; text-align: center;">
        <button>Kontakt</button>
      </div>
    </div>
    <div class="col-md-6 col-12">
      <img src="wp-content/uploads/2020/11/gorgeous-woman-headphones-using-microphones-arms-folded-min-scaled-e1604949663736.jpg" alt="help-desk">
    </div>
  </div>
</div>
</div>

<!--------------------------------------------------------------------------->
    <?php get_footer('footer.php'); ?>
  <script>
  </script>
</body>
</html>
