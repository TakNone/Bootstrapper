# bots.reorderPreviewMedias

**Description** : *Reorder a main mini app previews, see here &raquo; for more info*

**Layer** : 211

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
	lang_code : 'tiHqmxw8W7YJAU2d',
	order : array(
		$client->inputMediaEmpty(),
		$client->inputMediaUploadedPhoto(
			spoiler : true,
			file : $client->inputFile(
				id : -7989628965932645623,
				parts : 12,
				name : 'EIBPRyZn7T4Dt8zx',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : 6958580578472226653,
					access_hash : 6423783762364008492,
					file_reference : '⧪o@LiveProto?ڠt?',
				),
			),
			ttl_seconds : 86,
		),
		$client->inputMediaPhoto(
			spoiler : true,
			id : $client->inputPhotoEmpty(),
			ttl_seconds : 35,
		),
		$client->inputMediaGeoPoint(
			geo_point : $client->inputGeoPointEmpty(),
		),
		$client->inputMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : 'Guot0JZ82xqpXgbc',
		),
		$client->inputMediaUploadedDocument(
			nosound_video : true,
			force_file : true,
			spoiler : true,
			file : $client->inputFile(
				id : -8991399704602436200,
				parts : 71,
				name : '3C5nd0GNrATkUY8Q',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			thumb : $client->inputFile(
				id : 3842614067915105425,
				parts : 7,
				name : 'BZLd03VxQA8GgYiJ',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			mime_type : 'EkrZAt0pms4Nc2fo',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 99,
					h : 2,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'UlA162gVpdqHQjhM',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1697968.439453125,
					w : 15,
					h : 99,
					preload_prefix_size : 74,
					video_start_ts : -1620911.333984375,
					video_codec : 'gKFl1q9yMnLC25fr',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 3,
					title : 'UENcrTBtoDjI1FvC',
					performer : 'Vz3TsGfjDvS2QYB1',
					waveform : 'y????LiveProto?#?^?',
				),
				$client->documentAttributeFilename(
					file_name : 'nq9akR0vHcyIG6XU',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'ngGDSLRz6E5Mah3P',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : -2761438956362471248,
					access_hash : 8195441183138040479,
					file_reference : ',???LiveProto?z???',
				),
			),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 29,
			ttl_seconds : 30,
		),
		$client->inputMediaDocument(
			spoiler : true,
			id : $client->inputDocumentEmpty(),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 0,
			ttl_seconds : 41,
			query : 'Nxr6jbWzYTXLCAQ4',
		),
		$client->inputMediaVenue(
			geo_point : $client->inputGeoPointEmpty(),
			title : 'AEtUSwNPxgfeLTcl',
			address : 'dnke24tOshKuAizE',
			provider : 'HguE6ZcfmLjvGTdU',
			venue_id : 'GCrM80JlPxW47ZkR',
			venue_type : '8VAxkIYJyWaOfslt',
		),
		$client->inputMediaPhotoExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 47,
		),
		$client->inputMediaDocumentExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 37,
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 34,
		),
		$client->inputMediaGame(
			id : $client->inputGameID(
				id : 560967680626113673,
				access_hash : 6264439318875978081,
			),
		),
		$client->inputMediaInvoice(
			title : 'lEnpIk90XHmZOqVQ',
			description : 'Gr1IZNaHusncB3DP',
			photo : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 53,
				mime_type : 'y50WFZq7b8o9vDkj',
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
				currency : 'r2CQ5sWJFYKONa0c',
				prices : array(
					$client->labeledPrice(...),
				),
				max_tip_amount : -6042963680791214820,
				suggested_tip_amounts : array(-6785014421029401518),
				terms_url : 'https://docs.liveproto.dev',
				subscription_period : 7,
			),
			payload : '[??(?LiveProtoj?J%?',
			provider : 'epQDdmVy3Zi8XUtN',
			provider_data : $client->dataJSON(
				data : 'CJFv3DMy59RiAEoB',
			),
			start_param : 'keRiXIcFsGp9B0wO',
			extended_media : $client->inputMediaEmpty(),
		),
		$client->inputMediaGeoLive(
			stopped : true,
			geo_point : $client->inputGeoPointEmpty(),
			heading : 56,
			period : 48,
			proximity_notification_radius : 100,
		),
		$client->inputMediaPoll(
			poll : $client->poll(
				id : -1456014658893402369,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 90,
				close_date : 53,
			),
			correct_answers : array('??uH=LiveProto8?dl?'),
			solution : 'NaRfi24lUPTJHtOo',
			solution_entities : array(
				$client->messageEntityUnknown(
					offset : 45,
					length : 1,
				),
				$client->messageEntityMention(
					offset : 40,
					length : 78,
				),
				$client->messageEntityHashtag(
					offset : 50,
					length : 91,
				),
				$client->messageEntityBotCommand(
					offset : 78,
					length : 25,
				),
				$client->messageEntityUrl(
					offset : 42,
					length : 2,
				),
				$client->messageEntityEmail(
					offset : 96,
					length : 18,
				),
				$client->messageEntityBold(
					offset : 69,
					length : 45,
				),
				$client->messageEntityItalic(
					offset : 11,
					length : 38,
				),
				$client->messageEntityCode(
					offset : 94,
					length : 50,
				),
				$client->messageEntityPre(
					offset : 54,
					length : 77,
					language : 'VpmC9qkrf3Mn1atF',
				),
				$client->messageEntityTextUrl(
					offset : 4,
					length : 56,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 6,
					length : 88,
					user_id : 7820321498514761042,
				),
				$client->inputMessageEntityMentionName(
					offset : 30,
					length : 54,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 93,
					length : 78,
				),
				$client->messageEntityCashtag(
					offset : 32,
					length : 17,
				),
				$client->messageEntityUnderline(
					offset : 64,
					length : 26,
				),
				$client->messageEntityStrike(
					offset : 17,
					length : 48,
				),
				$client->messageEntityBankCard(
					offset : 41,
					length : 15,
				),
				$client->messageEntitySpoiler(
					offset : 24,
					length : 45,
				),
				$client->messageEntityCustomEmoji(
					offset : 69,
					length : 75,
					document_id : -4706425562349931719,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 50,
					length : 97,
				),
			),
		),
		$client->inputMediaDice(
			emoticon : 'ySsBnvbJAZ3HL08h',
		),
		$client->inputMediaStory(
			peer : $client->inputPeerEmpty(),
			id : 16,
		),
		$client->inputMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			optional : true,
			url : 'https://docs.liveproto.dev',
		),
		$client->inputMediaPaidMedia(
			stars_amount : 7162499469187558184,
			extended_media : array(
				$client->inputMediaEmpty(),
				$client->inputMediaUploadedPhoto(
					spoiler : true,
					file : $client->inputFile(...),
					stickers : array(
						$client->inputDocumentEmpty(...),
						$client->inputDocument(...),
					),
					ttl_seconds : 85,
				),
				$client->inputMediaPhoto(
					spoiler : true,
					id : $client->inputPhotoEmpty(...),
					ttl_seconds : 83,
				),
				$client->inputMediaGeoPoint(
					geo_point : $client->inputGeoPointEmpty(...),
				),
				$client->inputMediaContact(
					phone_number : '+1234567890',
					first_name : 'Tak',
					last_name : 'None',
					vcard : 'k6lqS4ZausDheBLP',
				),
				$client->inputMediaUploadedDocument(
					nosound_video : true,
					force_file : true,
					spoiler : true,
					file : $client->inputFile(...),
					thumb : $client->inputFile(...),
					mime_type : 't1cIQ0zu3XLbEZmv',
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
					video_timestamp : 69,
					ttl_seconds : 24,
				),
				$client->inputMediaDocument(
					spoiler : true,
					id : $client->inputDocumentEmpty(...),
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 1,
					ttl_seconds : 31,
					query : 'zlDqNAKQfPbWvGw6',
				),
				$client->inputMediaVenue(
					geo_point : $client->inputGeoPointEmpty(...),
					title : 'bl6RvyUVNifI8Zw9',
					address : 'xtyvUTKehD8IrOk0',
					provider : '2AzojwHWsd0VfnFb',
					venue_id : '0Oxah8XT2up3oRfJ',
					venue_type : 'jhrQbAtPNnUacBMy',
				),
				$client->inputMediaPhotoExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 13,
				),
				$client->inputMediaDocumentExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 37,
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 12,
				),
				$client->inputMediaGame(
					id : $client->inputGameID(...),
				),
				$client->inputMediaInvoice(
					title : 'ZnFMXVi0wE1oNS49',
					description : 'fz2MYXESZwuAJg9c',
					photo : $client->inputWebDocument(...),
					invoice : $client->invoice(...),
					payload : 'sݷ)LiveProto>i\'ԝ',
					provider : '90gWGtSPiXVf6cdF',
					provider_data : $client->dataJSON(...),
					start_param : '56ps0bwgcZEN8eYy',
					extended_media : $client->inputMediaEmpty(...),
				),
				$client->inputMediaGeoLive(
					stopped : true,
					geo_point : $client->inputGeoPointEmpty(...),
					heading : 56,
					period : 32,
					proximity_notification_radius : 61,
				),
				$client->inputMediaPoll(
					poll : $client->poll(...),
					correct_answers : array('!?kY?LiveProto3cg'),
					solution : 'pUcqlOHYriyRIxEb',
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
					emoticon : 'plAPW9OjwFG15bIB',
				),
				$client->inputMediaStory(
					peer : $client->inputPeerEmpty(...),
					id : 40,
				),
				$client->inputMediaWebPage(
					force_large_media : true,
					force_small_media : true,
					optional : true,
					url : 'https://docs.liveproto.dev',
				),
				$client->inputMediaPaidMedia(
					stars_amount : 3769731422357655329,
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
					payload : 'fgSr3qUlnwWF6u8K',
				),
				$client->inputMediaTodo(
					todo : $client->todoList(...),
				),
			),
			payload : '2Kp6FdUiYhaIgeXV',
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