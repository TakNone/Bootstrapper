# bots.deletePreviewMedia

**Description** : *Delete a main mini app preview, see here &raquo; for more info*

**Layer** : 214

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
	lang_code : 'el5LAGQOZI8tJcaf',
	media : array(
		$client->inputMediaEmpty(),
		$client->inputMediaUploadedPhoto(
			spoiler : true,
			file : $client->inputFile(
				id : -361209888177897455,
				parts : 40,
				name : 'Xqj4TQaEsP5pfRuV',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : 2855194887057731180,
					access_hash : 8868304679623105897,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			ttl_seconds : 82,
		),
		$client->inputMediaPhoto(
			spoiler : true,
			id : $client->inputPhotoEmpty(),
			ttl_seconds : 26,
		),
		$client->inputMediaGeoPoint(
			geo_point : $client->inputGeoPointEmpty(),
		),
		$client->inputMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : 'YR29nNgDOwMhGyic',
		),
		$client->inputMediaUploadedDocument(
			nosound_video : true,
			force_file : true,
			spoiler : true,
			file : $client->inputFile(
				id : -1046129742709628641,
				parts : 89,
				name : 'pxJfcMZRnmsg5oqS',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			thumb : $client->inputFile(
				id : -6866417263573172259,
				parts : 1,
				name : 'bxAQ2nT5hlgG4Ud7',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			mime_type : 'mJe5qc2WpH8fR9bL',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 9,
					h : 58,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '1W6XcqdxLI50JNFy',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 11308.6171875,
					w : 95,
					h : 35,
					preload_prefix_size : 16,
					video_start_ts : 139776.09375,
					video_codec : 'pF3o1ZyqvNTRI2fn',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 90,
					title : 'bJCropNzRqLfsOW2',
					performer : 'ly9ukcZDWTKPnSw4',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '5vpoWrklY0CTnPMO',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'oeUfAxQ3pknGN54V',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : 1145882054983772303,
					access_hash : 5166544254834420960,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 85,
			ttl_seconds : 36,
		),
		$client->inputMediaDocument(
			spoiler : true,
			id : $client->inputDocumentEmpty(),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 63,
			ttl_seconds : 14,
			query : 'xTPX9SpLE34vkiNh',
		),
		$client->inputMediaVenue(
			geo_point : $client->inputGeoPointEmpty(),
			title : 'nM0IFBZEvj31Hxm9',
			address : '5HsRe0jT7xtiycaZ',
			provider : 'hRY08bi5LuJBK4mI',
			venue_id : 'SDuNTsF9Wyb2Y7z4',
			venue_type : 'OrC7uHsQnbmtFa0x',
		),
		$client->inputMediaPhotoExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 0,
		),
		$client->inputMediaDocumentExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 78,
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 47,
		),
		$client->inputMediaGame(
			id : $client->inputGameID(
				id : -1345034802535342516,
				access_hash : 3664968629681876907,
			),
		),
		$client->inputMediaInvoice(
			title : 'TOCR2NKLmezvGMpg',
			description : '4ZwjEfA9OJt20iWP',
			photo : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 34,
				mime_type : 'FrN7g38DBT0GkUHq',
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
				currency : '2uOC1fUV9IyQqBh5',
				prices : array(
					$client->labeledPrice(...),
				),
				max_tip_amount : -1343595382943910844,
				suggested_tip_amounts : array(8899693374976497533),
				terms_url : 'https://docs.liveproto.dev',
				subscription_period : 66,
			),
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			provider : 'Sn0mEzUVxbu4XDT3',
			provider_data : $client->dataJSON(
				data : '6IVfpJuHNcnzEgi4',
			),
			start_param : '6bI5D9poylRXJY8P',
			extended_media : $client->inputMediaEmpty(),
		),
		$client->inputMediaGeoLive(
			stopped : true,
			geo_point : $client->inputGeoPointEmpty(),
			heading : 14,
			period : 2,
			proximity_notification_radius : 91,
		),
		$client->inputMediaPoll(
			poll : $client->poll(
				id : 8962350709972063662,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 7,
				close_date : 65,
			),
			correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			solution : '1lcyjJuX5N7p0OWs',
			solution_entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 25,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 85,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 89,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 59,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 88,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 39,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 66,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 25,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 17,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 81,
					language : '5mdCG6prxuqOL8jT',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 93,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 18,
					user_id : -9028395101919174993,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 81,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 76,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 39,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 77,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 33,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 70,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 45,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 0,
					document_id : -423821752960677553,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 96,
				),
			),
		),
		$client->inputMediaDice(
			emoticon : 'Elt7Qakvi6xHS0bo',
		),
		$client->inputMediaStory(
			peer : $client->inputPeerEmpty(),
			id : 58,
		),
		$client->inputMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			optional : true,
			url : 'https://docs.liveproto.dev',
		),
		$client->inputMediaPaidMedia(
			stars_amount : 2689829053490463516,
			extended_media : array(
				$client->inputMediaEmpty(),
				$client->inputMediaUploadedPhoto(
					spoiler : true,
					file : $client->inputFile(...),
					stickers : array(
						$client->inputDocumentEmpty(...),
						$client->inputDocument(...),
					),
					ttl_seconds : 43,
				),
				$client->inputMediaPhoto(
					spoiler : true,
					id : $client->inputPhotoEmpty(...),
					ttl_seconds : 33,
				),
				$client->inputMediaGeoPoint(
					geo_point : $client->inputGeoPointEmpty(...),
				),
				$client->inputMediaContact(
					phone_number : '+1234567890',
					first_name : 'Tak',
					last_name : 'None',
					vcard : 'SM19ugztPJkrW2pa',
				),
				$client->inputMediaUploadedDocument(
					nosound_video : true,
					force_file : true,
					spoiler : true,
					file : $client->inputFile(...),
					thumb : $client->inputFile(...),
					mime_type : 'KPp5qwzujdBarV1Q',
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
					video_timestamp : 37,
					ttl_seconds : 13,
				),
				$client->inputMediaDocument(
					spoiler : true,
					id : $client->inputDocumentEmpty(...),
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 62,
					ttl_seconds : 16,
					query : 'YyMGSlsezNHf8coX',
				),
				$client->inputMediaVenue(
					geo_point : $client->inputGeoPointEmpty(...),
					title : 'IToLhMzgJrsO2A5u',
					address : 'dH081IVobmvRSMGy',
					provider : 'iMsAhXTzIVq1B6Kt',
					venue_id : 'lAuB285bNZd3fQTr',
					venue_type : 'jyXbLNaGQcZ3EKC2',
				),
				$client->inputMediaPhotoExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 98,
				),
				$client->inputMediaDocumentExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 9,
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 59,
				),
				$client->inputMediaGame(
					id : $client->inputGameID(...),
				),
				$client->inputMediaInvoice(
					title : 'oCqAGDPO0YN9ZEQS',
					description : 'p7D61Sjdu2teUwI4',
					photo : $client->inputWebDocument(...),
					invoice : $client->invoice(...),
					payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					provider : 'WkZRSi4mxwDUyrQf',
					provider_data : $client->dataJSON(...),
					start_param : 'YaDVlIJwO5Kcov1X',
					extended_media : $client->inputMediaEmpty(...),
				),
				$client->inputMediaGeoLive(
					stopped : true,
					geo_point : $client->inputGeoPointEmpty(...),
					heading : 45,
					period : 91,
					proximity_notification_radius : 13,
				),
				$client->inputMediaPoll(
					poll : $client->poll(...),
					correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
					solution : 'rPTcelkEBivDSm7V',
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
					emoticon : 'aCjZ7pYbcO2mqIsN',
				),
				$client->inputMediaStory(
					peer : $client->inputPeerEmpty(...),
					id : 97,
				),
				$client->inputMediaWebPage(
					force_large_media : true,
					force_small_media : true,
					optional : true,
					url : 'https://docs.liveproto.dev',
				),
				$client->inputMediaPaidMedia(
					stars_amount : -8570872194418384794,
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
					payload : '730clU2ukftPpYTw',
				),
				$client->inputMediaTodo(
					todo : $client->todoList(...),
				),
			),
			payload : '4F52mxX9GK1NLQiO',
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