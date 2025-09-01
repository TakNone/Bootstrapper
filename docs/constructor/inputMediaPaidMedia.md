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
	stars_amount : 203617065692389774,
	extended_media : array(
		$client->inputMediaEmpty(),
		$client->inputMediaUploadedPhoto(
			spoiler : true,
			file : $client->inputFile(
				id : -7320648717625138903,
				parts : 83,
				name : 'In8iFvGby7fga5ox',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : -4353392914064084297,
					access_hash : 1371432201904518040,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			ttl_seconds : 20,
		),
		$client->inputMediaPhoto(
			spoiler : true,
			id : $client->inputPhotoEmpty(),
			ttl_seconds : 21,
		),
		$client->inputMediaGeoPoint(
			geo_point : $client->inputGeoPointEmpty(),
		),
		$client->inputMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : 'EQDKnqTt21xLcprA',
		),
		$client->inputMediaUploadedDocument(
			nosound_video : true,
			force_file : true,
			spoiler : true,
			file : $client->inputFile(
				id : -806152467982515409,
				parts : 38,
				name : '7zwpxXin5ZuDyhTq',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			thumb : $client->inputFile(
				id : -4897653336623006539,
				parts : 5,
				name : 'GC7VUP8EDZg9muBk',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			mime_type : 'kPCmotiYWhRO34IG',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 17,
					h : 98,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '9LcjoMfOW1nPEUTh',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 389083.1396484375,
					w : 43,
					h : 79,
					preload_prefix_size : 53,
					video_start_ts : 248880.142578125,
					video_codec : '8fKpx9qkaXzwot0A',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 51,
					title : 'cgYbm5P6ZjWiVN7U',
					performer : 'd47LnxewRstQlk30',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '2wSfBQNDkEAayKv9',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'PD0Hhqu7jQkK1ZnF',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : 3880867896258456487,
					access_hash : 5446446265362607339,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 13,
			ttl_seconds : 95,
		),
		$client->inputMediaDocument(
			spoiler : true,
			id : $client->inputDocumentEmpty(),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 10,
			ttl_seconds : 80,
			query : 'tXfAjq94iwKChNul',
		),
		$client->inputMediaVenue(
			geo_point : $client->inputGeoPointEmpty(),
			title : 'msGVYkNaOpP1vJFA',
			address : '0zpy2wMGlJXcIYVu',
			provider : '9UzFyENHIhLnDqWu',
			venue_id : 'zeyr7iDkFNRYJ1qA',
			venue_type : '7HJXY2n1Tw90ogzf',
		),
		$client->inputMediaPhotoExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 12,
		),
		$client->inputMediaDocumentExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 96,
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 76,
		),
		$client->inputMediaGame(
			id : $client->inputGameID(
				id : -4681026533063576112,
				access_hash : -781648431311198673,
			),
		),
		$client->inputMediaInvoice(
			title : 'weDYFHmnX2syaoCW',
			description : 'FeIq7AzmKGlSwNaB',
			photo : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 45,
				mime_type : '3X9qn5Lf1toiFbz0',
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
				currency : 'KUZdxrJIGovXEcwp',
				prices : array(
					$client->labeledPrice(...),
				),
				max_tip_amount : 1975385914855048148,
				suggested_tip_amounts : array(6612959694625557983),
				terms_url : 'https://docs.liveproto.dev',
				subscription_period : 66,
			),
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			provider : 'ztsCvoawIqU1P5cn',
			provider_data : $client->dataJSON(
				data : 'BoKxlTVjyw3Oczf9',
			),
			start_param : 'oOR503pAfXBIDi4c',
			extended_media : $client->inputMediaEmpty(),
		),
		$client->inputMediaGeoLive(
			stopped : true,
			geo_point : $client->inputGeoPointEmpty(),
			heading : 60,
			period : 100,
			proximity_notification_radius : 65,
		),
		$client->inputMediaPoll(
			poll : $client->poll(
				id : -895017291345696472,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 93,
				close_date : 21,
			),
			correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			solution : 'i1J0UDvgzbrhTXet',
			solution_entities : array(
				$client->messageEntityUnknown(
					offset : 89,
					length : 80,
				),
				$client->messageEntityMention(
					offset : 38,
					length : 2,
				),
				$client->messageEntityHashtag(
					offset : 67,
					length : 60,
				),
				$client->messageEntityBotCommand(
					offset : 56,
					length : 47,
				),
				$client->messageEntityUrl(
					offset : 31,
					length : 16,
				),
				$client->messageEntityEmail(
					offset : 14,
					length : 77,
				),
				$client->messageEntityBold(
					offset : 95,
					length : 38,
				),
				$client->messageEntityItalic(
					offset : 79,
					length : 46,
				),
				$client->messageEntityCode(
					offset : 99,
					length : 29,
				),
				$client->messageEntityPre(
					offset : 97,
					length : 95,
					language : 'jVwSH4U0bI1GpWDJ',
				),
				$client->messageEntityTextUrl(
					offset : 19,
					length : 75,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 52,
					length : 23,
					user_id : -7325991272013962714,
				),
				$client->inputMessageEntityMentionName(
					offset : 97,
					length : 50,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 42,
					length : 70,
				),
				$client->messageEntityCashtag(
					offset : 88,
					length : 83,
				),
				$client->messageEntityUnderline(
					offset : 51,
					length : 51,
				),
				$client->messageEntityStrike(
					offset : 61,
					length : 40,
				),
				$client->messageEntityBankCard(
					offset : 86,
					length : 42,
				),
				$client->messageEntitySpoiler(
					offset : 65,
					length : 10,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 19,
					document_id : 6906277106242843327,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 50,
					length : 50,
				),
			),
		),
		$client->inputMediaDice(
			emoticon : 'J7zcyvnYHmt1dVAa',
		),
		$client->inputMediaStory(
			peer : $client->inputPeerEmpty(),
			id : 9,
		),
		$client->inputMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			optional : true,
			url : 'https://docs.liveproto.dev',
		),
		$client->inputMediaPaidMedia(
			stars_amount : -4272644328160389587,
			extended_media : array(
				$client->inputMediaEmpty(),
				$client->inputMediaUploadedPhoto(
					spoiler : true,
					file : $client->inputFile(...),
					stickers : array(
						$client->inputDocumentEmpty(...),
						$client->inputDocument(...),
					),
					ttl_seconds : 71,
				),
				$client->inputMediaPhoto(
					spoiler : true,
					id : $client->inputPhotoEmpty(...),
					ttl_seconds : 49,
				),
				$client->inputMediaGeoPoint(
					geo_point : $client->inputGeoPointEmpty(...),
				),
				$client->inputMediaContact(
					phone_number : '+1234567890',
					first_name : 'Tak',
					last_name : 'None',
					vcard : 'nNK2yJzIfcDGZ1mM',
				),
				$client->inputMediaUploadedDocument(
					nosound_video : true,
					force_file : true,
					spoiler : true,
					file : $client->inputFile(...),
					thumb : $client->inputFile(...),
					mime_type : 'c5XupPJwxF2z1koS',
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
					video_timestamp : 76,
					ttl_seconds : 79,
				),
				$client->inputMediaDocument(
					spoiler : true,
					id : $client->inputDocumentEmpty(...),
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 51,
					ttl_seconds : 63,
					query : 'WGQc0MOsF1ELgTAh',
				),
				$client->inputMediaVenue(
					geo_point : $client->inputGeoPointEmpty(...),
					title : 'NFDO7XhursyEmpLf',
					address : '7PbpgxmLNk0o9lne',
					provider : 'e9sqpBF7Ph82vVwN',
					venue_id : 'z204mfbguk1lYAMX',
					venue_type : 'y18gd3ak5CL6ZXtp',
				),
				$client->inputMediaPhotoExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 20,
				),
				$client->inputMediaDocumentExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 11,
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 32,
				),
				$client->inputMediaGame(
					id : $client->inputGameID(...),
				),
				$client->inputMediaInvoice(
					title : '0NE5t4DJPgVuesSh',
					description : 'k6zSCP0sMILrRDZX',
					photo : $client->inputWebDocument(...),
					invoice : $client->invoice(...),
					payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					provider : 'zfajdivn5B0WEOyI',
					provider_data : $client->dataJSON(...),
					start_param : 'LZ2EcyOqFB8SHgAV',
					extended_media : $client->inputMediaEmpty(...),
				),
				$client->inputMediaGeoLive(
					stopped : true,
					geo_point : $client->inputGeoPointEmpty(...),
					heading : 39,
					period : 16,
					proximity_notification_radius : 96,
				),
				$client->inputMediaPoll(
					poll : $client->poll(...),
					correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
					solution : 'pEUMAwsO3PcaYrbh',
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
					emoticon : 'HyZYop7aJdAcLXnF',
				),
				$client->inputMediaStory(
					peer : $client->inputPeerEmpty(...),
					id : 94,
				),
				$client->inputMediaWebPage(
					force_large_media : true,
					force_small_media : true,
					optional : true,
					url : 'https://docs.liveproto.dev',
				),
				$client->inputMediaPaidMedia(
					stars_amount : -5923951153574595587,
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
					payload : 'vTd0Fo4fYmrb2zqp',
				),
				$client->inputMediaTodo(
					todo : $client->todoList(...),
				),
			),
			payload : 'A7ZvOV93PIeychM5',
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
	payload : 'Tb4EDwWBV6Hr583d',
);
```