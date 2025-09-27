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
	lang_code : 'oOHCswGVdDcRZnxQ',
	order : array(
		$client->inputMediaEmpty(),
		$client->inputMediaUploadedPhoto(
			spoiler : true,
			file : $client->inputFile(
				id : 3353918117901826354,
				parts : 69,
				name : 'nzdWHAMKymr5RbZj',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : -2855188456759520438,
					access_hash : 6738933710686777338,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			ttl_seconds : 44,
		),
		$client->inputMediaPhoto(
			spoiler : true,
			id : $client->inputPhotoEmpty(),
			ttl_seconds : 75,
		),
		$client->inputMediaGeoPoint(
			geo_point : $client->inputGeoPointEmpty(),
		),
		$client->inputMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : '40oGmLwtY8vhf2WJ',
		),
		$client->inputMediaUploadedDocument(
			nosound_video : true,
			force_file : true,
			spoiler : true,
			file : $client->inputFile(
				id : -3729958154736563333,
				parts : 95,
				name : '2Rwml3YEFSeJbvPh',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			thumb : $client->inputFile(
				id : -1849834037613869808,
				parts : 24,
				name : 'polGZmbIc63iUWSx',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			mime_type : '6p4uajYxQ8FUEtcb',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 16,
					h : 0,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'DRezUaTVhZx4f9It',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -98591.1591796875,
					w : 67,
					h : 37,
					preload_prefix_size : 70,
					video_start_ts : 1267277.986328125,
					video_codec : 'xaLmvpSoFjM7QwI9',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 58,
					title : '8jObypmwfU4ZYLid',
					performer : 'JUE0F6Atf1IzxPZb',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'K3AimFxXTw180ukR',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'TId2GkF6et9MYbx5',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : -2010441711543680339,
					access_hash : -7418745153570461440,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 74,
			ttl_seconds : 63,
		),
		$client->inputMediaDocument(
			spoiler : true,
			id : $client->inputDocumentEmpty(),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 18,
			ttl_seconds : 84,
			query : 'VnPe5Ffi4uh21W6l',
		),
		$client->inputMediaVenue(
			geo_point : $client->inputGeoPointEmpty(),
			title : 'pl06nkJNcArG7DEz',
			address : 'jlpfKVCWhR1Y3qkO',
			provider : 'cMbD0kQgPAI7mGlu',
			venue_id : 'XnVqOoQuTmcpEAgl',
			venue_type : 'k3mcofyVAixGP7jw',
		),
		$client->inputMediaPhotoExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 62,
		),
		$client->inputMediaDocumentExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 51,
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 66,
		),
		$client->inputMediaGame(
			id : $client->inputGameID(
				id : -8378024477425244020,
				access_hash : -6465909525996958050,
			),
		),
		$client->inputMediaInvoice(
			title : '0Zct5n93qgW1STdj',
			description : 'AKIP2B8J7tpe3jVH',
			photo : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 42,
				mime_type : '0G2YeqOBJb4AHdoW',
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
				currency : 'SfED04QtcqYuI9Nd',
				prices : array(
					$client->labeledPrice(...),
				),
				max_tip_amount : -5180237815339762584,
				suggested_tip_amounts : array(3128550544501953949),
				terms_url : 'https://docs.liveproto.dev',
				subscription_period : 59,
			),
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			provider : 'Ny0FvPiwt8WYXdsA',
			provider_data : $client->dataJSON(
				data : 'iZ6vOhzSFQEspt38',
			),
			start_param : 'tFr8opQi0wEUX4eR',
			extended_media : $client->inputMediaEmpty(),
		),
		$client->inputMediaGeoLive(
			stopped : true,
			geo_point : $client->inputGeoPointEmpty(),
			heading : 0,
			period : 25,
			proximity_notification_radius : 14,
		),
		$client->inputMediaPoll(
			poll : $client->poll(
				id : -2812888815469802956,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 29,
				close_date : 32,
			),
			correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			solution : 'WFNtp5xPOYTJBkb1',
			solution_entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 66,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 11,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 55,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 96,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 65,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 91,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 83,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 37,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 83,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 15,
					language : 'zjKorUOsEBRG7cF9',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 83,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 50,
					user_id : 1675970721513953586,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 16,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 85,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 69,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 77,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 97,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 83,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 88,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 56,
					document_id : 1236585460320244936,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 37,
				),
			),
		),
		$client->inputMediaDice(
			emoticon : 'eA34DUwClcLryGIJ',
		),
		$client->inputMediaStory(
			peer : $client->inputPeerEmpty(),
			id : 81,
		),
		$client->inputMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			optional : true,
			url : 'https://docs.liveproto.dev',
		),
		$client->inputMediaPaidMedia(
			stars_amount : -5508019273572201880,
			extended_media : array(
				$client->inputMediaEmpty(),
				$client->inputMediaUploadedPhoto(
					spoiler : true,
					file : $client->inputFile(...),
					stickers : array(
						$client->inputDocumentEmpty(...),
						$client->inputDocument(...),
					),
					ttl_seconds : 51,
				),
				$client->inputMediaPhoto(
					spoiler : true,
					id : $client->inputPhotoEmpty(...),
					ttl_seconds : 64,
				),
				$client->inputMediaGeoPoint(
					geo_point : $client->inputGeoPointEmpty(...),
				),
				$client->inputMediaContact(
					phone_number : '+1234567890',
					first_name : 'Tak',
					last_name : 'None',
					vcard : 'cApeV4bgxzE1GShy',
				),
				$client->inputMediaUploadedDocument(
					nosound_video : true,
					force_file : true,
					spoiler : true,
					file : $client->inputFile(...),
					thumb : $client->inputFile(...),
					mime_type : 'asjnJlPDwKVyZ8Ri',
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
					video_timestamp : 5,
					ttl_seconds : 13,
				),
				$client->inputMediaDocument(
					spoiler : true,
					id : $client->inputDocumentEmpty(...),
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 5,
					ttl_seconds : 87,
					query : 'YI2s9S07Mzl6bDHF',
				),
				$client->inputMediaVenue(
					geo_point : $client->inputGeoPointEmpty(...),
					title : 'qAzsh6VPIOYQlCHo',
					address : 'kF0jcUTGhE4nVmDS',
					provider : 'MKAYOJsmo1TdfC4P',
					venue_id : 'EPMmJcGbWdrHfKiF',
					venue_type : 'UIHAsXPVWaYJlgQu',
				),
				$client->inputMediaPhotoExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 4,
				),
				$client->inputMediaDocumentExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 87,
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 68,
				),
				$client->inputMediaGame(
					id : $client->inputGameID(...),
				),
				$client->inputMediaInvoice(
					title : 'tpG9ogVhDB3cM8v6',
					description : 'EoMashqNXQc4DSk1',
					photo : $client->inputWebDocument(...),
					invoice : $client->invoice(...),
					payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					provider : '7D0qkfXZns5KYUBV',
					provider_data : $client->dataJSON(...),
					start_param : 'se5uoBnacOVrg01Z',
					extended_media : $client->inputMediaEmpty(...),
				),
				$client->inputMediaGeoLive(
					stopped : true,
					geo_point : $client->inputGeoPointEmpty(...),
					heading : 72,
					period : 40,
					proximity_notification_radius : 45,
				),
				$client->inputMediaPoll(
					poll : $client->poll(...),
					correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
					solution : 'fhts6zYIuva9Nk2p',
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
					emoticon : '4SvChb7aDE9ORgc3',
				),
				$client->inputMediaStory(
					peer : $client->inputPeerEmpty(...),
					id : 62,
				),
				$client->inputMediaWebPage(
					force_large_media : true,
					force_small_media : true,
					optional : true,
					url : 'https://docs.liveproto.dev',
				),
				$client->inputMediaPaidMedia(
					stars_amount : 1223983923269222495,
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
					payload : 'VpwPdQh5ksMn2AYX',
				),
				$client->inputMediaTodo(
					todo : $client->todoList(...),
				),
			),
			payload : '5RpFQkoYvZ2baEtj',
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