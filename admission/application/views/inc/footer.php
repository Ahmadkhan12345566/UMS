<footer class="footer footer-black  footer-white ">
    <div class="container-fluid">
        <div class="row">
<!--            <nav class="footer-nav">-->
<!--                <ul>-->
<!--                    <li>-->
<!--                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </nav>-->
<!--            <div class="credits ml-auto">-->
<!--              <span class="copyright">-->
<!--                ©-->
<!--                <script>-->
<!--                  document.write(new Date().getFullYear())-->
<!--                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim-->
<!--              </span>-->
<!--            </div>-->
        </div>
    </div>
</footer>
</div>
</div>

<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
<!--   Core JS Files   -->
<script src="<?php echo base_url()?>application/assets/js/core/jquery.min.js"></script>
<script src="<?php echo base_url()?>application/assets/js/core/popper.min.js"></script>
<script src="<?php echo base_url()?>application/assets/js/core/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>application/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="<?php echo base_url()?>application/assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url()?>application/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php echo base_url()?>application/assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url()?>application/assets/demo/demo.js"></script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        demo.initChartsPages();
    });

    $("#cnic").inputmask({"mask":"(99999-9999999-9"});
</script>
</body>

</html>