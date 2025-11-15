# bots.deletePreviewMedia

**Description** : *Delete a main mini app preview, see here &raquo; for more info*

**Layer** : 216

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
	lang_code : 'ZjWBEA7vKFdamb19',
	media : array(
		$client->inputMediaEmpty(),
		$client->inputMediaUploadedPhoto(
			spoiler : true,
			file : $client->inputFile(
				id : -1462843946552446165,
				parts : 84,
				name : 'sDTgo4pM8V69iZUK',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : 4695677589684648955,
					access_hash : -5073967585299826661,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			ttl_seconds : 83,
		),
		$client->inputMediaPhoto(
			spoiler : true,
			id : $client->inputPhotoEmpty(),
			ttl_seconds : 97,
		),
		$client->inputMediaGeoPoint(
			geo_point : $client->inputGeoPointEmpty(),
		),
		$client->inputMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : 'UYERybsgf9VOPz3J',
		),
		$client->inputMediaUploadedDocument(
			nosound_video : true,
			force_file : true,
			spoiler : true,
			file : $client->inputFile(
				id : -4472321421010239238,
				parts : 9,
				name : 'byWG5Lhl94TxPM1A',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			thumb : $client->inputFile(
				id : 5339708952322366396,
				parts : 67,
				name : 'f6sDzHwg3pdCEcV8',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			mime_type : '62rDOjgEHmpUoATM',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 68,
					h : 1,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'HRJiuXD4A1Nc7vwT',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1986266.359375,
					w : 87,
					h : 32,
					preload_prefix_size : 72,
					video_start_ts : -270700.3447265625,
					video_codec : 'GLTe2zxMJZylf58R',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 85,
					title : 'eMPvWBQRaAS649gX',
					performer : '3sVZH4queKMBoalt',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'HEUewuB5PAMRc2DJ',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'pgRQWNxZtH4aTsuJ',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : -7179460797831305917,
					access_hash : 9142797231753968560,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 51,
			ttl_seconds : 38,
		),
		$client->inputMediaDocument(
			spoiler : true,
			id : $client->inputDocumentEmpty(),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 97,
			ttl_seconds : 68,
			query : 'oahDiWdV3w5JuFt9',
		),
		$client->inputMediaVenue(
			geo_point : $client->inputGeoPointEmpty(),
			title : 'RpFXBCz5Tqb7sArt',
			address : 'SEklfHeXzo5OQnw8',
			provider : 'pt6rJUb0xVeW7Oga',
			venue_id : '6a50wLuVD7PShWjM',
			venue_type : 'YfIzBbda2l6SyL3O',
		),
		$client->inputMediaPhotoExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 77,
		),
		$client->inputMediaDocumentExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 81,
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 56,
		),
		$client->inputMediaGame(
			id : $client->inputGameID(
				id : 993619062705347198,
				access_hash : -7304356476638185999,
			),
		),
		$client->inputMediaInvoice(
			title : 'pJR71sFQMdPuq60W',
			description : 'cqS05PQ8MEBAaTYi',
			photo : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 70,
				mime_type : 'TNBtKczpYnqJX40S',
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
				currency : '8DPRQg1KCBWSMHl4',
				prices : array(
					$client->labeledPrice(...),
				),
				max_tip_amount : -2179316484409364284,
				suggested_tip_amounts : array(-2212259338716475726),
				terms_url : 'https://docs.liveproto.dev',
				subscription_period : 27,
			),
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			provider : 'HFhGqeIKNZctr9Eg',
			provider_data : $client->dataJSON(
				data : 'pBUT3iJzsZuI1XAf',
			),
			start_param : '6j2fDyi4CqGKhBQm',
			extended_media : $client->inputMediaEmpty(),
		),
		$client->inputMediaGeoLive(
			stopped : true,
			geo_point : $client->inputGeoPointEmpty(),
			heading : 54,
			period : 53,
			proximity_notification_radius : 6,
		),
		$client->inputMediaPoll(
			poll : $client->poll(
				id : 6651105268564781919,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 43,
				close_date : 94,
			),
			correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			solution : '0mRL6wdgsP8aDWrS',
			solution_entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 39,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 20,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 41,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 7,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 40,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 59,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 63,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 25,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 34,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 5,
					language : '0qzRfSvpyGNnDBtH',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 23,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 2,
					user_id : -8599456092961594072,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 98,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 100,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 18,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 34,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 19,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 29,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 16,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 52,
					document_id : 7589675938914158093,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 70,
				),
			),
		),
		$client->inputMediaDice(
			emoticon : 'NPwSE8VLOGrt5K7Q',
		),
		$client->inputMediaStory(
			peer : $client->inputPeerEmpty(),
			id : 11,
		),
		$client->inputMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			optional : true,
			url : 'https://docs.liveproto.dev',
		),
		$client->inputMediaPaidMedia(
			stars_amount : 1808552740731589540,
			extended_media : array(
				$client->inputMediaEmpty(),
				$client->inputMediaUploadedPhoto(
					spoiler : true,
					file : $client->inputFile(...),
					stickers : array(
						$client->inputDocumentEmpty(...),
						$client->inputDocument(...),
					),
					ttl_seconds : 39,
				),
				$client->inputMediaPhoto(
					spoiler : true,
					id : $client->inputPhotoEmpty(...),
					ttl_seconds : 87,
				),
				$client->inputMediaGeoPoint(
					geo_point : $client->inputGeoPointEmpty(...),
				),
				$client->inputMediaContact(
					phone_number : '+1234567890',
					first_name : 'Tak',
					last_name : 'None',
					vcard : 'GRiyjfkB8tvLEcTP',
				),
				$client->inputMediaUploadedDocument(
					nosound_video : true,
					force_file : true,
					spoiler : true,
					file : $client->inputFile(...),
					thumb : $client->inputFile(...),
					mime_type : 'yc7KD5h6VfYH8qdI',
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
					video_timestamp : 35,
					ttl_seconds : 3,
				),
				$client->inputMediaDocument(
					spoiler : true,
					id : $client->inputDocumentEmpty(...),
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 65,
					ttl_seconds : 86,
					query : 'N8ipT9vGLugzrIY7',
				),
				$client->inputMediaVenue(
					geo_point : $client->inputGeoPointEmpty(...),
					title : 'jYwQshreId6t1gaE',
					address : '7LcvNnWKuaiHyQ3o',
					provider : 'ePpoG0SOIqav9WCg',
					venue_id : 'YWagQiAqFs6K4h7T',
					venue_type : 'AaGwSyPuJcbv29NZ',
				),
				$client->inputMediaPhotoExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 26,
				),
				$client->inputMediaDocumentExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 25,
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 40,
				),
				$client->inputMediaGame(
					id : $client->inputGameID(...),
				),
				$client->inputMediaInvoice(
					title : 'xdgjkheJRBnz4MQl',
					description : 'AoTu5jEkR9hrly2H',
					photo : $client->inputWebDocument(...),
					invoice : $client->invoice(...),
					payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					provider : 'XPbpWimZnsMOFwlf',
					provider_data : $client->dataJSON(...),
					start_param : 'AfCPDLWbRBaGYS3T',
					extended_media : $client->inputMediaEmpty(...),
				),
				$client->inputMediaGeoLive(
					stopped : true,
					geo_point : $client->inputGeoPointEmpty(...),
					heading : 2,
					period : 96,
					proximity_notification_radius : 44,
				),
				$client->inputMediaPoll(
					poll : $client->poll(...),
					correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
					solution : 'n83tyfgQEil2WmKA',
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
					emoticon : '4lcuJSrIdqFfDnpC',
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
					stars_amount : 4733780710821011638,
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
					payload : 'JvOsKHTcERMQLNfn',
				),
				$client->inputMediaTodo(
					todo : $client->todoList(...),
				),
			),
			payload : 'zvZmwYLp91eQrtoA',
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