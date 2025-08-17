# bots.deletePreviewMedia

**Description** : *Delete a main mini app preview, see here » for more info*

**Layer** : 211

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
	lang_code : 'r7p2LByAOeElCdZK',
	media : array(
		$client->inputMediaEmpty(),
		$client->inputMediaUploadedPhoto(
			spoiler : true,
			file : $client->inputFile(
				id : -1249434734559451890,
				parts : 19,
				name : 'lW21G96L0rjmodny',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : 5255462086721253503,
					access_hash : 5519562386736117876,
					file_reference : '??#?/LiveProto?WL+',
				),
			),
			ttl_seconds : 50,
		),
		$client->inputMediaPhoto(
			spoiler : true,
			id : $client->inputPhotoEmpty(),
			ttl_seconds : 85,
		),
		$client->inputMediaGeoPoint(
			geo_point : $client->inputGeoPointEmpty(),
		),
		$client->inputMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : 'WM4SIYCE28Nnq7bB',
		),
		$client->inputMediaUploadedDocument(
			nosound_video : true,
			force_file : true,
			spoiler : true,
			file : $client->inputFile(
				id : 3151040715893054180,
				parts : 21,
				name : 'BFN8ki7JSyKLU52P',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			thumb : $client->inputFile(
				id : -4059400253072844924,
				parts : 41,
				name : '3HvnfTaZPojVw4Nq',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			mime_type : '4cwgBGYxJ05PVQMI',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 65,
					h : 98,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'tn73Dy5QadGzfYME',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1720949.5908203125,
					w : 6,
					h : 18,
					preload_prefix_size : 22,
					video_start_ts : -741978.58203125,
					video_codec : 'A7J8Bx0PaEronD2b',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 55,
					title : 'lq4bI1xBSdEH3gRf',
					performer : 'j1vBI9LWc2A7Dnrq',
					waveform : '???2?LiveProto??`<?',
				),
				$client->documentAttributeFilename(
					file_name : 'tvUYqI8nQO71wyHi',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'L2PjFdKce8ZHS4Vp',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : -3396096962268051307,
					access_hash : 5704520519266224875,
					file_reference : '?\'?LiveProto?O?',
				),
			),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 90,
			ttl_seconds : 58,
		),
		$client->inputMediaDocument(
			spoiler : true,
			id : $client->inputDocumentEmpty(),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 89,
			ttl_seconds : 59,
			query : 'v5eXNycrLMuGjAOl',
		),
		$client->inputMediaVenue(
			geo_point : $client->inputGeoPointEmpty(),
			title : 'sIREQUqmLkVJBCrP',
			address : 'oqEx7HsrzkN4D1MA',
			provider : 'jdZGb7MOo39SIthK',
			venue_id : 'Hi2FVkYU15Bj36yE',
			venue_type : 'R7EufCOvKZlUX4k1',
		),
		$client->inputMediaPhotoExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 43,
		),
		$client->inputMediaDocumentExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 35,
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 30,
		),
		$client->inputMediaGame(
			id : $client->inputGameID(
				id : 8702164534464309749,
				access_hash : 6168944947589705645,
			),
		),
		$client->inputMediaInvoice(
			title : '0XKwogmVPjel6daT',
			description : 'Z2kBx9RFgPH3Gbhp',
			photo : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 23,
				mime_type : 'XuAJlcYyg0qCMmjP',
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
				currency : '2sNLOCkKJahfZXp4',
				prices : array(
					$client->labeledPrice(...),
				),
				max_tip_amount : -7380696094187249215,
				suggested_tip_amounts : array(-9123068175824142908),
				terms_url : 'https://docs.liveproto.dev',
				subscription_period : 12,
			),
			payload : 'f?j?LiveProto????G',
			provider : 'iONJpxSVfyz0Kj12',
			provider_data : $client->dataJSON(
				data : '6zuea90wDrQUhG3b',
			),
			start_param : 'LJ1wxVQhMjpidv9F',
			extended_media : $client->inputMediaEmpty(),
		),
		$client->inputMediaGeoLive(
			stopped : true,
			geo_point : $client->inputGeoPointEmpty(),
			heading : 24,
			period : 47,
			proximity_notification_radius : 30,
		),
		$client->inputMediaPoll(
			poll : $client->poll(
				id : -5584458582740983748,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 10,
				close_date : 97,
			),
			correct_answers : array('???v?LiveProto?Uz'),
			solution : 'mP1ep8XvoUkBsVTZ',
			solution_entities : array(
				$client->messageEntityUnknown(
					offset : 21,
					length : 3,
				),
				$client->messageEntityMention(
					offset : 52,
					length : 62,
				),
				$client->messageEntityHashtag(
					offset : 20,
					length : 92,
				),
				$client->messageEntityBotCommand(
					offset : 50,
					length : 77,
				),
				$client->messageEntityUrl(
					offset : 43,
					length : 23,
				),
				$client->messageEntityEmail(
					offset : 19,
					length : 29,
				),
				$client->messageEntityBold(
					offset : 3,
					length : 56,
				),
				$client->messageEntityItalic(
					offset : 43,
					length : 44,
				),
				$client->messageEntityCode(
					offset : 37,
					length : 35,
				),
				$client->messageEntityPre(
					offset : 56,
					length : 60,
					language : 'lXidCRTIthFDzHsq',
				),
				$client->messageEntityTextUrl(
					offset : 69,
					length : 30,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 80,
					length : 7,
					user_id : 6740677419869674996,
				),
				$client->inputMessageEntityMentionName(
					offset : 46,
					length : 75,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 67,
					length : 75,
				),
				$client->messageEntityCashtag(
					offset : 80,
					length : 94,
				),
				$client->messageEntityUnderline(
					offset : 18,
					length : 53,
				),
				$client->messageEntityStrike(
					offset : 71,
					length : 100,
				),
				$client->messageEntityBankCard(
					offset : 36,
					length : 65,
				),
				$client->messageEntitySpoiler(
					offset : 98,
					length : 84,
				),
				$client->messageEntityCustomEmoji(
					offset : 44,
					length : 25,
					document_id : -8030009240688649680,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 86,
					length : 80,
				),
			),
		),
		$client->inputMediaDice(
			emoticon : '62nhBTHDUxEzocvf',
		),
		$client->inputMediaStory(
			peer : $client->inputPeerEmpty(),
			id : 77,
		),
		$client->inputMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			optional : true,
			url : 'https://docs.liveproto.dev',
		),
		$client->inputMediaPaidMedia(
			stars_amount : -7157216119237757637,
			extended_media : array(
				$client->inputMediaEmpty(),
				$client->inputMediaUploadedPhoto(
					spoiler : true,
					file : $client->inputFile(...),
					stickers : array(
						$client->inputDocumentEmpty(...),
						$client->inputDocument(...),
					),
					ttl_seconds : 57,
				),
				$client->inputMediaPhoto(
					spoiler : true,
					id : $client->inputPhotoEmpty(...),
					ttl_seconds : 85,
				),
				$client->inputMediaGeoPoint(
					geo_point : $client->inputGeoPointEmpty(...),
				),
				$client->inputMediaContact(
					phone_number : '+1234567890',
					first_name : 'Tak',
					last_name : 'None',
					vcard : 'tjl9VqcpiaWG7XSM',
				),
				$client->inputMediaUploadedDocument(
					nosound_video : true,
					force_file : true,
					spoiler : true,
					file : $client->inputFile(...),
					thumb : $client->inputFile(...),
					mime_type : 'avA0msNP8VliDeJL',
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
					video_timestamp : 57,
					ttl_seconds : 73,
				),
				$client->inputMediaDocument(
					spoiler : true,
					id : $client->inputDocumentEmpty(...),
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 77,
					ttl_seconds : 97,
					query : '1j7kQ3utozJaqxYU',
				),
				$client->inputMediaVenue(
					geo_point : $client->inputGeoPointEmpty(...),
					title : '9PqBbp1gCAHZ6WxF',
					address : 'hipCgtV9H4jYBard',
					provider : 'WTygzvjBlK9tGsd1',
					venue_id : 'lLjZo3SQeTVRbEU7',
					venue_type : 'ylGh3Q5gbEC8PwxX',
				),
				$client->inputMediaPhotoExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 71,
				),
				$client->inputMediaDocumentExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 99,
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 58,
				),
				$client->inputMediaGame(
					id : $client->inputGameID(...),
				),
				$client->inputMediaInvoice(
					title : '0AnylLjZT7rVHRW8',
					description : 'hIM7Ujr0stvbBR9c',
					photo : $client->inputWebDocument(...),
					invoice : $client->invoice(...),
					payload : '7?]?oLiveProto' . "\0" . '{Q,?',
					provider : 'B6KeGTbaqW8XxIVc',
					provider_data : $client->dataJSON(...),
					start_param : '0bsxe63tWyM7hrEP',
					extended_media : $client->inputMediaEmpty(...),
				),
				$client->inputMediaGeoLive(
					stopped : true,
					geo_point : $client->inputGeoPointEmpty(...),
					heading : 2,
					period : 45,
					proximity_notification_radius : 19,
				),
				$client->inputMediaPoll(
					poll : $client->poll(...),
					correct_answers : array('(?[?LiveProtoG?d}?'),
					solution : 'rTlPyf19FoM26bXp',
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
					emoticon : 'rpWwh2968Ra3xsZf',
				),
				$client->inputMediaStory(
					peer : $client->inputPeerEmpty(...),
					id : 71,
				),
				$client->inputMediaWebPage(
					force_large_media : true,
					force_small_media : true,
					optional : true,
					url : 'https://docs.liveproto.dev',
				),
				$client->inputMediaPaidMedia(
					stars_amount : 4081650226674432718,
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
					payload : '37Fye9DihlOPNo01',
				),
				$client->inputMediaTodo(
					todo : $client->todoList(...),
				),
			),
			payload : 'pHBkPTI47uvVZKtN',
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