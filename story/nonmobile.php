  <div class="flipbook-viewport">
    <div class="container">
      <div class="flipbook">
        <div id="cover">
          <div class="row">
            <center><img src="pages/cover.png" width="350px" height="475px" style="padding-top:20px;"/></center>
          </div>
          <div class="row">
            <center><p class="teks-small">Tentang Dua Orang</p></center>
          </div>
        </div>
        <div>
          <div class="row">
            <center><img src="pages/page1.png" width="350px" height="475px" style="padding-top:20px;"/></center>
          </div>
          <div class="row">
            <center><p class="teks-super-small">Dua orang dengan latar belakang berbeda<br>satu di desa dan satu di kota</p></center>
          </div>
        </div>
        <div>
          <div class="row">
            <center><img src="pages/page2.png" width="350px" height="475px" style="padding-top:20px;"/></center>
          </div>
          <div class="row">
            <center><p class="teks-super-small">Dua orang yang sama-sama memimpikan makara</p></center>
          </div>
        </div>
        <div>
          <div class="row">
            <center><img src="pages/page3.png" width="350px" height="475px" style="padding-top:20px;"/></center>
          </div>
          <div class="row">
            <center><p class="teks-super-small">Dua orang dengan reaksi berbeda saat diterima di fakultasnya</p></center>
          </div>
        </div>
        <div>
          <div class="row">
            <center><img src="pages/page4.png" width="350px" height="475px" style="padding-top:20px;"/></center>
          </div>
          <div class="row">
            <center><p class="teks-super-small">Dua orang yang pertama kali berjumpa di badan eksekutif mahasiswa</p></center>
          </div>
        </div>
        <div>
          <div class="row">
            <center><img src="pages/page5.png" width="350px" height="475px" style="padding-top:20px;"/></center>
          </div>
          <div class="row">
            <center><p class="teks-super-small">Dua orang yang akhirnya saling berbagi mimpi dan cerita</p></center>
          </div>
        </div>
        <div>
          <div class="row">
            <center><img src="pages/page6.png" width="350px" height="475px" style="padding-top:20px;"/></center>
          </div>
          <div class="row">
            <center><p class="teks-super-small">Dua orang yang acapkali bertengkar hingga bosan melihatnya</p></center>
          </div>
        </div>
        <div>
          <div class="row">
            <center><img src="pages/page7.png" width="350px" height="475px" style="padding-top:20px;"/></center>
          </div>
          <div class="row">
            <center><p class="teks-super-small">Dua orang yang tetap ada dalam suka maupun duka</p></center>
          </div>
        </div>
        <div>
          <div class="row">
            <center><img src="pages/page8.png" width="350px" height="475px" style="padding-top:20px;"/></center>
          </div>
          <div class="row">
            <center><p class="teks-super-small">Satu orang yang bertanya<br>dan<br> satu orang yang menjawab "Ya"</p></center>
          </div>
        </div>
        <div>
          <div class="row">
            <center><img src="pages/end.jpg" width="350px" height="475px" style="padding-top:20px;"/></center>
          </div>
          <div class="row">
            <center><p class="teks-super-small">Dua orang yang bersegera <br>mengarungi bahteranya dan<br>bertekad bahagia selamanya</p></center>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div style="position:absolute;top:1%;right:3%">
    <h1 style="text-align:center;color:#827c7c;font-size:16px;">Balik halaman buku dengan klik ujung halaman </br> atau menggunakan panah kiri/kanan</h1>
  </div>


  <script type="text/javascript">

    function loadApp() {
  // Create the flipbook
  var flipbook = $('.flipbook').turn({
      // Width
      width:922,
      // Height
      height:600,
      // Elevation
      elevation: 50,      
      // Enable gradients
      gradients: true,      
      // Auto center this flipbook
      autoCenter: true
    });

  // using key
  $(window).on('keydown', function (e) {
    var key = e.which || e.keyCode;
    if (key == 39) {
      flipbook.turn("next");
    }
    else if (key == 37) {
      flipbook.turn("previous");
    }
  });

  jQuery( window ).on( "swipeleft", function( event ) { 
    $('#flipbook').turn('next');
  } );


  jQuery( window ).on( "swiperight", function( event ) { 
    $('#flipbook').turn('previous');
  } );

}

// Load the HTML4 version if there's not CSS transform

yepnope({
  test : Modernizr.csstransforms,
  yep: ['lib/turn.js'],
  nope: ['lib/turn.html4.min.js'],
  both: ['css/basic.css'],
  complete: loadApp
});

</script>