# inputMediaPaidMedia

**Description** : *Paid media, see here &raquo; for more info*

**Layer** : 216

```tl
inputMediaPaidMedia#c4103386 flags:# stars_amount:long extended_media:Vector<InputMedia> payload:flags.0?string = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>stars_amount</mark> | [`long`](type/long) | The price of the media in Telegram Stars |
| <mark>extended_media</mark> | [`Vector<InputMedia>`](type/InputMedia) | Photos or videos |
| **payload** | [`flags.0?string`](type/string) | Bots only, specifies a custom payload that will then be passed in updateBotPurchasedPaidMedia when a payment is made (this field will not be visible to the user) |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaPaidMedia(
	stars_amount : -8540412299443939466,
	extended_media : array(
		$client->inputMediaEmpty(),
		$client->inputMediaUploadedPhoto(
			spoiler : true,
			file : $client->inputFile(
				id : -322405146540069964,
				parts : 94,
				name : 'JONmEXRLciUw1IAH',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : -4644235079112148964,
					access_hash : -4809000617594236269,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			ttl_seconds : 47,
		),
		$client->inputMediaPhoto(
			spoiler : true,
			id : $client->inputPhotoEmpty(),
			ttl_seconds : 13,
		),
		$client->inputMediaGeoPoint(
			geo_point : $client->inputGeoPointEmpty(),
		),
		$client->inputMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : 'nP5VGADBbYz89N3J',
		),
		$client->inputMediaUploadedDocument(
			nosound_video : true,
			force_file : true,
			spoiler : true,
			file : $client->inputFile(
				id : 8681548314279916237,
				parts : 9,
				name : 'BdoZAmUNW6rxhgQj',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			thumb : $client->inputFile(
				id : 5523886205999292189,
				parts : 53,
				name : 'wxdYSK3staMLiAhG',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			mime_type : 'VtkrbxcjselZ6fgE',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 16,
					h : 33,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'vOiq0G197LBwhby8',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1142151.236328125,
					w : 7,
					h : 42,
					preload_prefix_size : 67,
					video_start_ts : 1757556.48046875,
					video_codec : '0vQsUYFNqdfCHrP4',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 32,
					title : 'N0HXcjQVkAmP6hwO',
					performer : 'j5xpZVPrbG3WKlIX',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'MXSv4LHhE95DN6ZK',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'P7em3a5KJNvW8hf1',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : -2563007893465924792,
					access_hash : 2461527730313582789,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 35,
			ttl_seconds : 88,
		),
		$client->inputMediaDocument(
			spoiler : true,
			id : $client->inputDocumentEmpty(),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 69,
			ttl_seconds : 19,
			query : 'IjKrl6ZYeXMdpwkN',
		),
		$client->inputMediaVenue(
			geo_point : $client->inputGeoPointEmpty(),
			title : 'Gmo4JcsPM3uwkjXn',
			address : 'Gybvpm8JItXER1aQ',
			provider : 'RDUAuS0Fd7QkMsqO',
			venue_id : 'mwjOCiuF3htcvTPH',
			venue_type : '3EiQdNmZLk7lCyVz',
		),
		$client->inputMediaPhotoExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 70,
		),
		$client->inputMediaDocumentExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 16,
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 36,
		),
		$client->inputMediaGame(
			id : $client->inputGameID(
				id : -7405852813709525226,
				access_hash : -1664688744778221334,
			),
		),
		$client->inputMediaInvoice(
			title : 'bv6n3lXxZHPCheO5',
			description : 'HqJONQSZ1pw3r4lU',
			photo : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 41,
				mime_type : 'vstfk1Ja9D6j3LBl',
				attributes : array(
					$client->documentAttributeImageSize(...),
					$client->documentAttributeAnimated(...),
					$client->documentAttributeSticker(...),
					$client->documentAttributeVideo(...),
					$client->documentAttributeAudio(...),
					$client->documentAttributeFilename(...),
					$client->documentAttributeHasStickers(...),
					$client->documentAttributeCustomEmoji(...),
				),
			),
			invoice : $client->invoice(
				test : true,
				name_requested : true,
				phone_requested : true,
				email_requested : true,
				shipping_address_requested : true,
				flexible : true,
				phone_to_provider : true,
				email_to_provider : true,
				recurring : true,
				currency : 'yewFHDQohC3gbqSG',
				prices : array(
					$client->labeledPrice(...),
				),
				max_tip_amount : 8302888992190887766,
				suggested_tip_amounts : array(3012544229649811158),
				terms_url : 'https://docs.liveproto.dev',
				subscription_period : 87,
			),
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			provider : '7LKw1yxEd2jfbinc',
			provider_data : $client->dataJSON(
				data : 'LH2ZD0NSiPm86j7o',
			),
			start_param : 'mJo4wiC3lxWnZ9Or',
			extended_media : $client->inputMediaEmpty(),
		),
		$client->inputMediaGeoLive(
			stopped : true,
			geo_point : $client->inputGeoPointEmpty(),
			heading : 28,
			period : 48,
			proximity_notification_radius : 5,
		),
		$client->inputMediaPoll(
			poll : $client->poll(
				id : 8941327404816095763,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 91,
				close_date : 51,
			),
			correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			solution : 'wKEO6xUI1tDe2R4Q',
			solution_entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 81,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 80,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 13,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 55,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 46,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 6,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 23,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 50,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 9,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 64,
					language : 'lDy39IzLtk6qPWRs',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 2,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 85,
					user_id : -317898884950236462,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 76,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 46,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 64,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 46,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 78,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 22,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 75,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 84,
					document_id : -4344672492828220006,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 26,
				),
			),
		),
		$client->inputMediaDice(
			emoticon : 'rPgosY3482cnaGMy',
		),
		$client->inputMediaStory(
			peer : $client->inputPeerEmpty(),
			id : 22,
		),
		$client->inputMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			optional : true,
			url : 'https://docs.liveproto.dev',
		),
		$client->inputMediaPaidMedia(
			stars_amount : -7256058043812473912,
			extended_media : array(
				$client->inputMediaEmpty(),
				$client->inputMediaUploadedPhoto(
					spoiler : true,
					file : $client->inputFile(...),
					stickers : array(
						$client->inputDocumentEmpty(...),
						$client->inputDocument(...),
					),
					ttl_seconds : 14,
				),
				$client->inputMediaPhoto(
					spoiler : true,
					id : $client->inputPhotoEmpty(...),
					ttl_seconds : 59,
				),
				$client->inputMediaGeoPoint(
					geo_point : $client->inputGeoPointEmpty(...),
				),
				$client->inputMediaContact(
					phone_number : '+1234567890',
					first_name : 'Tak',
					last_name : 'None',
					vcard : 'gacAxwUWDnjtXuMp',
				),
				$client->inputMediaUploadedDocument(
					nosound_video : true,
					force_file : true,
					spoiler : true,
					file : $client->inputFile(...),
					thumb : $client->inputFile(...),
					mime_type : '3ky9Wa0gqIRBPT2p',
					attributes : array(
						$client->documentAttributeImageSize(...),
						$client->documentAttributeAnimated(...),
						$client->documentAttributeSticker(...),
						$client->documentAttributeVideo(...),
						$client->documentAttributeAudio(...),
						$client->documentAttributeFilename(...),
						$client->documentAttributeHasStickers(...),
						$client->documentAttributeCustomEmoji(...),
					),
					stickers : array(
						$client->inputDocumentEmpty(...),
						$client->inputDocument(...),
					),
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 16,
					ttl_seconds : 95,
				),
				$client->inputMediaDocument(
					spoiler : true,
					id : $client->inputDocumentEmpty(...),
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 96,
					ttl_seconds : 7,
					query : 'lYJuazhAG9KNZRDn',
				),
				$client->inputMediaVenue(
					geo_point : $client->inputGeoPointEmpty(...),
					title : 'hTZ3KpdFQ9t5SeLN',
					address : 'eKRqDW7gN2oPL0c5',
					provider : 'Af69OjS527vhsmoe',
					venue_id : 'HxAaCTkiIBXGevbp',
					venue_type : 'j7yuohOTQcFHkdfW',
				),
				$client->inputMediaPhotoExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 9,
				),
				$client->inputMediaDocumentExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 85,
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 79,
				),
				$client->inputMediaGame(
					id : $client->inputGameID(...),
				),
				$client->inputMediaInvoice(
					title : '2m56HlGI7JKUYDiR',
					description : 'PLuqwke2B7EO5ycj',
					photo : $client->inputWebDocument(...),
					invoice : $client->invoice(...),
					payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					provider : '8p3NThB0yEAjVqnk',
					provider_data : $client->dataJSON(...),
					start_param : '0rNJCiF4utYUc1mM',
					extended_media : $client->inputMediaEmpty(...),
				),
				$client->inputMediaGeoLive(
					stopped : true,
					geo_point : $client->inputGeoPointEmpty(...),
					heading : 27,
					period : 28,
					proximity_notification_radius : 8,
				),
				$client->inputMediaPoll(
					poll : $client->poll(...),
					correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
					solution : 'UW0ETGx3KhR1Nmzq',
					solution_entities : array(
						$client->messageEntityUnknown(...),
						$client->messageEntityMention(...),
						$client->messageEntityHashtag(...),
						$client->messageEntityBotCommand(...),
						$client->messageEntityUrl(...),
						$client->messageEntityEmail(...),
						$client->messageEntityBold(...),
						$client->messageEntityItalic(...),
						$client->messageEntityCode(...),
						$client->messageEntityPre(...),
						$client->messageEntityTextUrl(...),
						$client->messageEntityMentionName(...),
						$client->inputMessageEntityMentionName(...),
						$client->messageEntityPhone(...),
						$client->messageEntityCashtag(...),
						$client->messageEntityUnderline(...),
						$client->messageEntityStrike(...),
						$client->messageEntityBankCard(...),
						$client->messageEntitySpoiler(...),
						$client->messageEntityCustomEmoji(...),
						$client->messageEntityBlockquote(...),
					),
				),
				$client->inputMediaDice(
					emoticon : 'nPGE6DAt50NgzKjJ',
				),
				$client->inputMediaStory(
					peer : $client->inputPeerEmpty(...),
					id : 51,
				),
				$client->inputMediaWebPage(
					force_large_media : true,
					force_small_media : true,
					optional : true,
					url : 'https://docs.liveproto.dev',
				),
				$client->inputMediaPaidMedia(
					stars_amount : -6830539196760968194,
					extended_media : array(
						$client->inputMediaEmpty(...),
						$client->inputMediaUploadedPhoto(...),
						$client->inputMediaPhoto(...),
						$client->inputMediaGeoPoint(...),
						$client->inputMediaContact(...),
						$client->inputMediaUploadedDocument(...),
						$client->inputMediaDocument(...),
						$client->inputMediaVenue(...),
						$client->inputMediaPhotoExternal(...),
						$client->inputMediaDocumentExternal(...),
						$client->inputMediaGame(...),
						$client->inputMediaInvoice(...),
						$client->inputMediaGeoLive(...),
						$client->inputMediaPoll(...),
						$client->inputMediaDice(...),
						$client->inputMediaStory(...),
						$client->inputMediaWebPage(...),
						$client->inputMediaPaidMedia(...),
						$client->inputMediaTodo(...),
					),
					payload : 'yjZ4u5IDKcsJ16CF',
				),
				$client->inputMediaTodo(
					todo : $client->todoList(...),
				),
			),
			payload : 'lDtTNYRQgBdH8X4b',
		),
		$client->inputMediaTodo(
			todo : $client->todoList(
				others_can_append : true,
				others_can_complete : true,
				title : $client->textWithEntities(...),
				list : array(
					$client->todoItem(...),
				),
			),
		),
	),
	payload : 'ZBPsJ9ALEdwO5nez',
);
```