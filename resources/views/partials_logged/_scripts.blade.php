    <script src="{{asset('tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('tinymce/init-tinymce.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets_logged/js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets_logged/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets_logged/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets_logged/js/mdb.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets_logged/js/addons/datatables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets_logged/js/addons/datatables-select.min.js')}}"></script>
    <script src='https://unpkg.com/vue@2.6.10/dist/vue.min.js'></script>
    <script src='https://unpkg.com/vuetify@1.5.16/dist/vuetify.min.js'></script>
    <script id="rendered-js">
    Vue.prototype.$vuetify = Object.assign(Vue.prototype.$vuetify, {
      theme: {
        primary: '#3f51b5',
        secondary: '#b0bec5' },

      options: {
        customProperties: true } });
    new Vue({
      el: '#app',
      data: () => ({
        defaultButtonText: 'Upload File',
        selectedFile: null,
        isSelecting: false }),

      computed: {
        buttonText() {
          return this.selectedFile ? this.selectedFile.name : this.defaultButtonText;
        } },

      methods: {
        onButtonClick() {
          this.isSelecting = true;
          window.addEventListener('focus', () => {
            this.isSelecting = false;
          }, { once: true });

          this.$refs.uploader.click();
        },
        onFileChanged(e) {
          this.selectedFile = e.target.files[0];

          // do something
        } } });
    //# sourceURL=pen.js
</script>
    <script>
        new WOW().init();
    </script>
    <script>

    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    Ps.initialize(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

    // Data Picker Initialization
    $('.datepicker').pickadate();

    // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').material_select();
    });

    // Tooltips Initialization
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })

  </script>
    <script>

        // Small chart
        // $(function () {
        //   $('.min-chart#chart-sales').easyPieChart({
        //     barColor: "#FF5252",
        //     onStep: function (from, to, percent) {
        //       $(this.el).find('.percent').text(Math.round(percent));
        //     }
        //   });
        // });

        // Main chart
        // var ctxL = document.getElementById("lineChart").getContext('2d');
        // var myLineChart = new Chart(ctxL, {
        //   type: 'line',
        //   data: {
        //     labels: ["January", "February", "March", "April", "May", "June", "July"],
        //     datasets: [{
        //       label: "My First dataset",
        //       fillColor: "#fff",
        //       backgroundColor: 'rgba(255, 255, 255, .3)',
        //       borderColor: 'rgba(255, 255, 255)',
        //       data: [0, 10, 5, 2, 20, 30, 45],
        //     }]
        //   },
        //   options: {
        //     legend: {
        //       labels: {
        //         fontColor: "#fff",
        //       }
        //     },
        //     scales: {
        //       xAxes: [{
        //         gridLines: {
        //           display: true,
        //           color: "rgba(255,255,255,.25)"
        //         },
        //         ticks: {
        //           fontColor: "#fff",
        //         },
        //       }],
        //       yAxes: [{
        //         display: true,
        //         gridLines: {
        //           display: true,
        //           color: "rgba(255,255,255,.25)"
        //         },
        //         ticks: {
        //           fontColor: "#fff",
        //         },
        //       }],
        //     }
        //   }
        // });

        $(function() {
          $('#dark-mode').on('click', function (e) {

            e.preventDefault();

            $('footer, .card').toggleClass('dark-card-admin');
            $('body, .navbar').toggleClass('white-skin navy-blue-skin');
            $(this).toggleClass('white text-dark btn-outline-black');
            $('body').toggleClass('dark-bg-admin');
            $('h6, .card, p, td, th, i, li a, h4, input, label').not('#slide-out i, #slide-out a, .dropdown-item i, .dropdown-item').toggleClass('text-white');
            $('.btn-dash').toggleClass('grey blue').toggleClass('lighten-3 darken-3');
            $('.gradient-card-header').toggleClass('white black lighten-4');
            $('.list-panel a').toggleClass('navy-blue-bg-a text-white').toggleClass('list-group-border');

          });
        });

      </script>
