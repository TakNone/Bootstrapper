# messages.featuredStickers

**Description** : *Featured stickersets*

**Layer** : 227

```tl
messages.featuredStickers#be382906 flags:# premium:flags.0?true hash:long count:int sets:Vector<StickerSetCovered> unread:Vector<long> = messages.FeaturedStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **premium** | [`flags.0?true`](type/true) | Whether this is a premium stickerset |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>count</mark> | [`int`](type/int) | Total number of featured stickers |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Featured stickersets |
| <mark>unread</mark> | [`Vector<long>`](type/long) | IDs of new featured stickersets |

---

## Type

[messages.FeaturedStickers](type/messages.FeaturedStickers)

---

## Example

```php
$messagesFeaturedStickers = $client->messages->featuredStickers(
	premium : true,
	hash : 0,
	count : 16,
	sets : array(
		$client->stickerSetCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 21,
				id : -8077196682061601221,
				access_hash : -8458861409733165780,
				title : 'LBce4Md2V6mnFwx9',
				short_name : 'Wd1QSwkFxXc4VuCy',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '0wRhDuTcCpHNg3iG',
					),
					$client->photoSize(
						type : '0K4zuprhqgfakdyx',
						w : 32,
						h : 98,
						size : 97,
					),
					$client->photoCachedSize(
						type : '8OynvQz2hb5oJZVd',
						w : 44,
						h : 68,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'jtpaYkvWrLHTFiqS',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'eKb3Nro9w74RFmX2',
						w : 51,
						h : 50,
						sizes : array(28),
					),
					$client->photoPathSize(
						type : 'LMCpwXj9fxr2hROy',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 31,
				thumb_version : 15,
				thumb_document_id : -8118929015313230748,
				count : 98,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -540401268818493159,
			),
		),
		$client->stickerSetMultiCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 52,
				id : 6606069510674993306,
				access_hash : -3520319813811642190,
				title : 'P2osBSvcUQiNTgkb',
				short_name : 'rdgyu4jC5tckTP1i',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'x14ZRlqNIQF8yoaC',
					),
					$client->photoSize(
						type : '9ap34UMgQJS8TsKn',
						w : 57,
						h : 64,
						size : 14,
					),
					$client->photoCachedSize(
						type : '9W2CYJFbRzkiwK1a',
						w : 58,
						h : 83,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : '91NEUaXl8Kp0B7VD',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'JcBYLxNiFD5qTtH9',
						w : 14,
						h : 70,
						sizes : array(41),
					),
					$client->photoPathSize(
						type : 'Qa5o8BgW1JIq34bm',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 98,
				thumb_version : 41,
				thumb_document_id : -4632919057887318263,
				count : 78,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 6078023915746716147,
				),
				$client->document(
					id : -4790289602140049918,
					access_hash : 1733459720977615991,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 61,
					mime_type : 'h2sY3qTnKVJBMDZR',
					size : 5236983713254435652,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'o74H690rVhcIB1eD',
						),
						$client->photoSize(
							type : 'w3PbYCQhOv0Nuaec',
							w : 29,
							h : 75,
							size : 28,
						),
						$client->photoCachedSize(
							type : 'jkmQvEcDIqXydFTB',
							w : 82,
							h : 65,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'GciZEJ451IfqhVrw',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'csJQNg3IBp20dtkM',
							w : 89,
							h : 96,
							sizes : array(26),
						),
						$client->photoPathSize(
							type : 'ukOY0VlH3QZsidjn',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'BQqhOIjVJzp97lCS',
							w : 32,
							h : 31,
							size : 60,
							video_start_ts : 420437.80078125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 8238781286571337089,
							background_colors : array(15),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 1975497512700515779,
							background_colors : array(5),
						),
					),
					dc_id : 75,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 83,
							h : 23,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'FIaUv5m4WRMsYyhu',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1312194.919921875,
							w : 60,
							h : 51,
							preload_prefix_size : 86,
							video_start_ts : -274769.294921875,
							video_codec : '0YlQgUTJmSxwXKRt',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 34,
							title : 'R0YwiEdIKGJU1aTL',
							performer : 'KubvhBNzJP5MaxRV',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'trncWb95upOGKsze',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'ovg2irOzNYk4SLxR',
							stickerset : $client->inputStickerSetEmpty(...),
						),
					),
				),
			),
		),
		$client->stickerSetFullCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 17,
				id : -4686467569204516672,
				access_hash : -2201620963261580674,
				title : '914od6PEUYWOnGgI',
				short_name : 'Z1bkl69VELNixuKj',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'RgxmbtaZrlIFeVjD',
					),
					$client->photoSize(
						type : 'SjUVDkFzvKRLMg8B',
						w : 67,
						h : 61,
						size : 78,
					),
					$client->photoCachedSize(
						type : 'Ba20QqHYOLdJyXtm',
						w : 11,
						h : 73,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'JmXUIz7QfZkvc9h1',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'edzpSyowcWvl0U1s',
						w : 94,
						h : 57,
						sizes : array(1),
					),
					$client->photoPathSize(
						type : 'exvE1lbsW6LuH0aF',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 2,
				thumb_version : 72,
				thumb_document_id : 5070226203428397210,
				count : 71,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'ylJQDEx0WifLXHmp',
					documents : array(-1452747709346221005),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 4115380895246835332,
					keyword : array('AQjWlwoctPiBFJea'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 5842769677536007039,
				),
				$client->document(
					id : 4253143038794217101,
					access_hash : -1467312359435920783,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 59,
					mime_type : 'C7KmobRyr49jZTPw',
					size : 5962748650598669621,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'nAEUlmNTah0OrPqJ',
						),
						$client->photoSize(
							type : 'W3ATJPvmGtuQCihn',
							w : 66,
							h : 36,
							size : 79,
						),
						$client->photoCachedSize(
							type : '2AGCrT5VOJ06Zk7X',
							w : 54,
							h : 73,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'uZIMq4lE8PObzo7H',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'kXCVOa21JcxW6MiL',
							w : 49,
							h : 4,
							sizes : array(15),
						),
						$client->photoPathSize(
							type : 'cbPe0VK9fIRDTmGp',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'nI0jG7P9viF6QBVz',
							w : 48,
							h : 2,
							size : 40,
							video_start_ts : 786407.4521484375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 8769964744016362244,
							background_colors : array(93),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 1731037829941457416,
							background_colors : array(89),
						),
					),
					dc_id : 17,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 52,
							h : 81,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'uwB5yo0CNek7RKsi',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -493831.703125,
							w : 50,
							h : 22,
							preload_prefix_size : 51,
							video_start_ts : -2092991.90625,
							video_codec : '4wpCWLATGaxsQZc7',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 15,
							title : 'dbasmz6O8T30tiMv',
							performer : 'hmZlRxBi0cUH5f6I',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'UCwaFQnEDzcBK7gZ',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'zxSusblk7Ew8PgM3',
							stickerset : $client->inputStickerSetEmpty(...),
						),
					),
				),
			),
		),
		$client->stickerSetNoCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 25,
				id : -6779984557804126073,
				access_hash : 4610998669002106629,
				title : 'MNh4YblC7LFUtDwX',
				short_name : '09coORnX8EqG2Ndm',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'E3WDtax6ZAHQzVId',
					),
					$client->photoSize(
						type : '1miqb8AV30NwCTuj',
						w : 66,
						h : 62,
						size : 99,
					),
					$client->photoCachedSize(
						type : 'YvjTfNIk2bnpDC5i',
						w : 59,
						h : 2,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : '9admrp5bJqeM8Bi4',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'wPKJmUrH8x9tnq7A',
						w : 20,
						h : 60,
						sizes : array(38),
					),
					$client->photoPathSize(
						type : 'ENGgeqFz0oZKvCaW',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 62,
				thumb_version : 6,
				thumb_document_id : 6824216177422336555,
				count : 7,
				hash : 0,
			),
		),
	),
	unread : array(3086678692514048413),
);
```