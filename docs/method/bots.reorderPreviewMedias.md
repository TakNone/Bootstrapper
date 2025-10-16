# bots.reorderPreviewMedias

**Description** : *Reorder a main mini app previews, see here &raquo; for more info*

**Layer** : 216

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
	lang_code : 'MKWfuh0B9PRnsFo8',
	order : array(
		$client->inputMediaEmpty(),
		$client->inputMediaUploadedPhoto(
			spoiler : true,
			file : $client->inputFile(
				id : 1613862985114997345,
				parts : 8,
				name : 'xuJmGb0LTO5HSMsY',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : -2550996993101947945,
					access_hash : 2047067853592751461,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			ttl_seconds : 28,
		),
		$client->inputMediaPhoto(
			spoiler : true,
			id : $client->inputPhotoEmpty(),
			ttl_seconds : 93,
		),
		$client->inputMediaGeoPoint(
			geo_point : $client->inputGeoPointEmpty(),
		),
		$client->inputMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : '41bKpkuoBsNcO03j',
		),
		$client->inputMediaUploadedDocument(
			nosound_video : true,
			force_file : true,
			spoiler : true,
			file : $client->inputFile(
				id : 5008152651663622560,
				parts : 5,
				name : 'VkBOA50b3ltcdMm8',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			thumb : $client->inputFile(
				id : 4804905244083327090,
				parts : 59,
				name : '9YyaX6nS13J8ouKH',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			mime_type : '8cJPMBkOLVbpUAFa',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 26,
					h : 31,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '76XGswCnjbEVhlBp',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1794819.572265625,
					w : 71,
					h : 2,
					preload_prefix_size : 71,
					video_start_ts : 1344912.29296875,
					video_codec : 'TLEA6y92mdR3nXaf',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 42,
					title : 'BzKgIy2ftUZCaDF7',
					performer : '2FOHvbhsnciAjRS6',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '8IlXBjfbpumokc3T',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'btYd3DfNEnCZw2Po',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : 1025895218795787883,
					access_hash : 7011147020000401703,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 19,
			ttl_seconds : 0,
		),
		$client->inputMediaDocument(
			spoiler : true,
			id : $client->inputDocumentEmpty(),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 58,
			ttl_seconds : 100,
			query : 'r7eJSk3iVnsajA6E',
		),
		$client->inputMediaVenue(
			geo_point : $client->inputGeoPointEmpty(),
			title : '9CaXjuqBZ71PY6WO',
			address : 'zJ0onCPIYhR3DGsB',
			provider : '36aPXR9BpLu1bGFN',
			venue_id : 'eK9yuAiNQTZnM1tj',
			venue_type : 'Ur5QwFzaj2ofs4Dc',
		),
		$client->inputMediaPhotoExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 76,
		),
		$client->inputMediaDocumentExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 15,
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 88,
		),
		$client->inputMediaGame(
			id : $client->inputGameID(
				id : -637441176699816148,
				access_hash : 7303523724539879732,
			),
		),
		$client->inputMediaInvoice(
			title : 'uoLiaXNpvZInHSqh',
			description : 'q3uTizjJL7xPAXEB',
			photo : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 100,
				mime_type : 'Mg7AhkOv6LbWfIrl',
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
				currency : 'dOoIjUfbJ9ZCqvsB',
				prices : array(
					$client->labeledPrice(...),
				),
				max_tip_amount : 1331562280217178990,
				suggested_tip_amounts : array(-431658881781240159),
				terms_url : 'https://docs.liveproto.dev',
				subscription_period : 5,
			),
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			provider : 'Ajm5bsfPENrtcqZK',
			provider_data : $client->dataJSON(
				data : 'oqkPWlC3mLKDVgur',
			),
			start_param : 'NUJGagQfpxz5TCYt',
			extended_media : $client->inputMediaEmpty(),
		),
		$client->inputMediaGeoLive(
			stopped : true,
			geo_point : $client->inputGeoPointEmpty(),
			heading : 57,
			period : 39,
			proximity_notification_radius : 65,
		),
		$client->inputMediaPoll(
			poll : $client->poll(
				id : -4688848936829381469,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 43,
				close_date : 3,
			),
			correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			solution : '9brMoKIkPQu4LWmB',
			solution_entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 17,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 67,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 73,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 66,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 38,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 12,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 90,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 99,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 52,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 81,
					language : 'vJwldKAGxE9nZsBF',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 54,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 46,
					user_id : 6675362331856753919,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 88,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 13,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 17,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 82,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 55,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 37,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 11,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 14,
					document_id : 6605092518566535228,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 22,
				),
			),
		),
		$client->inputMediaDice(
			emoticon : 'Natwh5EnsrIXJoH1',
		),
		$client->inputMediaStory(
			peer : $client->inputPeerEmpty(),
			id : 6,
		),
		$client->inputMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			optional : true,
			url : 'https://docs.liveproto.dev',
		),
		$client->inputMediaPaidMedia(
			stars_amount : 7477524628168496496,
			extended_media : array(
				$client->inputMediaEmpty(),
				$client->inputMediaUploadedPhoto(
					spoiler : true,
					file : $client->inputFile(...),
					stickers : array(
						$client->inputDocumentEmpty(...),
						$client->inputDocument(...),
					),
					ttl_seconds : 74,
				),
				$client->inputMediaPhoto(
					spoiler : true,
					id : $client->inputPhotoEmpty(...),
					ttl_seconds : 61,
				),
				$client->inputMediaGeoPoint(
					geo_point : $client->inputGeoPointEmpty(...),
				),
				$client->inputMediaContact(
					phone_number : '+1234567890',
					first_name : 'Tak',
					last_name : 'None',
					vcard : 'iAhj4TJGYUFt5lfx',
				),
				$client->inputMediaUploadedDocument(
					nosound_video : true,
					force_file : true,
					spoiler : true,
					file : $client->inputFile(...),
					thumb : $client->inputFile(...),
					mime_type : 'OJn8X9zMxHqGbAY3',
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
					video_timestamp : 84,
					ttl_seconds : 60,
				),
				$client->inputMediaDocument(
					spoiler : true,
					id : $client->inputDocumentEmpty(...),
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 27,
					ttl_seconds : 63,
					query : '8ojWJs9uSRIklB6L',
				),
				$client->inputMediaVenue(
					geo_point : $client->inputGeoPointEmpty(...),
					title : 'lBAHv0soeQJNLE7y',
					address : 'Nl5jsbRvWM3q1kc4',
					provider : 'gt78ObeFhr06ZLcm',
					venue_id : 'CQVN0cIg2X4YuEOd',
					venue_type : 'xAfc1r5TK94EnpaR',
				),
				$client->inputMediaPhotoExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 46,
				),
				$client->inputMediaDocumentExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 72,
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 20,
				),
				$client->inputMediaGame(
					id : $client->inputGameID(...),
				),
				$client->inputMediaInvoice(
					title : 'EtjeWmoBvwu8DN6U',
					description : 'khpvxlPYA2LsErRf',
					photo : $client->inputWebDocument(...),
					invoice : $client->invoice(...),
					payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					provider : 'EwKosr8lm3kNA6Vg',
					provider_data : $client->dataJSON(...),
					start_param : 'YV7Nh4JcnKuAi9Bf',
					extended_media : $client->inputMediaEmpty(...),
				),
				$client->inputMediaGeoLive(
					stopped : true,
					geo_point : $client->inputGeoPointEmpty(...),
					heading : 11,
					period : 13,
					proximity_notification_radius : 21,
				),
				$client->inputMediaPoll(
					poll : $client->poll(...),
					correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
					solution : 'RZ9iArhlQNj7spIT',
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
					emoticon : 'USJEtksNLRhQ3Hnl',
				),
				$client->inputMediaStory(
					peer : $client->inputPeerEmpty(...),
					id : 39,
				),
				$client->inputMediaWebPage(
					force_large_media : true,
					force_small_media : true,
					optional : true,
					url : 'https://docs.liveproto.dev',
				),
				$client->inputMediaPaidMedia(
					stars_amount : -5695169789533615991,
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
					payload : '1ZMx0y2UCed5m4sz',
				),
				$client->inputMediaTodo(
					todo : $client->todoList(...),
				),
			),
			payload : 'xhfYQ4oywTHaO9vk',
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