import * as $ from 'jquery';
import 'jquery-datetimepicker/build/jquery.datetimepicker.full.min.js';
import 'jquery-datetimepicker/build/jquery.datetimepicker.min.css';

export default (function () {
  
  $.datetimepicker.setLocale('id');
  
  $('.date').datetimepicker({
    timepicker:false,
    format:'Y-m-d'
  }).attr('autocomplete', "off");

  $('.date2').datetimepicker({
    timepicker:false,
    format:'d-m-Y'
  }).attr('autocomplete', "off");
  
  $('.date-time').datetimepicker({
    format:'Y-m-d H:i:s'
  }).attr('autocomplete', "off");
}())
