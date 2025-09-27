# bots.reorderPreviewMedias

**Description** : *Reorder a main mini app previews, see here &raquo; for more info*

**Layer** : 214

```tl
bots.reorderPreviewMedias#b627f3aa bot:InputUser lang_code:string order:Vector<InputMedia> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | The bot that owns the Main Mini App |
| <mark>lang_code</mark> | [`string`](type/string) | ISO 639-1 language code, indicating the localization of the previews to reorder |
| <mark>order</mark> | [`Vector<InputMedia>`](type/InputMedia) | New order of the previews |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |

---

## Example

```php
$bool = $client->bots->reorderPreviewMedias(
	bot : $client->inputUserEmpty(),
	lang_code : 'cnBHvdIo9yfNWRjS',
	order : array(
		$client->inputMediaEmpty(),
		$client->inputMediaUploadedPhoto(
			spoiler : true,
			file : $client->inputFile(
				id : -6445898580968380682,
				parts : 47,
				name : 'hn70cGkQpoD6HK1P',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : -6727049971953047196,
					access_hash : 6739252006591769764,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			ttl_seconds : 63,
		),
		$client->inputMediaPhoto(
			spoiler : true,
			id : $client->inputPhotoEmpty(),
			ttl_seconds : 40,
		),
		$client->inputMediaGeoPoint(
			geo_point : $client->inputGeoPointEmpty(),
		),
		$client->inputMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : 'f1ajPWurOw2Nn8XF',
		),
		$client->inputMediaUploadedDocument(
			nosound_video : true,
			force_file : true,
			spoiler : true,
			file : $client->inputFile(
				id : -3466620942396443337,
				parts : 65,
				name : 'JGb8sehF6m0K7XjU',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			thumb : $client->inputFile(
				id : 4530691007632583832,
				parts : 1,
				name : 'RKzYryf7Zc5blIwJ',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			mime_type : '3QJSR8lyDFCaiOAq',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 29,
					h : 79,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '9KtYwEv43o1BW07J',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1124602.7607421875,
					w : 7,
					h : 30,
					preload_prefix_size : 72,
					video_start_ts : 25571.689453125,
					video_codec : 'ocLeg1WTpklqVI8Z',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 82,
					title : 'tGeIv9F84sLY6cqH',
					performer : '13G0siCpNmInXguz',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '1c5wqSJudC8rx2i0',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'aJfqFy7VDeR85zwp',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : 6376565851784500825,
					access_hash : 6003074741369131377,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 65,
			ttl_seconds : 67,
		),
		$client->inputMediaDocument(
			spoiler : true,
			id : $client->inputDocumentEmpty(),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 88,
			ttl_seconds : 57,
			query : 'A3GzUP6HZEmJ4rOk',
		),
		$client->inputMediaVenue(
			geo_point : $client->inputGeoPointEmpty(),
			title : 'sVSPfoWNm8Hh7ve2',
			address : 'zt2ejJlNPDHOk6a7',
			provider : '6DeQPiBlwSnNRchj',
			venue_id : 'A9ctdg0ORTaHeL3f',
			venue_type : 'VmAlaCehJzWtRvOg',
		),
		$client->inputMediaPhotoExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 20,
		),
		$client->inputMediaDocumentExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 84,
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 46,
		),
		$client->inputMediaGame(
			id : $client->inputGameID(
				id : 1257122196969762896,
				access_hash : -6486121489678418600,
			),
		),
		$client->inputMediaInvoice(
			title : 'TjSZAnxzqp1BDY3E',
			description : 'yVXgDuKxe6m8tq9G',
			photo : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 66,
				mime_type : 'zeV6FCTA2HE5x9qd',
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
				currency : 'Z4FpXlWj6m9ISfkM',
				prices : array(
					$client->labeledPrice(...),
				),
				max_tip_amount : 6597312122397518766,
				suggested_tip_amounts : array(-3014141520401107537),
				terms_url : 'https://docs.liveproto.dev',
				subscription_period : 79,
			),
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			provider : 'k9Cu85x7NXSKgOhW',
			provider_data : $client->dataJSON(
				data : 'WHDISOMnlXwesdYm',
			),
			start_param : 'm7q0hTNReoIUL6vg',
			extended_media : $client->inputMediaEmpty(),
		),
		$client->inputMediaGeoLive(
			stopped : true,
			geo_point : $client->inputGeoPointEmpty(),
			heading : 58,
			period : 48,
			proximity_notification_radius : 93,
		),
		$client->inputMediaPoll(
			poll : $client->poll(
				id : -4007850355920049068,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 94,
				close_date : 92,
			),
			correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			solution : 'WZ3mqPHILdJrswuB',
			solution_entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 7,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 100,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 41,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 83,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 15,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 64,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 20,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 45,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 8,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 99,
					language : 'tAS3TkqZWQVER6Lf',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 12,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 72,
					user_id : 1120591646292049124,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 19,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 92,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 22,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 38,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 32,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 63,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 45,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 11,
					document_id : -4563853429755348745,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 11,
				),
			),
		),
		$client->inputMediaDice(
			emoticon : '64DXoCckAudOif0U',
		),
		$client->inputMediaStory(
			peer : $client->inputPeerEmpty(),
			id : 80,
		),
		$client->inputMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			optional : true,
			url : 'https://docs.liveproto.dev',
		),
		$client->inputMediaPaidMedia(
			stars_amount : -5678511226361201176,
			extended_media : array(
				$client->inputMediaEmpty(),
				$client->inputMediaUploadedPhoto(
					spoiler : true,
					file : $client->inputFile(...),
					stickers : array(
						$client->inputDocumentEmpty(...),
						$client->inputDocument(...),
					),
					ttl_seconds : 80,
				),
				$client->inputMediaPhoto(
					spoiler : true,
					id : $client->inputPhotoEmpty(...),
					ttl_seconds : 99,
				),
				$client->inputMediaGeoPoint(
					geo_point : $client->inputGeoPointEmpty(...),
				),
				$client->inputMediaContact(
					phone_number : '+1234567890',
					first_name : 'Tak',
					last_name : 'None',
					vcard : 'qpG9EZV6MjcN1PSR',
				),
				$client->inputMediaUploadedDocument(
					nosound_video : true,
					force_file : true,
					spoiler : true,
					file : $client->inputFile(...),
					thumb : $client->inputFile(...),
					mime_type : 'iJhR8jkQBntVETSc',
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
					video_timestamp : 75,
					ttl_seconds : 31,
				),
				$client->inputMediaDocument(
					spoiler : true,
					id : $client->inputDocumentEmpty(...),
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 77,
					ttl_seconds : 76,
					query : 'PWI4zUKFa7OhndRT',
				),
				$client->inputMediaVenue(
					geo_point : $client->inputGeoPointEmpty(...),
					title : 'catFUu0ZzMNYIWlK',
					address : 'nZIhEKoGN8Pmlux9',
					provider : 'PVtNYls5juDeR9AW',
					venue_id : 'rBfCHRLchao4Kw7Z',
					venue_type : 'oHJNWpbatTeBkn7V',
				),
				$client->inputMediaPhotoExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 67,
				),
				$client->inputMediaDocumentExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 76,
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 74,
				),
				$client->inputMediaGame(
					id : $client->inputGameID(...),
				),
				$client->inputMediaInvoice(
					title : 'lvUZztV9j1FHSNi2',
					description : 'w5H4X8Jh6RvVtKPG',
					photo : $client->inputWebDocument(...),
					invoice : $client->invoice(...),
					payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					provider : '2flrNhcSEQ50jHxs',
					provider_data : $client->dataJSON(...),
					start_param : '0iHn5UY6CWeadNmL',
					extended_media : $client->inputMediaEmpty(...),
				),
				$client->inputMediaGeoLive(
					stopped : true,
					geo_point : $client->inputGeoPointEmpty(...),
					heading : 77,
					period : 39,
					proximity_notification_radius : 26,
				),
				$client->inputMediaPoll(
					poll : $client->poll(...),
					correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
					solution : 'UdMh9gF12l6CbInA',
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
					emoticon : 'WqrTsZ6COlokfGQt',
				),
				$client->inputMediaStory(
					peer : $client->inputPeerEmpty(...),
					id : 55,
				),
				$client->inputMediaWebPage(
					force_large_media : true,
					force_small_media : true,
					optional : true,
					url : 'https://docs.liveproto.dev',
				),
				$client->inputMediaPaidMedia(
					stars_amount : 8841020508848673233,
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
					payload : 'tprWHQlT4ehv7JY0',
				),
				$client->inputMediaTodo(
					todo : $client->todoList(...),
				),
			),
			payload : 'SsUYyjH09kKOwEFM',
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
);
```