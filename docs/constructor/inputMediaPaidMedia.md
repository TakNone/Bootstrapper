# inputMediaPaidMedia

**Description** : *Paid media, see here &raquo; for more info*

**Layer** : 214

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
	stars_amount : 5231986624917133536,
	extended_media : array(
		$client->inputMediaEmpty(),
		$client->inputMediaUploadedPhoto(
			spoiler : true,
			file : $client->inputFile(
				id : -1742668461305557894,
				parts : 56,
				name : '625WiBM4rxmebXQh',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : -1415165183076442064,
					access_hash : 6035069988584547365,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			ttl_seconds : 67,
		),
		$client->inputMediaPhoto(
			spoiler : true,
			id : $client->inputPhotoEmpty(),
			ttl_seconds : 88,
		),
		$client->inputMediaGeoPoint(
			geo_point : $client->inputGeoPointEmpty(),
		),
		$client->inputMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : 'KzxCr2kvI5S4RNts',
		),
		$client->inputMediaUploadedDocument(
			nosound_video : true,
			force_file : true,
			spoiler : true,
			file : $client->inputFile(
				id : 9202313536860096910,
				parts : 67,
				name : 'Z0yDBIzFinEP4dR5',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			thumb : $client->inputFile(
				id : -1457961626284797961,
				parts : 36,
				name : 'ANfu9iGnJTtODMWF',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			mime_type : 'WcXjq2YzbD0RQGFm',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 74,
					h : 73,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'p7SDTjOZRrsV1eqB',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1236329.154296875,
					w : 23,
					h : 54,
					preload_prefix_size : 5,
					video_start_ts : 283947.384765625,
					video_codec : 'lOiFLPXJCenBDGrg',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 24,
					title : 'aOoAzFE3CcjGXPxV',
					performer : '3erFWBEcQAoYRh9V',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'O4rn7jTbMI61FiAg',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'JdSUW6z4ywsKqgvk',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : -6819053689776158435,
					access_hash : 8226911177963894646,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 39,
			ttl_seconds : 27,
		),
		$client->inputMediaDocument(
			spoiler : true,
			id : $client->inputDocumentEmpty(),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 58,
			ttl_seconds : 29,
			query : '4qDBt5N6rzbRLeME',
		),
		$client->inputMediaVenue(
			geo_point : $client->inputGeoPointEmpty(),
			title : 'OnY49ZxR8U3NyiqL',
			address : 'BhfyTKG68Neg5VEn',
			provider : 'rpgyHxBA3VKIRfFc',
			venue_id : 'WCutd5kAryF83Xs1',
			venue_type : 'sv7UzwYLSbdF8NJ2',
		),
		$client->inputMediaPhotoExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 6,
		),
		$client->inputMediaDocumentExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 36,
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 82,
		),
		$client->inputMediaGame(
			id : $client->inputGameID(
				id : -8108723495192972252,
				access_hash : -8279675084481385216,
			),
		),
		$client->inputMediaInvoice(
			title : 'RChg6x13OQiWSmf8',
			description : '8Q4YIgikowmjCfSr',
			photo : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 2,
				mime_type : '7ymbcsAXVtFTQlr1',
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
				currency : 'HjOwuKM340YCs9bx',
				prices : array(
					$client->labeledPrice(...),
				),
				max_tip_amount : -6569167422809334879,
				suggested_tip_amounts : array(3202197634902754778),
				terms_url : 'https://docs.liveproto.dev',
				subscription_period : 46,
			),
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			provider : 'v07WajxzCYpkiPF8',
			provider_data : $client->dataJSON(
				data : '8sdCIRY1Exko2Op9',
			),
			start_param : 'eagb2j01SywMQNsR',
			extended_media : $client->inputMediaEmpty(),
		),
		$client->inputMediaGeoLive(
			stopped : true,
			geo_point : $client->inputGeoPointEmpty(),
			heading : 28,
			period : 87,
			proximity_notification_radius : 57,
		),
		$client->inputMediaPoll(
			poll : $client->poll(
				id : -6646706316240438318,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 24,
				close_date : 11,
			),
			correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			solution : 'AR9FUCvN5qIm74DY',
			solution_entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 6,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 88,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 49,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 12,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 90,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 81,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 62,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 24,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 57,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 18,
					language : 'ZbdYStCNG7pyfnvT',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 65,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 17,
					user_id : -8804425612493125185,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 48,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 46,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 30,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 78,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 54,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 94,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 20,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 46,
					document_id : 1621743277611358516,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 67,
				),
			),
		),
		$client->inputMediaDice(
			emoticon : 'vxpaEWo7UVqQKrAz',
		),
		$client->inputMediaStory(
			peer : $client->inputPeerEmpty(),
			id : 36,
		),
		$client->inputMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			optional : true,
			url : 'https://docs.liveproto.dev',
		),
		$client->inputMediaPaidMedia(
			stars_amount : 1070155542418116048,
			extended_media : array(
				$client->inputMediaEmpty(),
				$client->inputMediaUploadedPhoto(
					spoiler : true,
					file : $client->inputFile(...),
					stickers : array(
						$client->inputDocumentEmpty(...),
						$client->inputDocument(...),
					),
					ttl_seconds : 91,
				),
				$client->inputMediaPhoto(
					spoiler : true,
					id : $client->inputPhotoEmpty(...),
					ttl_seconds : 25,
				),
				$client->inputMediaGeoPoint(
					geo_point : $client->inputGeoPointEmpty(...),
				),
				$client->inputMediaContact(
					phone_number : '+1234567890',
					first_name : 'Tak',
					last_name : 'None',
					vcard : '63KlxsqFXAuYBr41',
				),
				$client->inputMediaUploadedDocument(
					nosound_video : true,
					force_file : true,
					spoiler : true,
					file : $client->inputFile(...),
					thumb : $client->inputFile(...),
					mime_type : '70bk3GgRSn5APxsf',
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
					video_timestamp : 18,
					ttl_seconds : 48,
				),
				$client->inputMediaDocument(
					spoiler : true,
					id : $client->inputDocumentEmpty(...),
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 61,
					ttl_seconds : 81,
					query : 'mI86CWvPwH0NjlpO',
				),
				$client->inputMediaVenue(
					geo_point : $client->inputGeoPointEmpty(...),
					title : 'vqhT8SoakwJE1fc2',
					address : 'gBKicJFkP9G0UzeN',
					provider : 'HQzoARFeOZ1winuG',
					venue_id : 'dvxiEgkSCHpYWu0R',
					venue_type : 'cB8wnGJ5aV1hex9E',
				),
				$client->inputMediaPhotoExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 32,
				),
				$client->inputMediaDocumentExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 36,
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 86,
				),
				$client->inputMediaGame(
					id : $client->inputGameID(...),
				),
				$client->inputMediaInvoice(
					title : 'PMXURYe97g1LKFx2',
					description : 'qN5aSfsm6c1hRPuo',
					photo : $client->inputWebDocument(...),
					invoice : $client->invoice(...),
					payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					provider : 'jNeKqSyYB1GCkfhm',
					provider_data : $client->dataJSON(...),
					start_param : 'CygBsfQR5SkTJWwF',
					extended_media : $client->inputMediaEmpty(...),
				),
				$client->inputMediaGeoLive(
					stopped : true,
					geo_point : $client->inputGeoPointEmpty(...),
					heading : 3,
					period : 35,
					proximity_notification_radius : 1,
				),
				$client->inputMediaPoll(
					poll : $client->poll(...),
					correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
					solution : 'j8N4RqT7Jehbo9M5',
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
					emoticon : 'aJb8uxOMs7mX3LrV',
				),
				$client->inputMediaStory(
					peer : $client->inputPeerEmpty(...),
					id : 27,
				),
				$client->inputMediaWebPage(
					force_large_media : true,
					force_small_media : true,
					optional : true,
					url : 'https://docs.liveproto.dev',
				),
				$client->inputMediaPaidMedia(
					stars_amount : 1553692410762768543,
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
					payload : 'rpFQaI82JGkjhs5E',
				),
				$client->inputMediaTodo(
					todo : $client->todoList(...),
				),
			),
			payload : 'mebAsqYkVnxjR5oK',
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
	payload : 'pXLHnfcGW1RvmJBM',
);
```