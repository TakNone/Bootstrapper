# bots.reorderPreviewMedias

**Description** : *Reorder a main mini app previews, see here &raquo; for more info*

**Layer** : 214

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
	lang_code : 'k6xI3aAiDzP1bcBK',
	order : array(
		$client->inputMediaEmpty(),
		$client->inputMediaUploadedPhoto(
			spoiler : true,
			file : $client->inputFile(
				id : -2313052838060328968,
				parts : 58,
				name : 'Q6AR7zB9iGrFuqX2',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : 2605472012310752178,
					access_hash : -4111396587003314296,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			ttl_seconds : 46,
		),
		$client->inputMediaPhoto(
			spoiler : true,
			id : $client->inputPhotoEmpty(),
			ttl_seconds : 6,
		),
		$client->inputMediaGeoPoint(
			geo_point : $client->inputGeoPointEmpty(),
		),
		$client->inputMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : 'xYNS5fRwzUc8WAqI',
		),
		$client->inputMediaUploadedDocument(
			nosound_video : true,
			force_file : true,
			spoiler : true,
			file : $client->inputFile(
				id : 16458609531044051,
				parts : 18,
				name : 'm8XKHGFbpYU0Adj2',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			thumb : $client->inputFile(
				id : -6028229613432193417,
				parts : 86,
				name : 'vBe0PXsVLGgq1ECh',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			mime_type : 'dfDFriB8bGnCeU6Y',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 18,
					h : 41,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'ZzukrABdW2jCGtOm',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1667964.3935546875,
					w : 16,
					h : 36,
					preload_prefix_size : 75,
					video_start_ts : 1847300.34765625,
					video_codec : 'dx7Lu2hBJXGoPZKk',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 31,
					title : 'hxUGvC4bqB2Ktdcy',
					performer : 'pIrkHGBfe8EqYw7v',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'Wp4bmCLqK0UlMS7N',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'OGZj1xwKvYDf643g',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : 218225794777364024,
					access_hash : -1138903176339215122,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 47,
			ttl_seconds : 96,
		),
		$client->inputMediaDocument(
			spoiler : true,
			id : $client->inputDocumentEmpty(),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 9,
			ttl_seconds : 0,
			query : 's0f84ZjikrzP72mJ',
		),
		$client->inputMediaVenue(
			geo_point : $client->inputGeoPointEmpty(),
			title : 'YoEPSatjTA7u6VQl',
			address : 'ALqZuDfbtKxkTd0X',
			provider : 'h1Ziz2KIt8SwNFLY',
			venue_id : '5DiHo4yFk7BneXUc',
			venue_type : 'NcqlV4oWfnbRM70w',
		),
		$client->inputMediaPhotoExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 94,
		),
		$client->inputMediaDocumentExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 55,
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 30,
		),
		$client->inputMediaGame(
			id : $client->inputGameID(
				id : -8671055306788445288,
				access_hash : 6773747886817812828,
			),
		),
		$client->inputMediaInvoice(
			title : 'MyBGK7HSr3b8OZ4s',
			description : 'zA4sfpPYhcS8J1Wa',
			photo : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 36,
				mime_type : '1HBOsblK5fvyLrU6',
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
				currency : 'CM2UBVfk3HdjSie4',
				prices : array(
					$client->labeledPrice(...),
				),
				max_tip_amount : -890273161483415946,
				suggested_tip_amounts : array(2401233250502696470),
				terms_url : 'https://docs.liveproto.dev',
				subscription_period : 37,
			),
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			provider : 'EXcwNU7zQSvIhFis',
			provider_data : $client->dataJSON(
				data : 'NstYmaSnbABeiRJh',
			),
			start_param : 'KhtH8VrOW4PNnm0Z',
			extended_media : $client->inputMediaEmpty(),
		),
		$client->inputMediaGeoLive(
			stopped : true,
			geo_point : $client->inputGeoPointEmpty(),
			heading : 79,
			period : 62,
			proximity_notification_radius : 58,
		),
		$client->inputMediaPoll(
			poll : $client->poll(
				id : -457574994842763975,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 86,
				close_date : 60,
			),
			correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			solution : 'eKTruOt8zJSsQhU9',
			solution_entities : array(
				$client->messageEntityUnknown(
					offset : 3,
					length : 99,
				),
				$client->messageEntityMention(
					offset : 59,
					length : 25,
				),
				$client->messageEntityHashtag(
					offset : 7,
					length : 74,
				),
				$client->messageEntityBotCommand(
					offset : 67,
					length : 60,
				),
				$client->messageEntityUrl(
					offset : 50,
					length : 54,
				),
				$client->messageEntityEmail(
					offset : 56,
					length : 17,
				),
				$client->messageEntityBold(
					offset : 16,
					length : 39,
				),
				$client->messageEntityItalic(
					offset : 19,
					length : 50,
				),
				$client->messageEntityCode(
					offset : 56,
					length : 43,
				),
				$client->messageEntityPre(
					offset : 60,
					length : 15,
					language : 'm5HWIiwj96TXUrcA',
				),
				$client->messageEntityTextUrl(
					offset : 33,
					length : 71,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 82,
					length : 27,
					user_id : 8990084940172571193,
				),
				$client->inputMessageEntityMentionName(
					offset : 96,
					length : 12,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 58,
					length : 47,
				),
				$client->messageEntityCashtag(
					offset : 76,
					length : 77,
				),
				$client->messageEntityUnderline(
					offset : 1,
					length : 30,
				),
				$client->messageEntityStrike(
					offset : 26,
					length : 48,
				),
				$client->messageEntityBankCard(
					offset : 33,
					length : 14,
				),
				$client->messageEntitySpoiler(
					offset : 57,
					length : 11,
				),
				$client->messageEntityCustomEmoji(
					offset : 2,
					length : 1,
					document_id : 4394833414611342985,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 52,
				),
			),
		),
		$client->inputMediaDice(
			emoticon : 'qm1GzrTEFiaOw5v3',
		),
		$client->inputMediaStory(
			peer : $client->inputPeerEmpty(),
			id : 26,
		),
		$client->inputMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			optional : true,
			url : 'https://docs.liveproto.dev',
		),
		$client->inputMediaPaidMedia(
			stars_amount : 1694223197450549422,
			extended_media : array(
				$client->inputMediaEmpty(),
				$client->inputMediaUploadedPhoto(
					spoiler : true,
					file : $client->inputFile(...),
					stickers : array(
						$client->inputDocumentEmpty(...),
						$client->inputDocument(...),
					),
					ttl_seconds : 14,
				),
				$client->inputMediaPhoto(
					spoiler : true,
					id : $client->inputPhotoEmpty(...),
					ttl_seconds : 16,
				),
				$client->inputMediaGeoPoint(
					geo_point : $client->inputGeoPointEmpty(...),
				),
				$client->inputMediaContact(
					phone_number : '+1234567890',
					first_name : 'Tak',
					last_name : 'None',
					vcard : 'DLWCMOxlYNvKw29d',
				),
				$client->inputMediaUploadedDocument(
					nosound_video : true,
					force_file : true,
					spoiler : true,
					file : $client->inputFile(...),
					thumb : $client->inputFile(...),
					mime_type : 'ZPzchl8daWvDIO5x',
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
					video_timestamp : 91,
					ttl_seconds : 57,
				),
				$client->inputMediaDocument(
					spoiler : true,
					id : $client->inputDocumentEmpty(...),
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 78,
					ttl_seconds : 64,
					query : 'g6pwLZyXB1xuNeJR',
				),
				$client->inputMediaVenue(
					geo_point : $client->inputGeoPointEmpty(...),
					title : 'vcOBLAFoPylfTHU8',
					address : '8AxjKfi2eRosO5EY',
					provider : 'vk5LAG2VSbfs8z1U',
					venue_id : 'PyzA2YXvQGT5BejE',
					venue_type : 'oVp370wI4fByHRFM',
				),
				$client->inputMediaPhotoExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 97,
				),
				$client->inputMediaDocumentExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 66,
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 13,
				),
				$client->inputMediaGame(
					id : $client->inputGameID(...),
				),
				$client->inputMediaInvoice(
					title : 'usXxcYqSz08lGpRr',
					description : 'fZk74OSBsFNiuHnX',
					photo : $client->inputWebDocument(...),
					invoice : $client->invoice(...),
					payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					provider : 'NPdJjr8UuveBFloz',
					provider_data : $client->dataJSON(...),
					start_param : 'FeonA2YzqTmjgNXZ',
					extended_media : $client->inputMediaEmpty(...),
				),
				$client->inputMediaGeoLive(
					stopped : true,
					geo_point : $client->inputGeoPointEmpty(...),
					heading : 98,
					period : 42,
					proximity_notification_radius : 31,
				),
				$client->inputMediaPoll(
					poll : $client->poll(...),
					correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
					solution : 'K7YqnxQRMvhiI30C',
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
					emoticon : 'fM2KW5QaepPhsHu8',
				),
				$client->inputMediaStory(
					peer : $client->inputPeerEmpty(...),
					id : 77,
				),
				$client->inputMediaWebPage(
					force_large_media : true,
					force_small_media : true,
					optional : true,
					url : 'https://docs.liveproto.dev',
				),
				$client->inputMediaPaidMedia(
					stars_amount : 3107860487993946586,
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
					payload : 'P0culQGsjXZDabiq',
				),
				$client->inputMediaTodo(
					todo : $client->todoList(...),
				),
			),
			payload : '43CUd6s2yjgHxPq8',
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