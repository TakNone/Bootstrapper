# bots.reorderPreviewMedias

**Description** : *Reorder a main mini app previews, see here » for more info*

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
	lang_code : 'em2dRTCtXfW9KgYn',
	order : array(
		$client->inputMediaEmpty(),
		$client->inputMediaUploadedPhoto(
			spoiler : true,
			file : $client->inputFile(
				id : 6979052848606669945,
				parts : 30,
				name : '2L0R16cKlsAudz7Z',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : 1304295431025840092,
					access_hash : 2671222332342074257,
					file_reference : '????LiveProto??`?',
				),
			),
			ttl_seconds : 58,
		),
		$client->inputMediaPhoto(
			spoiler : true,
			id : $client->inputPhotoEmpty(),
			ttl_seconds : 73,
		),
		$client->inputMediaGeoPoint(
			geo_point : $client->inputGeoPointEmpty(),
		),
		$client->inputMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : 'vOFPMHdJXAbhnGcw',
		),
		$client->inputMediaUploadedDocument(
			nosound_video : true,
			force_file : true,
			spoiler : true,
			file : $client->inputFile(
				id : -8386459052624139593,
				parts : 99,
				name : '9a5bL4wUzinquIfG',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			thumb : $client->inputFile(
				id : -4017100561740575122,
				parts : 9,
				name : 'E5bNwZsP9djOgzaL',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			mime_type : 'a1UfwXDdMBqcj4Fi',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 51,
					h : 47,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'NDnQlOBa5xLso4z3',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1080463.4853515625,
					w : 44,
					h : 54,
					preload_prefix_size : 85,
					video_start_ts : -125072.578125,
					video_codec : 'bjdiu65e04mLJzF3',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 23,
					title : 'UFinkvs87lVDLMGC',
					performer : 'Pwz8DhcFMObG4aJH',
					waveform : '???
?LiveProto?p?b',
				),
				$client->documentAttributeFilename(
					file_name : '6XlFf1LJcN7ioCVw',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'lASB5sG9CZopwbHx',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : 8235783220793109043,
					access_hash : -8023017358302011511,
					file_reference : '8O??LiveProto????',
				),
			),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 9,
			ttl_seconds : 25,
		),
		$client->inputMediaDocument(
			spoiler : true,
			id : $client->inputDocumentEmpty(),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 36,
			ttl_seconds : 23,
			query : 'vkVbup4PajGs6ZYF',
		),
		$client->inputMediaVenue(
			geo_point : $client->inputGeoPointEmpty(),
			title : 'PZN6Hu37sGzvmtqR',
			address : '8JdaRZx1UpfTSLsj',
			provider : '71or9QYWGFKk5yvf',
			venue_id : 'hBsTidCjMobzayN2',
			venue_type : 'QO6YS2KCqs401mcW',
		),
		$client->inputMediaPhotoExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 52,
		),
		$client->inputMediaDocumentExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 77,
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 33,
		),
		$client->inputMediaGame(
			id : $client->inputGameID(
				id : 5816855940948521138,
				access_hash : 4232426310486091580,
			),
		),
		$client->inputMediaInvoice(
			title : 'x4eND1X3b5UnGpwP',
			description : 'tZ8eGyCshid2krOA',
			photo : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 26,
				mime_type : 'Zp6SAorl2UuQNsYe',
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
				currency : 'xrHSBQG1YpusOETR',
				prices : array(
					$client->labeledPrice(...),
				),
				max_tip_amount : 4637607403472037016,
				suggested_tip_amounts : array(1470611022463671854),
				terms_url : 'https://docs.liveproto.dev',
				subscription_period : 26,
			),
			payload : '??E??LiveProto?֐',
			provider : 'eiYU9mVy2FQ41pds',
			provider_data : $client->dataJSON(
				data : '6LPMfGSUTsdVKltb',
			),
			start_param : 'JwS2ZWvsai5zMIOR',
			extended_media : $client->inputMediaEmpty(),
		),
		$client->inputMediaGeoLive(
			stopped : true,
			geo_point : $client->inputGeoPointEmpty(),
			heading : 100,
			period : 75,
			proximity_notification_radius : 33,
		),
		$client->inputMediaPoll(
			poll : $client->poll(
				id : 2028650782589576270,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 13,
				close_date : 61,
			),
			correct_answers : array('g??a=LiveProto??}'),
			solution : 'qQFuSIMi8A5YLzH3',
			solution_entities : array(
				$client->messageEntityUnknown(
					offset : 89,
					length : 56,
				),
				$client->messageEntityMention(
					offset : 16,
					length : 21,
				),
				$client->messageEntityHashtag(
					offset : 9,
					length : 11,
				),
				$client->messageEntityBotCommand(
					offset : 29,
					length : 78,
				),
				$client->messageEntityUrl(
					offset : 20,
					length : 22,
				),
				$client->messageEntityEmail(
					offset : 15,
					length : 76,
				),
				$client->messageEntityBold(
					offset : 42,
					length : 35,
				),
				$client->messageEntityItalic(
					offset : 39,
					length : 7,
				),
				$client->messageEntityCode(
					offset : 30,
					length : 65,
				),
				$client->messageEntityPre(
					offset : 95,
					length : 6,
					language : 'SOk4FW6frBtp9J7o',
				),
				$client->messageEntityTextUrl(
					offset : 81,
					length : 12,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 58,
					length : 76,
					user_id : -7217301135138623879,
				),
				$client->inputMessageEntityMentionName(
					offset : 12,
					length : 73,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 86,
					length : 51,
				),
				$client->messageEntityCashtag(
					offset : 23,
					length : 64,
				),
				$client->messageEntityUnderline(
					offset : 99,
					length : 15,
				),
				$client->messageEntityStrike(
					offset : 71,
					length : 52,
				),
				$client->messageEntityBankCard(
					offset : 6,
					length : 22,
				),
				$client->messageEntitySpoiler(
					offset : 21,
					length : 1,
				),
				$client->messageEntityCustomEmoji(
					offset : 44,
					length : 30,
					document_id : -5314851175082851502,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 56,
					length : 67,
				),
			),
		),
		$client->inputMediaDice(
			emoticon : 'SCQRowU8GIAqYxDi',
		),
		$client->inputMediaStory(
			peer : $client->inputPeerEmpty(),
			id : 89,
		),
		$client->inputMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			optional : true,
			url : 'https://docs.liveproto.dev',
		),
		$client->inputMediaPaidMedia(
			stars_amount : -2983217760588486590,
			extended_media : array(
				$client->inputMediaEmpty(),
				$client->inputMediaUploadedPhoto(
					spoiler : true,
					file : $client->inputFile(...),
					stickers : array(
						$client->inputDocumentEmpty(...),
						$client->inputDocument(...),
					),
					ttl_seconds : 63,
				),
				$client->inputMediaPhoto(
					spoiler : true,
					id : $client->inputPhotoEmpty(...),
					ttl_seconds : 81,
				),
				$client->inputMediaGeoPoint(
					geo_point : $client->inputGeoPointEmpty(...),
				),
				$client->inputMediaContact(
					phone_number : '+1234567890',
					first_name : 'Tak',
					last_name : 'None',
					vcard : '92EYzO8edUaTSbDq',
				),
				$client->inputMediaUploadedDocument(
					nosound_video : true,
					force_file : true,
					spoiler : true,
					file : $client->inputFile(...),
					thumb : $client->inputFile(...),
					mime_type : 'gfs178MJ2FNxaKwl',
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
					video_timestamp : 83,
					ttl_seconds : 27,
				),
				$client->inputMediaDocument(
					spoiler : true,
					id : $client->inputDocumentEmpty(...),
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 81,
					ttl_seconds : 92,
					query : 'fzHMoUW1r8vNGCAS',
				),
				$client->inputMediaVenue(
					geo_point : $client->inputGeoPointEmpty(...),
					title : 'iAwgG6hZNIqn8BX0',
					address : '3tUAIik07Pm8KxEw',
					provider : '84LGackWbhIeJ5Nl',
					venue_id : 'k8wLiuS2DUNJQz1d',
					venue_type : 'F8HvYaQegEJtIT5l',
				),
				$client->inputMediaPhotoExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 56,
				),
				$client->inputMediaDocumentExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 40,
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 24,
				),
				$client->inputMediaGame(
					id : $client->inputGameID(...),
				),
				$client->inputMediaInvoice(
					title : '40GHAgBL6StZKPRD',
					description : 'yaX5xAgBNL6trq8p',
					photo : $client->inputWebDocument(...),
					invoice : $client->invoice(...),
					payload : '?g\\??LiveProto?(??',
					provider : 'b76vwYA8fuDVUSF0',
					provider_data : $client->dataJSON(...),
					start_param : 'GvM5fbFkpRoitQyB',
					extended_media : $client->inputMediaEmpty(...),
				),
				$client->inputMediaGeoLive(
					stopped : true,
					geo_point : $client->inputGeoPointEmpty(...),
					heading : 83,
					period : 97,
					proximity_notification_radius : 24,
				),
				$client->inputMediaPoll(
					poll : $client->poll(...),
					correct_answers : array('?OcvLiveProtoY?b^?'),
					solution : 'cdI0C8BmapleDTY1',
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
					emoticon : 'iF6d7LsWfbreQcEZ',
				),
				$client->inputMediaStory(
					peer : $client->inputPeerEmpty(...),
					id : 36,
				),
				$client->inputMediaWebPage(
					force_large_media : true,
					force_small_media : true,
					optional : true,
					url : 'https://docs.liveproto.dev',
				),
				$client->inputMediaPaidMedia(
					stars_amount : 8117714477546019013,
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
					payload : 'N7baLliyusA8GBTD',
				),
				$client->inputMediaTodo(
					todo : $client->todoList(...),
				),
			),
			payload : 'V81vSXskLMJWcAoT',
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