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
	stars_amount : -13029972686849994,
	extended_media : array(
		$client->inputMediaEmpty(),
		$client->inputMediaUploadedPhoto(
			spoiler : true,
			file : $client->inputFile(
				id : -9127153175477707491,
				parts : 78,
				name : 'gMEUNr8Pcts1qJ2K',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : -4140725838605241764,
					access_hash : -4733576824139252909,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			ttl_seconds : 62,
		),
		$client->inputMediaPhoto(
			spoiler : true,
			id : $client->inputPhotoEmpty(),
			ttl_seconds : 39,
		),
		$client->inputMediaGeoPoint(
			geo_point : $client->inputGeoPointEmpty(),
		),
		$client->inputMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : '12rSmeQh4xOlMRnE',
		),
		$client->inputMediaUploadedDocument(
			nosound_video : true,
			force_file : true,
			spoiler : true,
			file : $client->inputFile(
				id : -4606681010139772926,
				parts : 13,
				name : 'sA50F4a3ilCcgrD8',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			thumb : $client->inputFile(
				id : -7165124489495543727,
				parts : 23,
				name : 'IQTF75hPX4kVuLiO',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			mime_type : 'XtGaSUORFQMugzvk',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 87,
					h : 84,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'mVg15GxI2RrFqSEJ',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1606562.482421875,
					w : 17,
					h : 7,
					preload_prefix_size : 83,
					video_start_ts : -944746.666015625,
					video_codec : 'PNTWF2X3DfuZdJbi',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 33,
					title : 'RA3zsoiYfDGVS9B8',
					performer : 'Ko63bGjERgnNqkuS',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 't2oNLTRV7wvuQIdh',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '26u0cF9f58RHKB1j',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : -2716163182994709370,
					access_hash : 3507494613423968829,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 87,
			ttl_seconds : 35,
		),
		$client->inputMediaDocument(
			spoiler : true,
			id : $client->inputDocumentEmpty(),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 63,
			ttl_seconds : 42,
			query : 'CRdsZBcwoYvASynu',
		),
		$client->inputMediaVenue(
			geo_point : $client->inputGeoPointEmpty(),
			title : 'yRUW1n76AxvgTslz',
			address : 'vB9c5wb80ZY72heE',
			provider : '5vH3C1iZ8TyIONcw',
			venue_id : 'huamo2JIHwfDBpSO',
			venue_type : 'RBkvAlQL54i2dOJ3',
		),
		$client->inputMediaPhotoExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 64,
		),
		$client->inputMediaDocumentExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 22,
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 5,
		),
		$client->inputMediaGame(
			id : $client->inputGameID(
				id : -1653492287325174282,
				access_hash : -3640215197238651815,
			),
		),
		$client->inputMediaInvoice(
			title : 'MHRoQEtzB0NY7DKS',
			description : 'mCenQv0d1GfYUypi',
			photo : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 87,
				mime_type : '3Mwf18AJbcuseoRm',
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
				currency : 'wtHMpiXsfVn4CIlD',
				prices : array(
					$client->labeledPrice(...),
				),
				max_tip_amount : -7991663307984917233,
				suggested_tip_amounts : array(-4401869714843836904),
				terms_url : 'https://docs.liveproto.dev',
				subscription_period : 94,
			),
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			provider : 'bwVM7uJshZRdHec0',
			provider_data : $client->dataJSON(
				data : 'vh9xSC0TEaA17zqo',
			),
			start_param : 'sZe8z0GhMwJF7PSY',
			extended_media : $client->inputMediaEmpty(),
		),
		$client->inputMediaGeoLive(
			stopped : true,
			geo_point : $client->inputGeoPointEmpty(),
			heading : 51,
			period : 45,
			proximity_notification_radius : 83,
		),
		$client->inputMediaPoll(
			poll : $client->poll(
				id : 8987079524064228008,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 70,
				close_date : 30,
			),
			correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			solution : 'soX5UzKTBO4Fgp6D',
			solution_entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 51,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 47,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 13,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 61,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 47,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 44,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 73,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 70,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 60,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 26,
					language : 'vZtMWRVcB4eUsblF',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 52,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 48,
					user_id : -65243283208976330,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 92,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 15,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 92,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 81,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 48,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 74,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 47,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 18,
					document_id : -5795954963209348459,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 3,
				),
			),
		),
		$client->inputMediaDice(
			emoticon : 'n1gNqEO4KYSRpxXv',
		),
		$client->inputMediaStory(
			peer : $client->inputPeerEmpty(),
			id : 8,
		),
		$client->inputMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			optional : true,
			url : 'https://docs.liveproto.dev',
		),
		$client->inputMediaPaidMedia(
			stars_amount : -3326655242004864763,
			extended_media : array(
				$client->inputMediaEmpty(),
				$client->inputMediaUploadedPhoto(
					spoiler : true,
					file : $client->inputFile(...),
					stickers : array(
						$client->inputDocumentEmpty(...),
						$client->inputDocument(...),
					),
					ttl_seconds : 32,
				),
				$client->inputMediaPhoto(
					spoiler : true,
					id : $client->inputPhotoEmpty(...),
					ttl_seconds : 95,
				),
				$client->inputMediaGeoPoint(
					geo_point : $client->inputGeoPointEmpty(...),
				),
				$client->inputMediaContact(
					phone_number : '+1234567890',
					first_name : 'Tak',
					last_name : 'None',
					vcard : 'lNTde1cv9QCAEPsi',
				),
				$client->inputMediaUploadedDocument(
					nosound_video : true,
					force_file : true,
					spoiler : true,
					file : $client->inputFile(...),
					thumb : $client->inputFile(...),
					mime_type : '2QBE6nlkaeYMzi70',
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
					video_timestamp : 1,
					ttl_seconds : 8,
				),
				$client->inputMediaDocument(
					spoiler : true,
					id : $client->inputDocumentEmpty(...),
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 88,
					ttl_seconds : 16,
					query : '2ZpLc7nOae93hvVw',
				),
				$client->inputMediaVenue(
					geo_point : $client->inputGeoPointEmpty(...),
					title : 'vuwtcpZUys5dEJLm',
					address : 'k942RSmU7OauhydC',
					provider : 'uHksOxfchyi0Sj2D',
					venue_id : 'B36OYjcaMdRDh5zC',
					venue_type : 'E1oT3HLbywIRZ7C6',
				),
				$client->inputMediaPhotoExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 75,
				),
				$client->inputMediaDocumentExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 3,
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 91,
				),
				$client->inputMediaGame(
					id : $client->inputGameID(...),
				),
				$client->inputMediaInvoice(
					title : 'JCIHXA8toWdKnl3P',
					description : 'rwdfVqR9L0ETAv7a',
					photo : $client->inputWebDocument(...),
					invoice : $client->invoice(...),
					payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					provider : 'xDC8pvZf2hysSOjR',
					provider_data : $client->dataJSON(...),
					start_param : '4Guf1o7BxQPvVk0m',
					extended_media : $client->inputMediaEmpty(...),
				),
				$client->inputMediaGeoLive(
					stopped : true,
					geo_point : $client->inputGeoPointEmpty(...),
					heading : 69,
					period : 1,
					proximity_notification_radius : 78,
				),
				$client->inputMediaPoll(
					poll : $client->poll(...),
					correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
					solution : '84slvhjEPbYGUrKH',
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
					emoticon : 'E6WlogxHQTDerC1L',
				),
				$client->inputMediaStory(
					peer : $client->inputPeerEmpty(...),
					id : 1,
				),
				$client->inputMediaWebPage(
					force_large_media : true,
					force_small_media : true,
					optional : true,
					url : 'https://docs.liveproto.dev',
				),
				$client->inputMediaPaidMedia(
					stars_amount : 8614282326028435005,
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
					payload : 'EWa98g4GKc1RV6f0',
				),
				$client->inputMediaTodo(
					todo : $client->todoList(...),
				),
			),
			payload : 'GB4U6yn7NihRqw8v',
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
	payload : 'YZFGbtk5A3jlDLz8',
);
```