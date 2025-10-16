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
	lang_code : 'dxGOUC4eMngNt69Q',
	media : array(
		$client->inputMediaEmpty(),
		$client->inputMediaUploadedPhoto(
			spoiler : true,
			file : $client->inputFile(
				id : 6065898111008858393,
				parts : 52,
				name : 'tLY7Q8ghsVaGHDEz',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : -483987051532445058,
					access_hash : 7001003774156872309,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			ttl_seconds : 93,
		),
		$client->inputMediaPhoto(
			spoiler : true,
			id : $client->inputPhotoEmpty(),
			ttl_seconds : 53,
		),
		$client->inputMediaGeoPoint(
			geo_point : $client->inputGeoPointEmpty(),
		),
		$client->inputMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : 'w7omZq6Jehit1YzW',
		),
		$client->inputMediaUploadedDocument(
			nosound_video : true,
			force_file : true,
			spoiler : true,
			file : $client->inputFile(
				id : -221229593058098198,
				parts : 54,
				name : '1MSLw7Y0IQx6UDBE',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			thumb : $client->inputFile(
				id : -4454762689958205827,
				parts : 57,
				name : 'zh6YtfeMCmdBqWDV',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			mime_type : 'CxUFORrYTNmHi2ov',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 29,
					h : 20,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'GysjCH1cnm8uMRvA',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -286708.4052734375,
					w : 99,
					h : 93,
					preload_prefix_size : 39,
					video_start_ts : -947304.546875,
					video_codec : 'OqmIlpLTErXCU1bZ',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 56,
					title : 'iRh2stHCkBuaZDPz',
					performer : 'etzV3JRrPOKQS2Zb',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'OYCDyGm9dPqLntch',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'l8kH3WCQut90EpBL',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : -5054474042368799978,
					access_hash : 4613756567427309471,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 79,
			ttl_seconds : 40,
		),
		$client->inputMediaDocument(
			spoiler : true,
			id : $client->inputDocumentEmpty(),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 66,
			ttl_seconds : 75,
			query : 'Iyx0g8NmRrlHdDj2',
		),
		$client->inputMediaVenue(
			geo_point : $client->inputGeoPointEmpty(),
			title : 'd7JKwRogLvjaQuXz',
			address : '3z0ja8ry426hTBMw',
			provider : '6JZTPeltEzq3sF4V',
			venue_id : 'EwmdaSKXrWJnDYAB',
			venue_type : '2XMRCKerLkZuPvHS',
		),
		$client->inputMediaPhotoExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 46,
		),
		$client->inputMediaDocumentExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 10,
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 26,
		),
		$client->inputMediaGame(
			id : $client->inputGameID(
				id : -3991307983321062588,
				access_hash : 7077935785702433260,
			),
		),
		$client->inputMediaInvoice(
			title : 'InWJOrcDge5PZ19C',
			description : 'ARqmNThbLcEj7IUs',
			photo : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 6,
				mime_type : 'sjWnw9ThCv3Kl1N8',
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
				currency : 'ROEsP0qtu1Udc4Mj',
				prices : array(
					$client->labeledPrice(...),
				),
				max_tip_amount : -7987428448814165530,
				suggested_tip_amounts : array(-7471319188974952239),
				terms_url : 'https://docs.liveproto.dev',
				subscription_period : 78,
			),
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			provider : 'ZmHIYeTf7KkonXQd',
			provider_data : $client->dataJSON(
				data : 'QwqMAIKY8CcR2X7F',
			),
			start_param : 'RsBWuphm9T6xqDQe',
			extended_media : $client->inputMediaEmpty(),
		),
		$client->inputMediaGeoLive(
			stopped : true,
			geo_point : $client->inputGeoPointEmpty(),
			heading : 47,
			period : 27,
			proximity_notification_radius : 56,
		),
		$client->inputMediaPoll(
			poll : $client->poll(
				id : -847518404055232591,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 48,
				close_date : 61,
			),
			correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			solution : 'bCZnhAyS1lpTwNWf',
			solution_entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 14,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 33,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 95,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 50,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 78,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 99,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 68,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 79,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 60,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 27,
					language : '9rhzKcVusUmXvd56',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 61,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 58,
					user_id : -2203371348428516090,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 14,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 65,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 100,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 11,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 55,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 59,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 80,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 52,
					document_id : 8880141066643429423,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 87,
				),
			),
		),
		$client->inputMediaDice(
			emoticon : 'wCHGp6SPsNme8K1W',
		),
		$client->inputMediaStory(
			peer : $client->inputPeerEmpty(),
			id : 75,
		),
		$client->inputMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			optional : true,
			url : 'https://docs.liveproto.dev',
		),
		$client->inputMediaPaidMedia(
			stars_amount : 4713680964600947073,
			extended_media : array(
				$client->inputMediaEmpty(),
				$client->inputMediaUploadedPhoto(
					spoiler : true,
					file : $client->inputFile(...),
					stickers : array(
						$client->inputDocumentEmpty(...),
						$client->inputDocument(...),
					),
					ttl_seconds : 37,
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
					vcard : 'LBvcQGbTi3MnICEu',
				),
				$client->inputMediaUploadedDocument(
					nosound_video : true,
					force_file : true,
					spoiler : true,
					file : $client->inputFile(...),
					thumb : $client->inputFile(...),
					mime_type : 'u5p2WdaZVENx0rKI',
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
					video_timestamp : 15,
					ttl_seconds : 20,
				),
				$client->inputMediaDocument(
					spoiler : true,
					id : $client->inputDocumentEmpty(...),
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 50,
					ttl_seconds : 75,
					query : '2nQY91oekjFyu0aX',
				),
				$client->inputMediaVenue(
					geo_point : $client->inputGeoPointEmpty(...),
					title : 'JbCRqUvpAKxdTI5w',
					address : 'U7frRm84PpJqjaoB',
					provider : 'Fz0YrAKqjc9J3hmt',
					venue_id : 'ji08V4X9NQ1gMsud',
					venue_type : 'l98BDSn5hqZ02pWK',
				),
				$client->inputMediaPhotoExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 69,
				),
				$client->inputMediaDocumentExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 35,
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 96,
				),
				$client->inputMediaGame(
					id : $client->inputGameID(...),
				),
				$client->inputMediaInvoice(
					title : 'cQ5mHuZptwAGFbUx',
					description : 'UQxcL5pEn0YqMHtJ',
					photo : $client->inputWebDocument(...),
					invoice : $client->invoice(...),
					payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					provider : '9BIbSQCZvAfquWwD',
					provider_data : $client->dataJSON(...),
					start_param : 'PIrdG54lZCtkgF2a',
					extended_media : $client->inputMediaEmpty(...),
				),
				$client->inputMediaGeoLive(
					stopped : true,
					geo_point : $client->inputGeoPointEmpty(...),
					heading : 68,
					period : 87,
					proximity_notification_radius : 29,
				),
				$client->inputMediaPoll(
					poll : $client->poll(...),
					correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
					solution : 'vTMawcikALey8VKS',
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
					emoticon : 'yPeXJ8GEmYjL9zTl',
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
					stars_amount : -3014306815595351290,
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
					payload : 'AJI9mej8kQBYCSRK',
				),
				$client->inputMediaTodo(
					todo : $client->todoList(...),
				),
			),
			payload : '4xYhZ0TP9CBKH56s',
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