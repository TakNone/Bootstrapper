# bots.deletePreviewMedia

**Description** : *Delete a main mini app preview, see here &raquo; for more info*

**Layer** : 214

```tl
bots.deletePreviewMedia#2d0135b3 bot:InputUser lang_code:string media:Vector<InputMedia> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | The bot that owns the Main Mini App |
| <mark>lang_code</mark> | [`string`](type/string) | ISO 639-1 language code, indicating the localization of the preview to delete |
| <mark>media</mark> | [`Vector<InputMedia>`](type/InputMedia) | The photo/video preview to delete, previously fetched as specified here » |

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
$bool = $client->bots->deletePreviewMedia(
	bot : $client->inputUserEmpty(),
	lang_code : '3iVBgQ4MxolaAJnR',
	media : array(
		$client->inputMediaEmpty(),
		$client->inputMediaUploadedPhoto(
			spoiler : true,
			file : $client->inputFile(
				id : -8403004964511018829,
				parts : 89,
				name : '7auwU26tNIxEXdVi',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : -484815899013431194,
					access_hash : -3151017360997981413,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			ttl_seconds : 10,
		),
		$client->inputMediaPhoto(
			spoiler : true,
			id : $client->inputPhotoEmpty(),
			ttl_seconds : 20,
		),
		$client->inputMediaGeoPoint(
			geo_point : $client->inputGeoPointEmpty(),
		),
		$client->inputMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : 'pEeG2P1skr9iKAQF',
		),
		$client->inputMediaUploadedDocument(
			nosound_video : true,
			force_file : true,
			spoiler : true,
			file : $client->inputFile(
				id : -6008864169431703151,
				parts : 56,
				name : '1s5VQYyhfZT8G4ex',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			thumb : $client->inputFile(
				id : 419473266804280242,
				parts : 24,
				name : 'qsMTHigpDwFAtxj7',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			mime_type : 'BstIDzT4nkCXcMgq',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 47,
					h : 24,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '18Q35irnvLm09AFy',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1167597.7568359375,
					w : 70,
					h : 27,
					preload_prefix_size : 21,
					video_start_ts : 15302.7490234375,
					video_codec : 'fX8c2JrGLoh3ykxH',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 48,
					title : 'Qox7thOUJPSNmlYG',
					performer : 'mKbUZpDuRfSsAW3T',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'q1zrAUEQyYLk7FZu',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'q0TJSeLPFw2C5tVz',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : -682853112308133772,
					access_hash : 1640013554926186054,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 68,
			ttl_seconds : 91,
		),
		$client->inputMediaDocument(
			spoiler : true,
			id : $client->inputDocumentEmpty(),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 0,
			ttl_seconds : 30,
			query : 'oknf1rIQiFDm2HNK',
		),
		$client->inputMediaVenue(
			geo_point : $client->inputGeoPointEmpty(),
			title : 'UIDhB8R2XwneVGCu',
			address : 'afsv9Fk0Tx2hlD7K',
			provider : 'NbeYuTvAWRcQi9FI',
			venue_id : 'aeiMO97LEnd8mAPQ',
			venue_type : 'yRZ3HSgXCwzqiE71',
		),
		$client->inputMediaPhotoExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 87,
		),
		$client->inputMediaDocumentExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 64,
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 40,
		),
		$client->inputMediaGame(
			id : $client->inputGameID(
				id : 542195354837944475,
				access_hash : -5084514792643588363,
			),
		),
		$client->inputMediaInvoice(
			title : 'lTyzfmojI7GkK4CM',
			description : 'LxUfMQHobIS63zJ0',
			photo : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 63,
				mime_type : '9Z3N7aiJ0rOwxzlm',
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
				currency : 'vkhMWsT18wZXzobf',
				prices : array(
					$client->labeledPrice(...),
				),
				max_tip_amount : -8742918918770839727,
				suggested_tip_amounts : array(-1479133514884135284),
				terms_url : 'https://docs.liveproto.dev',
				subscription_period : 89,
			),
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			provider : 'OLacfn7mrv6wBUAD',
			provider_data : $client->dataJSON(
				data : 'QROgtV7GZNboifsX',
			),
			start_param : 'yLzaPIEZ4jWXkiYw',
			extended_media : $client->inputMediaEmpty(),
		),
		$client->inputMediaGeoLive(
			stopped : true,
			geo_point : $client->inputGeoPointEmpty(),
			heading : 100,
			period : 20,
			proximity_notification_radius : 14,
		),
		$client->inputMediaPoll(
			poll : $client->poll(
				id : 5785751696293232808,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 86,
				close_date : 95,
			),
			correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			solution : 'i6US9ND5HnoOspP3',
			solution_entities : array(
				$client->messageEntityUnknown(
					offset : 86,
					length : 41,
				),
				$client->messageEntityMention(
					offset : 11,
					length : 1,
				),
				$client->messageEntityHashtag(
					offset : 96,
					length : 68,
				),
				$client->messageEntityBotCommand(
					offset : 12,
					length : 100,
				),
				$client->messageEntityUrl(
					offset : 13,
					length : 33,
				),
				$client->messageEntityEmail(
					offset : 94,
					length : 72,
				),
				$client->messageEntityBold(
					offset : 42,
					length : 77,
				),
				$client->messageEntityItalic(
					offset : 44,
					length : 70,
				),
				$client->messageEntityCode(
					offset : 6,
					length : 53,
				),
				$client->messageEntityPre(
					offset : 78,
					length : 22,
					language : 'n8RAlIFfaro0zueV',
				),
				$client->messageEntityTextUrl(
					offset : 96,
					length : 8,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 55,
					length : 7,
					user_id : -1066948894335536590,
				),
				$client->inputMessageEntityMentionName(
					offset : 83,
					length : 100,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 38,
					length : 82,
				),
				$client->messageEntityCashtag(
					offset : 74,
					length : 78,
				),
				$client->messageEntityUnderline(
					offset : 49,
					length : 68,
				),
				$client->messageEntityStrike(
					offset : 68,
					length : 55,
				),
				$client->messageEntityBankCard(
					offset : 100,
					length : 27,
				),
				$client->messageEntitySpoiler(
					offset : 63,
					length : 17,
				),
				$client->messageEntityCustomEmoji(
					offset : 51,
					length : 91,
					document_id : 5991772205225828658,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 38,
					length : 61,
				),
			),
		),
		$client->inputMediaDice(
			emoticon : 'aRy46gj0nGEqcur7',
		),
		$client->inputMediaStory(
			peer : $client->inputPeerEmpty(),
			id : 98,
		),
		$client->inputMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			optional : true,
			url : 'https://docs.liveproto.dev',
		),
		$client->inputMediaPaidMedia(
			stars_amount : -8084000439709440364,
			extended_media : array(
				$client->inputMediaEmpty(),
				$client->inputMediaUploadedPhoto(
					spoiler : true,
					file : $client->inputFile(...),
					stickers : array(
						$client->inputDocumentEmpty(...),
						$client->inputDocument(...),
					),
					ttl_seconds : 8,
				),
				$client->inputMediaPhoto(
					spoiler : true,
					id : $client->inputPhotoEmpty(...),
					ttl_seconds : 3,
				),
				$client->inputMediaGeoPoint(
					geo_point : $client->inputGeoPointEmpty(...),
				),
				$client->inputMediaContact(
					phone_number : '+1234567890',
					first_name : 'Tak',
					last_name : 'None',
					vcard : '8HlM0nVU5ZTYJG6R',
				),
				$client->inputMediaUploadedDocument(
					nosound_video : true,
					force_file : true,
					spoiler : true,
					file : $client->inputFile(...),
					thumb : $client->inputFile(...),
					mime_type : 'dsBNTD4ytqp6AUXW',
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
					video_timestamp : 12,
					ttl_seconds : 6,
				),
				$client->inputMediaDocument(
					spoiler : true,
					id : $client->inputDocumentEmpty(...),
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 12,
					ttl_seconds : 10,
					query : 'tW9xbuTwr74vfpsy',
				),
				$client->inputMediaVenue(
					geo_point : $client->inputGeoPointEmpty(...),
					title : 'Y3OoQxStfBMgCzcj',
					address : 'ID23PJCScuiexqlR',
					provider : 'y3Zu07ADIlkRtwq6',
					venue_id : 'wdE4bJrN2U8KXRuM',
					venue_type : 'iTqv1pKt98Oj7RfA',
				),
				$client->inputMediaPhotoExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 61,
				),
				$client->inputMediaDocumentExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 15,
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 62,
				),
				$client->inputMediaGame(
					id : $client->inputGameID(...),
				),
				$client->inputMediaInvoice(
					title : 'L7INFVrbMEQj6g1l',
					description : 'M3tm1JqyTk9wuBbH',
					photo : $client->inputWebDocument(...),
					invoice : $client->invoice(...),
					payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					provider : 'YWoQxHXMEb37q6f8',
					provider_data : $client->dataJSON(...),
					start_param : 'DTklsENR2OyJUXmd',
					extended_media : $client->inputMediaEmpty(...),
				),
				$client->inputMediaGeoLive(
					stopped : true,
					geo_point : $client->inputGeoPointEmpty(...),
					heading : 83,
					period : 9,
					proximity_notification_radius : 76,
				),
				$client->inputMediaPoll(
					poll : $client->poll(...),
					correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
					solution : 'XRFJhn2d8wv3GMYQ',
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
					emoticon : 'SlBQTY94IavLWrD3',
				),
				$client->inputMediaStory(
					peer : $client->inputPeerEmpty(...),
					id : 73,
				),
				$client->inputMediaWebPage(
					force_large_media : true,
					force_small_media : true,
					optional : true,
					url : 'https://docs.liveproto.dev',
				),
				$client->inputMediaPaidMedia(
					stars_amount : 1869289414067622944,
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
					payload : '6WderkQsSiG1PBEA',
				),
				$client->inputMediaTodo(
					todo : $client->todoList(...),
				),
			),
			payload : 'Yfet4AaR5sTVDXur',
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