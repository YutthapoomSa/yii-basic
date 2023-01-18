<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
        'js/ace.js',
        'js/alerts.js',
        'js/avgrund.js',
        'js/bootstrap-table.js',
        'js/bt-maxLength.js',
        'js/c3.js',
        'js/calendar.js',
        'js/chart.js',
        'js/Chart.roundedBarCharts.js',
        'js/chartist.js',
        'js/circle-progress.js',
        'js/clipboard.js',
        'js/codeEditor.js',
        'js/codemirror.js',
        'js/context-menu.js',
        'js/cropper.js',
        'js/dashboard.js',
        'js/data-table.js',
        'js/dataTables.select.min.js',
        'js/db.js',
        'js/demo.js',
        'js/desktop-notification.js',
        'js/dragula.js',
        'js/dropify.js',
        'js/dropzone.js',
        'js/editorDemo.js',
        'js/file-upload.js',
        'js/flot-chart.js',
        'js/form-addons.js',
        'js/form-repeater.js',
        'js/form-validation.js',
        'js/formpickers.js',
        'js/google-charts.js',
        'js/google-maps.js',
        'js/hoverable-collapse.js',
        'js/iCheck.js',
        'js/inputmask.js',
        'js/ion-range-slider.js',
        'js/jq.tablesort.js',
        'js/jquery-file-upload.js',
        'js/jquery.cookie.js',
        'js/js-grid.js',
        'js/just-gage.js',
        'js/light-gallery.js',
        'js/listify.js',
        'js/mapael_example_1.js',
        'js/mapael_example_2.js',
        'js/mapael.js',
        'js/maps.js',
        'js/modal-demo.js',
        'js/morris.js',
        'js/no-ui-slider.js',
        'js/off-canvas.js',
        'js/owl-carousel.js',
        'js/paginate.js',
        'js/popover.js',
        'js/profile-demo.js',
        'js/progress-bar.js',
        'js/rickshaw.js.js',
        'js/select2.js',
        'js/settings.js',
        'js/sparkline.js',
        'js/tablesorter.js',
        'js/tabs.js',
        'js/template.js',
        'js/tight-grid.js',
        'js/toastDemo.js',
        'js/todolist.js',
        'js/typeahead.js',
        'js/wizard.js',
        'js/x-editable.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
