# messages.foundStickerSets

**Description** : *Found stickersets*

**Layer** : 218

```tl
messages.foundStickerSets#8af09dd2 hash:long sets:Vector<StickerSetCovered> = messages.FoundStickerSets;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Found stickersets |

---

## Type

[messages.FoundStickerSets](type/messages.FoundStickerSets)

---

## Example

```php
$messagesFoundStickerSets = $client->messages->foundStickerSets(
	hash : 0,
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
				installed_date : 59,
				id : -5773020233729651429,
				access_hash : 2489750605086935177,
				title : 'yTB5Xwt2VZCLJOzm',
				short_name : 'Z1QCuL2g6P9M4FK5',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'LJaEFH3tfuIbsQYk',
					),
					$client->photoSize(
						type : 'eER2qnV7XClpas4g',
						w : 82,
						h : 65,
						size : 99,
					),
					$client->photoCachedSize(
						type : 'Un3kBEwTy6cuabPi',
						w : 46,
						h : 25,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : '5cT0wLHOnJXqkod4',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'T3NIQUjWeuv6szJq',
						w : 60,
						h : 70,
						sizes : array(31),
					),
					$client->photoPathSize(
						type : 'qbhNAPSDX9oLG4Eu',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 60,
				thumb_version : 10,
				thumb_document_id : 7326192427108126562,
				count : 62,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -3379852890205113263,
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
				installed_date : 95,
				id : 1566274839161300364,
				access_hash : -1424579441785909375,
				title : 'tYO53gkJ9I4yzwRK',
				short_name : 'MyVUube8fdLn2IKw',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '7vQFyfDgmGdhl6HO',
					),
					$client->photoSize(
						type : 'JtopIM3GBzyKTHDu',
						w : 48,
						h : 15,
						size : 32,
					),
					$client->photoCachedSize(
						type : 'CjXJm4T8dishuVQ2',
						w : 52,
						h : 68,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'yE0h6WeONJsZ8KUl',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '5NuXTdQeEZ2ilRJa',
						w : 5,
						h : 30,
						sizes : array(62),
					),
					$client->photoPathSize(
						type : 'k72yTUaxdNArLQBV',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 58,
				thumb_version : 29,
				thumb_document_id : -4219847554748380960,
				count : 57,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -909523152165676843,
				),
				$client->document(
					id : -6786512079736771269,
					access_hash : -1811079120420702798,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 15,
					mime_type : '4iaRcqe9SjW5Gtb6',
					size : -1089337686112165861,
					thumbs : array(
						$client->photoSizeEmpty(
							type : '3PakB9tepKIy0vXJ',
						),
						$client->photoSize(
							type : '7PxkhAQGKURJHd4e',
							w : 39,
							h : 44,
							size : 74,
						),
						$client->photoCachedSize(
							type : 'mipqflR7Yz1xgSEs',
							w : 68,
							h : 63,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'jnGUbw910Yg2uvTs',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'MubViZvKQFYa94nR',
							w : 59,
							h : 49,
							sizes : array(69),
						),
						$client->photoPathSize(
							type : 'g83Raf9qClyMGEcd',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'Q8u9LdrCaiSjPgfc',
							w : 41,
							h : 21,
							size : 52,
							video_start_ts : 434967.0673828125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 8100258934272791448,
							background_colors : array(41),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 906471115310068801,
							background_colors : array(33),
						),
					),
					dc_id : 29,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 1,
							h : 50,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'HpfZa7XsNI5bEw6S',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -1541762.2529296875,
							w : 24,
							h : 66,
							preload_prefix_size : 99,
							video_start_ts : 185490.33203125,
							video_codec : 'kz7aSntGIYhPdJDq',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 40,
							title : 'oeCgHTkN9bVv1z50',
							performer : 'FfnBkiaQ7D9ZtWmL',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : '0bxrNmeT6E7zcDXa',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'ovH8Zxks04FtUgVw',
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
				installed_date : 46,
				id : 8648931491764824467,
				access_hash : 3579286999992995818,
				title : 'wRCF2EprPfhUIVJy',
				short_name : 'g5VpPriQhY9yuZeC',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'Ysm9Pn3HoaitIZCb',
					),
					$client->photoSize(
						type : 'J5QA6iWYca8zsHZ2',
						w : 13,
						h : 20,
						size : 33,
					),
					$client->photoCachedSize(
						type : '0PKTvpnLwbHSloBg',
						w : 57,
						h : 96,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'XsjgywvbPqMRan3C',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'DxyGd5ZS4TUgkrJY',
						w : 94,
						h : 71,
						sizes : array(81),
					),
					$client->photoPathSize(
						type : 'nv3qzSGkg8Z7mlNM',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 99,
				thumb_version : 45,
				thumb_document_id : 776412127891925236,
				count : 18,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'homtpnkC041l6w2M',
					documents : array(-7072506907913732192),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 3704913098581373258,
					keyword : array('OBxVe0p2grLZDtCG'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -3789987322512254776,
				),
				$client->document(
					id : 2446793142489693373,
					access_hash : -3230021533910893688,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 36,
					mime_type : 'D4hUL0I7EOBYH6pc',
					size : -2197230616463854769,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'oxOBNv8MZkzH5hb0',
						),
						$client->photoSize(
							type : 'vXwiM0Fxp7qLIjN5',
							w : 30,
							h : 19,
							size : 23,
						),
						$client->photoCachedSize(
							type : 'ByV8k0KjYIWN7pno',
							w : 86,
							h : 0,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'MQp82PujJraEwxve',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'iIyGanubcT2Mlz9W',
							w : 29,
							h : 10,
							sizes : array(50),
						),
						$client->photoPathSize(
							type : 'o8hRWGISs1bN5kiq',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : '6EtQLw4nZxXc8o7A',
							w : 6,
							h : 99,
							size : 50,
							video_start_ts : -1476225.681640625,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 5550227379887117847,
							background_colors : array(50),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -1591501343005587699,
							background_colors : array(91),
						),
					),
					dc_id : 95,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 23,
							h : 64,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'l6p0Yd5u4EFyDBt2',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -1198795.0634765625,
							w : 38,
							h : 15,
							preload_prefix_size : 11,
							video_start_ts : -379378.98046875,
							video_codec : 'lIRh1wEJ5zPAtKbc',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 29,
							title : 'pAicTtsu06LOfDBz',
							performer : 'cupjzE91hN52JBfD',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'a3HF1ElTmpNhLCvZ',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'VLb9tnCWai5Y80Ed',
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
				installed_date : 75,
				id : 2251268374909231188,
				access_hash : -99847208245592102,
				title : '5CWIsN6lowKB3YPn',
				short_name : '8EfVnuKLx6Ii7AR1',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '45zVmp7dIcDhl9Os',
					),
					$client->photoSize(
						type : 'SVoZaN5J7tRhfuYr',
						w : 74,
						h : 24,
						size : 76,
					),
					$client->photoCachedSize(
						type : 'x36S4aQXCzVE5Tsb',
						w : 52,
						h : 2,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'GKvMTHm8y1htSO7I',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'WLlsxSiqHyGPEbOT',
						w : 20,
						h : 93,
						sizes : array(27),
					),
					$client->photoPathSize(
						type : 'KjBrtPyXJldG4puQ',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 10,
				thumb_version : 64,
				thumb_document_id : -692507241316985053,
				count : 85,
				hash : 0,
			),
		),
	),
);
```