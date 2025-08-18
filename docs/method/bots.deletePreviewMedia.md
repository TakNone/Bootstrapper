# bots.deletePreviewMedia

**Description** : *Delete a main mini app preview, see here &raquo; for more info*

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
	lang_code : 'NMdK3hV0bZypFRg5',
	media : array(
		$client->inputMediaEmpty(),
		$client->inputMediaUploadedPhoto(
			spoiler : true,
			file : $client->inputFile(
				id : 7056715771302060444,
				parts : 43,
				name : 'YD2fadFcIL7ZWtRi',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : -859577529688718397,
					access_hash : 3609975689198942391,
					file_reference : '?l???LiveProto??QP',
				),
			),
			ttl_seconds : 48,
		),
		$client->inputMediaPhoto(
			spoiler : true,
			id : $client->inputPhotoEmpty(),
			ttl_seconds : 70,
		),
		$client->inputMediaGeoPoint(
			geo_point : $client->inputGeoPointEmpty(),
		),
		$client->inputMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : 'UDJ3wPA8IkyB9sbp',
		),
		$client->inputMediaUploadedDocument(
			nosound_video : true,
			force_file : true,
			spoiler : true,
			file : $client->inputFile(
				id : 4056741406189814218,
				parts : 51,
				name : 'D6fTLNeZuYSJFG9j',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			thumb : $client->inputFile(
				id : 3463523483113237648,
				parts : 65,
				name : '16gPxeFNkoM3jUGd',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			mime_type : 'tAO0VRHxDg6G3FaM',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 13,
					h : 2,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'itNPy8QlKUSLRg9p',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -374444.56640625,
					w : 98,
					h : 73,
					preload_prefix_size : 82,
					video_start_ts : -1682613.6943359375,
					video_codec : 'agoPTvBMqywO4QsW',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 29,
					title : '47nmhAMJGlbPs9uU',
					performer : 'neuWAoERi39qy6vV',
					waveform : '???' . "\0" . 'KLiveProto	E詫',
				),
				$client->documentAttributeFilename(
					file_name : 'qReTo4SBblMjCtZO',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'b7Nu4Em2svaMQLUy',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : 2647789009477157762,
					access_hash : 1884222758853337733,
					file_reference : '????ELiveProto6???X',
				),
			),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 67,
			ttl_seconds : 40,
		),
		$client->inputMediaDocument(
			spoiler : true,
			id : $client->inputDocumentEmpty(),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 67,
			ttl_seconds : 86,
			query : 'o2yGumZCPztJr7Ow',
		),
		$client->inputMediaVenue(
			geo_point : $client->inputGeoPointEmpty(),
			title : '3lRLCwUeqkEIsB75',
			address : 'ysaJN9QBl84Dcgtd',
			provider : '0gYmnqpicobS6MB5',
			venue_id : 'Ifbt63m78P0ueNZn',
			venue_type : 'JI64CxiHcYPV3rhD',
		),
		$client->inputMediaPhotoExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 75,
		),
		$client->inputMediaDocumentExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 39,
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 82,
		),
		$client->inputMediaGame(
			id : $client->inputGameID(
				id : 6576891212826729345,
				access_hash : -4417907833995327875,
			),
		),
		$client->inputMediaInvoice(
			title : 'GvVseFKt63fEaRIP',
			description : 'QSu5zosqPZfBm7D9',
			photo : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 43,
				mime_type : 'hbinCeWDXPtwyMAp',
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
				currency : 'nVcSsiahMLt7XkZE',
				prices : array(
					$client->labeledPrice(...),
				),
				max_tip_amount : 2160091019742674477,
				suggested_tip_amounts : array(3720861068458717757),
				terms_url : 'https://docs.liveproto.dev',
				subscription_period : 69,
			),
			payload : '????LiveProto??' . "\0" . '?',
			provider : 'XpIKPU648g9lJaQ1',
			provider_data : $client->dataJSON(
				data : 'BgA127hvcdj4qORE',
			),
			start_param : 'sSHyruLzwvVQhtKx',
			extended_media : $client->inputMediaEmpty(),
		),
		$client->inputMediaGeoLive(
			stopped : true,
			geo_point : $client->inputGeoPointEmpty(),
			heading : 76,
			period : 99,
			proximity_notification_radius : 30,
		),
		$client->inputMediaPoll(
			poll : $client->poll(
				id : -7366170203726468253,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 92,
				close_date : 84,
			),
			correct_answers : array('Im??LiveProto.q@Z?'),
			solution : 'dw5ZPpEc23DkBqJA',
			solution_entities : array(
				$client->messageEntityUnknown(
					offset : 51,
					length : 10,
				),
				$client->messageEntityMention(
					offset : 9,
					length : 72,
				),
				$client->messageEntityHashtag(
					offset : 3,
					length : 63,
				),
				$client->messageEntityBotCommand(
					offset : 91,
					length : 12,
				),
				$client->messageEntityUrl(
					offset : 26,
					length : 13,
				),
				$client->messageEntityEmail(
					offset : 41,
					length : 17,
				),
				$client->messageEntityBold(
					offset : 12,
					length : 3,
				),
				$client->messageEntityItalic(
					offset : 70,
					length : 0,
				),
				$client->messageEntityCode(
					offset : 15,
					length : 82,
				),
				$client->messageEntityPre(
					offset : 46,
					length : 77,
					language : 'T6nY31I5ceJhsaVD',
				),
				$client->messageEntityTextUrl(
					offset : 37,
					length : 70,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 52,
					length : 28,
					user_id : 2630677715394078137,
				),
				$client->inputMessageEntityMentionName(
					offset : 100,
					length : 99,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 33,
					length : 60,
				),
				$client->messageEntityCashtag(
					offset : 48,
					length : 88,
				),
				$client->messageEntityUnderline(
					offset : 75,
					length : 87,
				),
				$client->messageEntityStrike(
					offset : 51,
					length : 8,
				),
				$client->messageEntityBankCard(
					offset : 40,
					length : 83,
				),
				$client->messageEntitySpoiler(
					offset : 94,
					length : 5,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 1,
					document_id : -3025358888088853250,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 4,
				),
			),
		),
		$client->inputMediaDice(
			emoticon : '0KZtP3FLNa2fgk6h',
		),
		$client->inputMediaStory(
			peer : $client->inputPeerEmpty(),
			id : 37,
		),
		$client->inputMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			optional : true,
			url : 'https://docs.liveproto.dev',
		),
		$client->inputMediaPaidMedia(
			stars_amount : 3176717953242275219,
			extended_media : array(
				$client->inputMediaEmpty(),
				$client->inputMediaUploadedPhoto(
					spoiler : true,
					file : $client->inputFile(...),
					stickers : array(
						$client->inputDocumentEmpty(...),
						$client->inputDocument(...),
					),
					ttl_seconds : 44,
				),
				$client->inputMediaPhoto(
					spoiler : true,
					id : $client->inputPhotoEmpty(...),
					ttl_seconds : 48,
				),
				$client->inputMediaGeoPoint(
					geo_point : $client->inputGeoPointEmpty(...),
				),
				$client->inputMediaContact(
					phone_number : '+1234567890',
					first_name : 'Tak',
					last_name : 'None',
					vcard : 'PLEFSI3TnOvctCGr',
				),
				$client->inputMediaUploadedDocument(
					nosound_video : true,
					force_file : true,
					spoiler : true,
					file : $client->inputFile(...),
					thumb : $client->inputFile(...),
					mime_type : 'drlMWyRV9cqpPb58',
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
					video_timestamp : 74,
					ttl_seconds : 51,
				),
				$client->inputMediaDocument(
					spoiler : true,
					id : $client->inputDocumentEmpty(...),
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 79,
					ttl_seconds : 50,
					query : '2ifP0o53cOTZXzK8',
				),
				$client->inputMediaVenue(
					geo_point : $client->inputGeoPointEmpty(...),
					title : 'tL0OVDFduAgyfBwn',
					address : 'QhZVa42qHCJxOpBP',
					provider : 'JyGZevQWPIY1r2BA',
					venue_id : 'YbXQZj9VyDxFtoNB',
					venue_type : 'ulhox7Nk3Jfrmt2y',
				),
				$client->inputMediaPhotoExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 4,
				),
				$client->inputMediaDocumentExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 77,
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 51,
				),
				$client->inputMediaGame(
					id : $client->inputGameID(...),
				),
				$client->inputMediaInvoice(
					title : 'sVoyUdaR4FkEpWcO',
					description : 'BiDyPn6gw3Xcm94O',
					photo : $client->inputWebDocument(...),
					invoice : $client->invoice(...),
					payload : '??<_MLiveProto+?滏',
					provider : 'WtVmhfqzZlMjysTw',
					provider_data : $client->dataJSON(...),
					start_param : 'ybIDYtMGqo4BjSmf',
					extended_media : $client->inputMediaEmpty(...),
				),
				$client->inputMediaGeoLive(
					stopped : true,
					geo_point : $client->inputGeoPointEmpty(...),
					heading : 95,
					period : 55,
					proximity_notification_radius : 57,
				),
				$client->inputMediaPoll(
					poll : $client->poll(...),
					correct_answers : array('?d?|?LiveProto?????'),
					solution : '41X9cLPi05OvHhQE',
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
					emoticon : 'FMSEi48Hth7UBOYz',
				),
				$client->inputMediaStory(
					peer : $client->inputPeerEmpty(...),
					id : 25,
				),
				$client->inputMediaWebPage(
					force_large_media : true,
					force_small_media : true,
					optional : true,
					url : 'https://docs.liveproto.dev',
				),
				$client->inputMediaPaidMedia(
					stars_amount : -7656998417555005669,
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
					payload : 'ZK5iUBE8AxRVqLHu',
				),
				$client->inputMediaTodo(
					todo : $client->todoList(...),
				),
			),
			payload : 'h81mAECn7wGgeNkt',
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