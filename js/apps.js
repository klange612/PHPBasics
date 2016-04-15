
var $select = $('<select></select>');

$('.menu').append($select);

$('.menu1 li').each(function() {
	var $option = $('<option></option>');
	$option.text($(this).text());
	$select.append($option);
//	console.log($item.text());
//	$('.selectOptions').append("<option>" + $(this).text() + "</option>");
});

$button = $("<button>Go</button>");
$('.menu').append($button);
$button.click(function(event) {
	event.preventDefault();
	var item = $(this).text();
	console.log(item);
});

$('.menu1').hide();
