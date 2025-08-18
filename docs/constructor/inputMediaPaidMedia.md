# inputMediaPaidMedia

**Description** : *Paid media, see here &raquo; for more info*

**Layer** : 211

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
	stars_amount : -6681950272785701774,
	extended_media : array(
		$client->inputMediaEmpty(),
		$client->inputMediaUploadedPhoto(
			spoiler : true,
			file : $client->inputFile(
				id : -2145536339900961100,
				parts : 35,
				name : 'odU6KES5e3tVMRQN',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : 5786418933111627876,
					access_hash : 4797686731818327346,
					file_reference : '쓙p?LiveProto??YPi',
				),
			),
			ttl_seconds : 72,
		),
		$client->inputMediaPhoto(
			spoiler : true,
			id : $client->inputPhotoEmpty(),
			ttl_seconds : 19,
		),
		$client->inputMediaGeoPoint(
			geo_point : $client->inputGeoPointEmpty(),
		),
		$client->inputMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : 'U38YPXl4piW0DCQj',
		),
		$client->inputMediaUploadedDocument(
			nosound_video : true,
			force_file : true,
			spoiler : true,
			file : $client->inputFile(
				id : 3119581528799338981,
				parts : 68,
				name : 'SAyQcHClpze6ks3m',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			thumb : $client->inputFile(
				id : -6048085294735446363,
				parts : 93,
				name : 'dWJbLXTzlKgiCB5Y',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			mime_type : 'YxfJmSGU6n4OwdBA',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 31,
					h : 80,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'ARyCr9o4Qb5DnJNu',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1225792.15234375,
					w : 9,
					h : 10,
					preload_prefix_size : 52,
					video_start_ts : 533427.5966796875,
					video_codec : 'YXZtxrs6LpVyI5av',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 24,
					title : 'Qsk8vrTjbiMn6JZm',
					performer : 'c50lBWU1ajQLSOvF',
					waveform : '?Z??zLiveProto,U?_?',
				),
				$client->documentAttributeFilename(
					file_name : '2GotK1vfQuYWrBCX',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '5poChXuAekxIJvn3',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : -8326519622142912990,
					access_hash : 2751726527140027888,
					file_reference : '?P??LiveProtoʎ??',
				),
			),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 67,
			ttl_seconds : 12,
		),
		$client->inputMediaDocument(
			spoiler : true,
			id : $client->inputDocumentEmpty(),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 16,
			ttl_seconds : 33,
			query : 'y67htsok4T5OJw2A',
		),
		$client->inputMediaVenue(
			geo_point : $client->inputGeoPointEmpty(),
			title : '06vxaRDZjkypc8qN',
			address : 'TzDWxp34w8FUfuks',
			provider : 'o9GNCmhxukb12syD',
			venue_id : 'q9gXFCbAE1UJw067',
			venue_type : 't1c9RXGzCd6m4Mo0',
		),
		$client->inputMediaPhotoExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 34,
		),
		$client->inputMediaDocumentExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 6,
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 92,
		),
		$client->inputMediaGame(
			id : $client->inputGameID(
				id : -4701045474607546248,
				access_hash : 1922793150538599659,
			),
		),
		$client->inputMediaInvoice(
			title : 'fj2o7BKRTSiXGQWx',
			description : 'Hs64f3WES5MwDANY',
			photo : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 53,
				mime_type : 'jCkmIETArYP56N2J',
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
				currency : 'apx0Kl45e7bm1tMd',
				prices : array(
					$client->labeledPrice(...),
				),
				max_tip_amount : -9152332643216859513,
				suggested_tip_amounts : array(-3171316932909965265),
				terms_url : 'https://docs.liveproto.dev',
				subscription_period : 8,
			),
			payload : '?{dqLiveProto?br??',
			provider : '5xmFeiD1aG4hR8NQ',
			provider_data : $client->dataJSON(
				data : 'FlNCdL1w5U89EvXO',
			),
			start_param : 'KjA4lvGuoc6JTUt2',
			extended_media : $client->inputMediaEmpty(),
		),
		$client->inputMediaGeoLive(
			stopped : true,
			geo_point : $client->inputGeoPointEmpty(),
			heading : 75,
			period : 71,
			proximity_notification_radius : 77,
		),
		$client->inputMediaPoll(
			poll : $client->poll(
				id : -5326190101376574451,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 27,
				close_date : 98,
			),
			correct_answers : array('???LiveProto`o4??'),
			solution : 'c3nCVs5pU0XA8iW1',
			solution_entities : array(
				$client->messageEntityUnknown(
					offset : 83,
					length : 25,
				),
				$client->messageEntityMention(
					offset : 12,
					length : 14,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 35,
				),
				$client->messageEntityBotCommand(
					offset : 35,
					length : 35,
				),
				$client->messageEntityUrl(
					offset : 21,
					length : 86,
				),
				$client->messageEntityEmail(
					offset : 85,
					length : 84,
				),
				$client->messageEntityBold(
					offset : 98,
					length : 43,
				),
				$client->messageEntityItalic(
					offset : 39,
					length : 32,
				),
				$client->messageEntityCode(
					offset : 73,
					length : 0,
				),
				$client->messageEntityPre(
					offset : 36,
					length : 46,
					language : '52p6djAzgnOqWIvB',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 22,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 85,
					length : 72,
					user_id : 4218768244637510031,
				),
				$client->inputMessageEntityMentionName(
					offset : 26,
					length : 20,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 22,
					length : 97,
				),
				$client->messageEntityCashtag(
					offset : 4,
					length : 35,
				),
				$client->messageEntityUnderline(
					offset : 40,
					length : 55,
				),
				$client->messageEntityStrike(
					offset : 50,
					length : 19,
				),
				$client->messageEntityBankCard(
					offset : 8,
					length : 57,
				),
				$client->messageEntitySpoiler(
					offset : 61,
					length : 37,
				),
				$client->messageEntityCustomEmoji(
					offset : 37,
					length : 6,
					document_id : 8013431492443931830,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 11,
					length : 52,
				),
			),
		),
		$client->inputMediaDice(
			emoticon : 'eiSlUZGvwAFTkR8r',
		),
		$client->inputMediaStory(
			peer : $client->inputPeerEmpty(),
			id : 20,
		),
		$client->inputMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			optional : true,
			url : 'https://docs.liveproto.dev',
		),
		$client->inputMediaPaidMedia(
			stars_amount : 2588713968454049469,
			extended_media : array(
				$client->inputMediaEmpty(),
				$client->inputMediaUploadedPhoto(
					spoiler : true,
					file : $client->inputFile(...),
					stickers : array(
						$client->inputDocumentEmpty(...),
						$client->inputDocument(...),
					),
					ttl_seconds : 49,
				),
				$client->inputMediaPhoto(
					spoiler : true,
					id : $client->inputPhotoEmpty(...),
					ttl_seconds : 17,
				),
				$client->inputMediaGeoPoint(
					geo_point : $client->inputGeoPointEmpty(...),
				),
				$client->inputMediaContact(
					phone_number : '+1234567890',
					first_name : 'Tak',
					last_name : 'None',
					vcard : 'DJ59sjvNqOiKaURb',
				),
				$client->inputMediaUploadedDocument(
					nosound_video : true,
					force_file : true,
					spoiler : true,
					file : $client->inputFile(...),
					thumb : $client->inputFile(...),
					mime_type : 'oKO0gFxs3mNJCMGe',
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
					video_timestamp : 54,
					ttl_seconds : 8,
				),
				$client->inputMediaDocument(
					spoiler : true,
					id : $client->inputDocumentEmpty(...),
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 2,
					ttl_seconds : 76,
					query : 'f9zpyFHq03TMKdtv',
				),
				$client->inputMediaVenue(
					geo_point : $client->inputGeoPointEmpty(...),
					title : 'kXhGHbSmJTuNanI5',
					address : 'mFGfTRpIyg0htJVe',
					provider : 'sQYK9mz2IalqxXPM',
					venue_id : '0vCDZLwOMsh4r5Qa',
					venue_type : 'EV0GWtcDwFjNnkL7',
				),
				$client->inputMediaPhotoExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 68,
				),
				$client->inputMediaDocumentExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 10,
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 75,
				),
				$client->inputMediaGame(
					id : $client->inputGameID(...),
				),
				$client->inputMediaInvoice(
					title : 'xugi7cKfCUZ9B1Rj',
					description : 'QGgcK3z7dnu4pbIX',
					photo : $client->inputWebDocument(...),
					invoice : $client->invoice(...),
					payload : 'r2??LiveProto?.?NH',
					provider : 'rFszgH4hqjk9o0Z6',
					provider_data : $client->dataJSON(...),
					start_param : 'U5KH3ew0Cof6YGVS',
					extended_media : $client->inputMediaEmpty(...),
				),
				$client->inputMediaGeoLive(
					stopped : true,
					geo_point : $client->inputGeoPointEmpty(...),
					heading : 72,
					period : 79,
					proximity_notification_radius : 70,
				),
				$client->inputMediaPoll(
					poll : $client->poll(...),
					correct_answers : array('l? \'LiveProto?l??'),
					solution : 'q7ljiasAJoWfYy9U',
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
					emoticon : 'Rm8ak6eUyTxuYwC2',
				),
				$client->inputMediaStory(
					peer : $client->inputPeerEmpty(...),
					id : 12,
				),
				$client->inputMediaWebPage(
					force_large_media : true,
					force_small_media : true,
					optional : true,
					url : 'https://docs.liveproto.dev',
				),
				$client->inputMediaPaidMedia(
					stars_amount : 1405636838306010503,
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
					payload : 'lgsZDAXpSftkIiCn',
				),
				$client->inputMediaTodo(
					todo : $client->todoList(...),
				),
			),
			payload : '8PYl3VTfkW6KIGiH',
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
	payload : '7tfUu3T02OjgA1Dl',
);
```