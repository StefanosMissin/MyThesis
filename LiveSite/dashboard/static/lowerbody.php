</div>
<!-- End Container fluid  -->
</div>
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer"> © 2018 Smart Homie </footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->





<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="assets/plugins/bootstrap/js/tether.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!--Menu sidebar -->
<script src="js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<!--Custom JavaScript -->
<script src="js/custom.min.js"></script>


<!-- Chartsjs.org -->
<script src="js/Chart.JS-2.7.2-bundle.js"></script>
<script src="charts/indoor_data/temperature/indoordata_temperature.js"></script>
<script src="charts/indoor_data/humidity/indoordata_humidity.js"></script>
<script src="charts/outdoor_data/temperature/outdoordata_temperature.js"></script>
<script src="charts/outdoor_data/humidity/outdoordata_humidity.js"></script>
<script src="js/Chart.JS-2.7.2-utils.js"></script>

<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->


<!-- Support Modal Script -->
<script>
    $('#SupportModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Support Form')
        modal.find('.modal-body input').val(recipient)
    })
</script>


<!-- // Current Time Script -->
<script>
    function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('clock').innerHTML =
            'Current Time:' + '  ' + h + ":" + m + ":" + s;
        var t = setTimeout(startTime, 500);
    }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i
        }; // add zero in front of numbers < 10
        return i;
    }
</script>

<!-- Notification Triggers -->
<script language="JavaScript">
    if (window.location.pathname + window.location.search == '/MyThesis/LiveSite/dashboard/index.php?acon') {

        $("#not-acon").removeClass("disp-not");

        $(".close").click(function () {
            $(this).parent().addClass("disp-not");
        });
    }
    if (window.location.pathname + window.location.search == '/MyThesis/LiveSite/dashboard/index.php?acoff') {

        $("#not-acoff").removeClass("disp-not");

        $(".close").click(function () {
            $(this).parent().addClass("disp-not");
        });
    }
    if (window.location.pathname + window.location.search == '/MyThesis/LiveSite/dashboard/index.php?dhon') {

        $("#not-dhon").removeClass("disp-not");

        $(".close").click(function () {
            $(this).parent().addClass("disp-not");
        });
    }
    if (window.location.pathname + window.location.search == '/MyThesis/LiveSite/dashboard/index.php?dhoff') {

        $("#not-dhoff").removeClass("disp-not");

        $(".close").click(function () {
            $(this).parent().addClass("disp-not");
        });
    }
</script>

<!-- Delete User Notification Script -->
<script language="JavaScript">
    if (window.location.pathname + window.location.search == '/MyThesis/LiveSite/dashboard/userstable.php?USERDELETED') {
        alert('USER DELETED');
    } else {
        console.log(location.pathname + window.location.search);
    }
</script>

<script type="text/javascript">
    function change_state() {
        alert('hello');
        $.get("status_update.php");
        return false;
    }
</script>

</body>

</html>