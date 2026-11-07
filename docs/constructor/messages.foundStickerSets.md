# messages.foundStickerSets

**Description** : *Found stickersets*

**Layer** : 229

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
				installed_date : 49,
				id : -4325411274695555566,
				access_hash : 636396138845046888,
				title : 'aoZA4qWsnUEuiQNx',
				short_name : 'rAz7pnG42Mo9ibdP',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'eRC3dmrEDsky70f5',
					),
					$client->photoSize(
						type : 'QA6s8ExrB4FDpCVf',
						w : 65,
						h : 90,
						size : 43,
					),
					$client->photoCachedSize(
						type : '245Xgyc8DluwjkZe',
						w : 13,
						h : 18,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'gCOkDaEesPXIb08u',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '2SQXUn0evB5DC6HI',
						w : 4,
						h : 5,
						sizes : array(79),
					),
					$client->photoPathSize(
						type : 'Y2mlht391PkiOUjS',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 85,
				thumb_version : 94,
				thumb_document_id : 7003411371046349658,
				count : 53,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 6398781468049137060,
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
				installed_date : 31,
				id : -5404765063675003313,
				access_hash : -5372254265328855097,
				title : 'uPWHqeCFmz71MjBX',
				short_name : 'p2nm7QZWvM0UjA9J',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '5Ljo374PanDu1T9v',
					),
					$client->photoSize(
						type : '0ylxzTkK8hUHP6nZ',
						w : 79,
						h : 68,
						size : 84,
					),
					$client->photoCachedSize(
						type : 'ugjKAaHT12MXLDdy',
						w : 100,
						h : 49,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'dMPLY7SlAQ5i9ZUr',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'oIMOjbwrzp0egLai',
						w : 47,
						h : 41,
						sizes : array(45),
					),
					$client->photoPathSize(
						type : 'Jt9n7N1UOChFdopA',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 92,
				thumb_version : 12,
				thumb_document_id : -5694750554984688795,
				count : 57,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -5076373721426498074,
				),
				$client->document(
					id : 2917512473608602179,
					access_hash : 934168549290309662,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 39,
					mime_type : 'incoTZsCOLPJgF0x',
					size : -221866671440074370,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'MlQsAvxh4zLFigq7',
						),
						$client->photoSize(
							type : 'W7Fasoyq1IPX63hc',
							w : 45,
							h : 100,
							size : 71,
						),
						$client->photoCachedSize(
							type : 'SGxOpEFjVJ479wZP',
							w : 52,
							h : 36,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'r2hOcalWnRSezUb3',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'Ew852i9QyXHGvV0x',
							w : 64,
							h : 67,
							sizes : array(77),
						),
						$client->photoPathSize(
							type : 'clbJh9Xgw1axe0tr',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 't8ED7OdzVIsKhbCB',
							w : 53,
							h : 98,
							size : 17,
							video_start_ts : 1684070.4296875,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -5558205083565789553,
							background_colors : array(82),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -6667417916726660919,
							background_colors : array(86),
						),
					),
					dc_id : 67,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 40,
							h : 55,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'oYaNn2GP6zXwKDif',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1824727.9541015625,
							w : 14,
							h : 50,
							preload_prefix_size : 13,
							video_start_ts : 62795.2431640625,
							video_codec : '40lhumOrfHwDtd9E',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 74,
							title : 'Jazk8Mh0OfINt7pC',
							performer : 'kip41DGoheCMFz2Q',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'YSvWRkg51wad8tKx',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'KIzgH9mpu6eQTqhY',
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
				installed_date : 56,
				id : 6912738232245647322,
				access_hash : -3322080470602606004,
				title : 'ODWoAExyulUvS8jk',
				short_name : 'a4Ye6VtEDIdLojRx',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'DJ7if4xCP1MtbwUG',
					),
					$client->photoSize(
						type : 'oSFVxhdt65sKzCq4',
						w : 11,
						h : 18,
						size : 42,
					),
					$client->photoCachedSize(
						type : 'nABlvGEHDbPoNiga',
						w : 62,
						h : 89,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'dTJk4EDyHe8hsQwi',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'zbvj4WHZ2wJx7QMU',
						w : 52,
						h : 65,
						sizes : array(96),
					),
					$client->photoPathSize(
						type : 'B1QOYFbPVwmt8jJ0',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 78,
				thumb_version : 33,
				thumb_document_id : 6277752618858918945,
				count : 33,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : '8tf2RPOyKsJ7gLDn',
					documents : array(-4619249171069865828),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -7804095021793037863,
					keyword : array('fmWYMFHASEIKlVOP'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -599121295164568918,
				),
				$client->document(
					id : -4625846448442462397,
					access_hash : 4748968664643876428,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 36,
					mime_type : 'gTsezxq7wMblWEGN',
					size : -8797859054843688788,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'NhQulx0igFCrPyeK',
						),
						$client->photoSize(
							type : 'XWFkB1jyN8vCE6US',
							w : 77,
							h : 37,
							size : 11,
						),
						$client->photoCachedSize(
							type : 'OMylRXp5dUuQ9iPA',
							w : 61,
							h : 82,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'pMA6htHCmTezwid9',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'ig0SVjhvTqzOL4an',
							w : 30,
							h : 57,
							sizes : array(9),
						),
						$client->photoPathSize(
							type : 'O8l756tHLwXsuoRb',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'gdY1iaZEUNMqmywD',
							w : 73,
							h : 96,
							size : 34,
							video_start_ts : 738190.953125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 9200650197355990481,
							background_colors : array(2),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -624509726001135778,
							background_colors : array(10),
						),
					),
					dc_id : 84,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 45,
							h : 53,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'bFvOYI5NJQ3DeA9m',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 175250.818359375,
							w : 0,
							h : 0,
							preload_prefix_size : 35,
							video_start_ts : 1301015.9453125,
							video_codec : 'PXG2aMR1gLqJKNhe',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 36,
							title : 'JCQiueWkcxTKda3p',
							performer : '3WrBmpkHDUXgVAsi',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'dfHzUKVMtpb7JP6c',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'NZM1gPo6Qhse5wxW',
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
				installed_date : 0,
				id : 3327610218628417705,
				access_hash : -5351439535710228433,
				title : 'fFVKm0PMjuwvpJ1k',
				short_name : 'V5Hs2e6yiWMRfct1',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'zyu6BHNKkecj7OEY',
					),
					$client->photoSize(
						type : 'bursReUHOdFI74jp',
						w : 40,
						h : 76,
						size : 1,
					),
					$client->photoCachedSize(
						type : 'QqvZ6xrL1KD2XiVO',
						w : 75,
						h : 88,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'Sbcqx3fhC4woupyU',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'kBKCytRWU8YOQS34',
						w : 68,
						h : 34,
						sizes : array(89),
					),
					$client->photoPathSize(
						type : 'KRiAjIW8kx4bmpYJ',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 0,
				thumb_version : 58,
				thumb_document_id : 2149384760462213278,
				count : 28,
				hash : 0,
			),
		),
	),
);
```