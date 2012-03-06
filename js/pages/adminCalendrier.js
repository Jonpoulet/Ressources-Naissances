var eventId;

$(document).ready(function() {
	$('#types-atelier div.external-event').each(function() {
	
		var eventObject = {
			title: $.trim($(this).text()), // use the element's text as the event title
			backgroundColor: $(this).css('background-color'),
			id: $(this).attr('id_type_atelier')
		};
		
		$(this).data('eventObject', eventObject);
		
		$(this).draggable({
			zIndex: 999,
			revert: true,
			revertDuration: 0
		});
		
	});

	$('#calendrier-admin').fullCalendar({
		editable: true,
		droppable: true,
		firstDay: 1,
		firstHour: 6,
		allDaySlot: false,
		defaultView: 'agendaWeek',
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
	        eventSources: [{
			url: 'Actions/obtenirAteliers.php',
			allDayDefault: false
		}],
		eventRender: function(event, element) {

	        },
		eventClick: function(event) {
			eventId = event.id;
			$("#dlg-modif").dialog("open");

			$.getJSON('Actions/detailsAtelierJSON.php', {id: event.id}, function(data) {
				$('#animatrice').val(data.animatrice);
			});

			return false;
		},
		loading: function(bool) {
			if (bool) $('#loading').show();
			else $('#loading').hide();
		},
		drop: function(date, allDay) {
			var originalEventObject = $(this).data('eventObject');
			var copiedEventObject = $.extend({}, originalEventObject);
			
			copiedEventObject.start = date;
			copiedEventObject.allDay = allDay;

			var datefin = new Date(date);
			datefin.setHours(date.getHours() + 1);

			copiedEventObject.end = datefin;

			// Envoie l'atelier au serveur
			$.ajax({
				url: "Actions/ajouterAtelier.php",
				data: "id_type=" + originalEventObject.id + "&date_debut=" + date + "&date_fin=" + datefin + "&animatrice=Paul",
				success: function(data){
					// Assigne l'id de l'atelier venant d'être ajouté
					copiedEventObject.id = data;
					$('#calendrier-admin').fullCalendar('renderEvent', copiedEventObject, true);
				}
			});
		},
		eventDrop: function(event,dayDelta,minuteDelta,allDay,revertFunc) {
			$.ajax({
				url: "Actions/deplacerAtelier.php",
				data: "id=" + event.id + "&joursDelta=" + dayDelta + "&minutesDelta=" + minuteDelta,
				success: function(data){

				}
			});
		},
		eventResize: function(event,dayDelta,minuteDelta,revertFunc) {
			$.ajax({
				url: "Actions/redimensionnerAtelier.php",
				data: "id=" + event.id + "&joursDelta=" + dayDelta + "&minutesDelta=" + minuteDelta,
				success: function(data){

				}
			});
		}	
	});

	
	$("#dlg-modif").dialog({
			autoOpen: false,
			draggable: false,
			height: 300,
			width: 350,
			modal: true});

	$('#btn-supprimer').button();
	$('#btn-supprimer').click(function(){
		$.ajax({
			url: "Actions/supprimerAtelier.php",
			data: {id: eventId},
			success: function() {
				$("#dlg-modif").dialog('close');
				$('#calendrier-admin').fullCalendar('removeEvents', eventId);
			}
		});
	});
});