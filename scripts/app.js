WebFontConfig = { google: { families: [ 'PT+Sans::latin,latin-ext,cyrillic' ] } };
(function() {
	var wf = document.createElement('script');
	wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
		'://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
	wf.type = 'text/javascript';
	wf.async = 'true';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(wf, s);
})();

function initializeMap() {
	var myLatlng = new google.maps.LatLng(42.681852,23.321974);
	var mapOptions = {
		zoom: 15,
		maxZoom: 16,
		minZoom: 14,
		center: new google.maps.LatLng(42.681852,23.321974),
		disableDefaultUI: true,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	var map = new google.maps.Map(document.getElementById("smallmap"), mapOptions);
	var marker = new google.maps.Marker({
		position: myLatlng,
		title:"init Lab"
	});
	marker.setMap(map);
}

function loadGMaps() {
	var script = document.createElement("script");
	script.type = "text/javascript";
	script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDgYOwy86bmyVzUkMARb_hhKD-eEYngSNE&sensor=false&callback=initializeMap";
	document.body.appendChild(script);
}

jQuery(document).ready(function ($) {

	if( $('body').hasClass('home') ) loadGMaps();

	$.getJSON('https://fauna.initlab.org/users/present.json', function(data) {

		$presence = $('#presence');
		$presence.html('<ul />');
		$presenceList = $presence.find('ul');

		var empty = true;
		$.each(data, function() {
			$person = $('<li></li>');
			$person.append('<span class="avatar"><img src="//www.gravatar.com/avatar/'+ this.email_md5 +'?s=50&d=retro" /></span>');
			$info = $('<span class="info"></span>');
			if (this.url) {
				$info.append('<strong><a href="'+ this.url +'">'+this.name+'</a></strong>');
			} else {
				$info.append('<strong>'+this.name+'</strong>');
			}
			if (this.twitter) {
				$info.append('<br><a href="https://twitter.com/'+ this.twitter +'">@'+this.twitter+'</a>');
			}
			$presenceList.append($person.append($info));
			empty = false;
		});

		if (empty) {
			$presence.find('ul').after('<p><strong>Всички ги е хванала липсата.</strong></p>');
		}

	});

	$('#flickr').jflickrfeed({
		limit: 9,
		qstrings: {
			id: '53081346@N03'
		},
		itemTemplate:
		'<li>' +
			'<a class="avatar" href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a>' +
		'</li>'
	});

	weekday = ["Неделя", "Понеделник", "Вторник", "Сряда", "Четвъртък", "Петък", "Събота"];
	month = ["Януари", "Февруари",	"Март", "Април", "Май", "Юни", "Юли", "Август", "Септември", "Октомври", "Ноември", "Декември", ];

	var twitter = new Codebird;
	twitter.setConsumerKey('bEUj1eykWIngaZv2uXjUw', '1OtBrGY1vCLOZULo1uiHDAyBCEiu31GP1reSF71Kkko');
	//twitter.setBearerToken('17506533-ODX0xmx2G3SWS9nLA1xygIetTA40kg23frxpw77VE');

	var $tweets = $('#tweets ul:eq(0)');
	twitter.__call(
		'search_tweets',
		'q=#initlab',
		function (reply) {
			var results = reply.statuses.slice(0, 6);
			$.each(results, function(){

				var date = new Date(this.created_at);

				$tweets.append(
					'<li>' +
						'<span class="tweet_user"><a href="https://twitter.com/' + this.user.screen_name + '">@' + this.user.screen_name + '</a></span>' +
						'<span class="tweet_time">' + ( date.getHours() < 10 ? '0' : '' ) + date.getHours() + ':' + ( date.getMinutes() == 0 ? '0' : '') + date.getMinutes() + ', ' + date.getDate() + ' ' + month[date.getMonth()] + ', ' + weekday[date.getDay()] + '</span>' +
						'<span class="cleaner"></span>' +
						'<span class="tweet_avatar"><img src="' + this.user.profile_image_url.replace("http:", "https:") +  '"></span>' +
						'<span class="tweet_text">' + this.text + '</span>' +
						//'<span class="tweet_source">' + this.source + '</span>' +
					'</li>'
				);
			});

		},
		true // this parameter required
	);


});
