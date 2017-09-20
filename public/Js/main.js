$(function() {

$('#loading').hide();
$('#a-registro').show();
$('#a-descarga').show();
$('#a-login').show();
$('#a-cerrar').hide();

$( window ).load( function() {

					$( '.sldr' ).each( function() {
						var th = $( this );
						th.sldr({
							focalClass    : 'focalPoint',
							offset        : th.width()/2,
							sldrWidth     : 'auto',
							nextSlide     : th.nextAll( '.sldr-nav.next:first' ),
							previousSlide : th.nextAll( '.sldr-nav.prev:first' ),
							selectors     : th.nextAll( '.selectors:first' ).find( 'li' ),
							toggle        : th.nextAll( '.captions:first' ).find( 'div' ),
							sldrInit      : sliderInit,
							sldrStart     : slideStart,
							sldrComplete  : slideComplete,
							sldrLoaded    : sliderLoaded,
							sldrAuto      : true,
							sldrTime      : 3000,
							hasChange     : true
						});
					});

				});
				function sliderInit( args ) {

				}

				/**
				 * When individual slides are loaded
				 * @param {object} args the slides, callback, and config of the slider
				 * @return null
				 */
				function slideLoaded( args ) {

				}

				/**
				 * When the full slider is loaded, after the DOM is manipulated
				 * @param {object} args the slides, callback, and config of the slider
				 * @return null
				 */
				function sliderLoaded( args ) {

				}

				/**
				 * Before the slides change focal points
				 * @param {object} args the slides, callback, and config of the slider
				 * @return null
				 */
				function slideStart( args ) {

				}

				/**
				 * After the slides are done changing focal points
				 * @param {object} args the slides, callback, and config of the slider
				 * @return null
				 */
				function slideComplete( args ) {

				}
				console.log('datepicker');
$('input[data-role="datepicker"]').each(function(i, e)
{
var _this = $(this);
_this.datepicker({
dateFormat: 'yy-mm-dd',
yearRange: "-80:+20",
changeMonth: true,
changeYear: true,
beforeShow: function(e, o)
{
_this.datepicker('option', 'minDate', null);
_this.datepicker('option', 'maxDate', null);

if (_this.attr('data-fecha-inicio'))
_this.datepicker('option', 'minDate', _this.attr('data-fecha-inicio'));

if (_this.attr('data-fecha-fin'))
_this.datepicker('option', 'maxDate', _this.attr('data-fecha-fin'));
},
beforeShowDay: function(date)
{
var dias = _this.attr('data-dias');
var fechas_importantes = _this.attr('data-fechas-importantes');
var day = date.getDay();

var validar_dias = function(dias, festivo, day)
{
var resultado;
if(dias)
{
var dias_habiles = [];
var res = dias.split(',');

$.each(res, function(i, d)
{
switch(d)
{
case 'lunes':
dias_habiles.push(1);
break;
case 'martes':
dias_habiles.push(2);
break;
case 'miercoles':
dias_habiles.push(3);
break;
case 'jueves':
dias_habiles.push(4);
break;
case 'viernes':
dias_habiles.push(5);
break;
case 'sabado':
dias_habiles.push(6);
break;
case 'domingo':
dias_habiles.push(0);
break;
}
});

if ($.inArray(day, dias_habiles) != -1)
{
resultado = [true, festivo ? 'festivo' : '', festivo ? 'Festivo' : ''];
} else {
resultado = [false, festivo ? 'festivo' : '', festivo ? 'Festivo' : ''];
}
} else {
resultado = [true, festivo ? 'festivo' : '', festivo ? 'Festivo' : ''];
}

return resultado;
}

if(fechas_importantes)
{
var fechas = fechas_importantes.split(',');
var fecha = date.toISOString().slice(0, 10);

if($.inArray(fecha, fechas) != -1)
return validar_dias(dias, true, day);
else
return validar_dias(dias, false, day);

} else {
return validar_dias(dias, false, day);
}

return [true, '', ''];
}
});
});
});