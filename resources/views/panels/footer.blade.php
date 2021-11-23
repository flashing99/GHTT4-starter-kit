<!-- BEGIN: Footer-->
<footer
    class="footer footer-light {{ $configData['footerType'] === 'footer-hidden' ? 'd-none' : '' }} {{ $configData['footerType'] }}">
    <p class="clearfix mb-0">
        <span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy;
            <script>
                document.write(new Date().getFullYear())
            </script><a class="ms-25" href="http://groupe-htt.com/" target="_blank">
                Groupe Hôtellerie, Tourisme et Thermalisme.</a>,
            <span class="d-none d-sm-inline-block">Tous les droits sont réservés.</span>
        </span>
        <span class="float-md-end d-none d-md-block"> directeur des systèmes d'Information - DSI
            <i data-feather="server"></i></span>
    </p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->
