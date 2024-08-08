<?php

function page_script($path)
{
?>
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>src/plugins/sweetalert2/sweetalert2.css">
    <script src="<?php echo $path; ?>vendors/scripts/core.js"></script>
    <script src="<?php echo $path; ?>vendors/scripts/script.min.js"></script>
    <script src="<?php echo $path; ?>vendors/scripts/process.js"></script>
    <script src="<?php echo $path; ?>vendors/scripts/layout-settings.js"></script>
    <script src="<?php echo $path; ?>src/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="<?php echo $path; ?>src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo $path; ?>vendors/scripts/jvectormap-setting.js"></script>
    <script src="<?php echo $path; ?>src/plugins/jQuery-Knob-master/jquery.knob.min.js"></script>
    <script src="<?php echo $path; ?>vendors/scripts/knob-chart-setting.js"></script>
    <script src="<?php echo $path; ?>src/plugins/slick/slick.min.js"></script>
    <script src="<?php echo $path; ?>src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
    <script src="<?php echo $path; ?>src/plugins/cropperjs/dist/cropper.js"></script>
    <script src="<?php echo $path; ?>src/plugins/jquery-steps/jquery.steps.js"></script>
    <script src="<?php echo $path; ?>vendors/scripts/steps-setting.js"></script>
    <script src="<?php echo $path; ?>src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo $path; ?>src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo $path; ?>src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo $path; ?>src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo $path; ?>src/plugins/datatables/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo $path; ?>src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo $path; ?>src/plugins/datatables/js/buttons.print.min.js"></script>
    <script src="<?php echo $path; ?>src/plugins/datatables/js/buttons.html5.min.js"></script>
    <script src="<?php echo $path; ?>src/plugins/datatables/js/buttons.flash.min.js"></script>
    <script src="<?php echo $path; ?>src/plugins/datatables/js/pdfmake.min.js"></script>
    <script src="<?php echo $path; ?>src/plugins/datatables/js/vfs_fonts.js"></script>
    <script src="<?php echo $path; ?>vendors/scripts/datatable-setting.js"></script>
    <script src="<?php echo $path; ?>src/plugins/sweetalert2/sweetalert2.all.js"></script>
    <script src="<?php echo $path; ?>src/plugins/sweetalert2/sweet-alert.init.js"></script>
    <script src="<?php echo $path; ?>src/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="<?php echo $path; ?>vendors/scripts/range-slider-setting.js"></script>
    <script src="<?php echo $path; ?>src/plugins/plyr/dist/plyr.js"></script>
    <script src="https://cdn.shr.one/1.0.1/shr.js"></script>
    <script src="<?php echo $path; ?>src/plugins/switchery/switchery.min.js"></script>
    <script src="<?php echo $path; ?>src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
    <script src="<?php echo $path; ?>src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
    <script src="<?php echo $path; ?>vendors/scripts/advanced-components.js"></script>
    <!-- <script src="<?php echo $path; ?>src/plugins/apexcharts/apexcharts.min.js"></script> -->
    <!-- <script src="<?php echo $path; ?>vendors/scripts/apexcharts-setting.js"></script> -->
    <script src="<?php echo $path; ?>src/plugins/fullcalendar/fullcalendar.min.js"></script>
    <script src="<?php echo $path; ?>vendors/scripts/calendar-setting.js"></script>
    <script src="<?php echo $path; ?>src/plugins/jquery-asColor/dist/jquery-asColor.js"></script>
    <script src="<?php echo $path; ?>src/plugins/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="<?php echo $path; ?>src/plugins/jquery-asColorPicker/jquery-asColorPicker.js"></script>
    <script src="<?php echo $path; ?>vendors/scripts/colorpicker.js"></script>
    <script src="<?php echo $path; ?>src/plugins/jquery-steps/jquery.steps.js"></script>
    <script src="<?php echo $path; ?>vendors/scripts/steps-setting.js"></script>
    <script src="<?php echo $path; ?>src/plugins/fancybox/dist/jquery.fancybox.js"></script>
    <!-- <script src="<?php echo $path; ?>src/plugins/highcharts-6.0.7/code/highcharts.js"></script> -->
    <!-- <script src="https://code.highcharts.com/highcharts-3d.js"></script> -->
    <!-- <script src="<?php echo $path; ?>src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script> -->
    <!-- <script src="<?php echo $path; ?>vendors/scripts/highchart-setting.js"></script> -->
    <script src="<?php echo $path; ?>src/plugins/cropperjs/dist/cropper.js"></script>
    <script src="<?php echo $path; ?>src/plugins/cropperjs/dist/cropper-init.js"></script>
    <script src="<?php echo $path; ?>src/plugins/dropzone/src/dropzone.js"></script>
    <script>
        Dropzone.autoDiscover = false;
        $(".dropzone").dropzone({
            addRemoveLinks: true,
            removedfile: function(file) {
                var name = file.name;
                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            }
        });

        plyr.setup({
            tooltips: {
                controls: !0
            },
        });

        window.addEventListener('DOMContentLoaded', function() {
            var image = document.getElementById('image');
            var cropBoxData;
            var canvasData;
            var cropper;

            $('#modal').on('shown.bs.modal', function() {
                cropper = new Cropper(image, {
                    autoCropArea: 0.5,
                    dragMode: 'move',
                    aspectRatio: 3 / 3,
                    restore: false,
                    guides: false,
                    center: false,
                    highlight: false,
                    cropBoxMovable: false,
                    cropBoxResizable: false,
                    toggleDragModeOnDblclick: false,
                    ready: function() {
                        cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
                    }
                });
            }).on('hidden.bs.modal', function() {
                cropBoxData = cropper.getCropBoxData();
                canvasData = cropper.getCanvasData();
                cropper.destroy();
            });
        });

        jQuery(document).ready(function() {
            jQuery('.product-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                infinite: true,
                speed: 1000,
                fade: true,
                asNavFor: '.product-slider-nav'
            });
            jQuery('.product-slider-nav').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '.product-slider',
                dots: false,
                infinite: true,
                arrows: false,
                speed: 1000,
                centerMode: true,
                focusOnSelect: true
            });
            $("input[name='demo3_22']").TouchSpin({
                initval: 1
            });
        });
    </script>
<?php
}
