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
				installed_date : 82,
				id : 7815015056086062545,
				access_hash : 4248726151107207902,
				title : 'yorLOBRaZfYh1TQI',
				short_name : 'y6aubYCFsI7SOWQc',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'SmMCgb9nwlxKhvAs',
					),
					$client->photoSize(
						type : 'Tq94KMWpGESORz2A',
						w : 22,
						h : 40,
						size : 68,
					),
					$client->photoCachedSize(
						type : 'rD2ifMahGtq3jUuT',
						w : 77,
						h : 65,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : '5s1SBI4m6YngaAh9',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'B3zvabY0TgP4Hprm',
						w : 2,
						h : 77,
						sizes : array(38),
					),
					$client->photoPathSize(
						type : 'O7D0tXjxmhwelk1U',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 28,
				thumb_version : 17,
				thumb_document_id : 7158080722546249022,
				count : 8,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -5851802768551339334,
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
				installed_date : 24,
				id : -3972427144202998853,
				access_hash : -6588474619630424241,
				title : 'ZBNIyLtmVAiUKrJ5',
				short_name : '9YWBdU6ienSzOLHq',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'EQ8F5YAHmLjZPMgB',
					),
					$client->photoSize(
						type : 'Z1P8izx0WHkLypTI',
						w : 33,
						h : 26,
						size : 55,
					),
					$client->photoCachedSize(
						type : 'SJm7ipNKPGVLkhO4',
						w : 44,
						h : 58,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'wzBAoXxmrIs28ldT',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'lD2I7QypfTUtEsJz',
						w : 33,
						h : 88,
						sizes : array(57),
					),
					$client->photoPathSize(
						type : 'Ce6pkBzw9jV2dWvs',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 43,
				thumb_version : 13,
				thumb_document_id : 1636793643313024900,
				count : 25,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -7633901053410054164,
				),
				$client->document(
					id : 3053159874817726074,
					access_hash : 3948512144197717515,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 4,
					mime_type : '5ZiaA4StPhkofUsr',
					size : 6758655208678124636,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'WFPAnvO6aM74JGIq',
						),
						$client->photoSize(
							type : 'WdbwaY4cO7FQ3MX6',
							w : 58,
							h : 34,
							size : 3,
						),
						$client->photoCachedSize(
							type : 'vRlAN83VKBjJ29Ek',
							w : 100,
							h : 10,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'k6u4ijvX2MlVPYzh',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'ANtscY12xyQbIeRZ',
							w : 1,
							h : 46,
							sizes : array(48),
						),
						$client->photoPathSize(
							type : 'kqo0R4W8hcUjvJFt',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'iUz3qlb0KxPL2BmO',
							w : 37,
							h : 56,
							size : 38,
							video_start_ts : 1036050.78125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 8473993442694059995,
							background_colors : array(0),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -9194641813042734248,
							background_colors : array(83),
						),
					),
					dc_id : 11,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 68,
							h : 98,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'AxW0vsoK3jz65H9e',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1417372.12890625,
							w : 29,
							h : 95,
							preload_prefix_size : 96,
							video_start_ts : 1967887.451171875,
							video_codec : '4jm5KDhLF0EisA9q',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 80,
							title : 'BbLMmgj0HxcQ2nrq',
							performer : 'a2iZcOIEv7YBexlC',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'ysRVBPdYFnMvjaW0',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'eEiFu6cx9zUY5lbg',
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
				installed_date : 33,
				id : -5329244632916617519,
				access_hash : -5393441049578683021,
				title : 'q9MpoAaJ4VzvudPG',
				short_name : 'SDlA0Gh4rkoxHNq3',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'GxBDTlN2rbRyMKLY',
					),
					$client->photoSize(
						type : 'wupMoDjcyrSv2nKN',
						w : 81,
						h : 14,
						size : 48,
					),
					$client->photoCachedSize(
						type : 'q5ZUr4l7v0O8Syxj',
						w : 70,
						h : 29,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'iKLulsHEO9DkSZyr',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'AZlwdYX75vCDeSfK',
						w : 100,
						h : 87,
						sizes : array(8),
					),
					$client->photoPathSize(
						type : 'W64aICdFngGMYAuU',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 56,
				thumb_version : 7,
				thumb_document_id : 6305656800595919446,
				count : 62,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'EmAUdhLFoHJ8vrKB',
					documents : array(-160999932316899145),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -7165570098786931449,
					keyword : array('qtoHliTck5waAmLX'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 5515748916512094565,
				),
				$client->document(
					id : -8258896990175727880,
					access_hash : 2418193291278121180,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 65,
					mime_type : 'LG4MqHeEka3xXDpg',
					size : -4997930462614397323,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'VQjhnMO31aHpyiFt',
						),
						$client->photoSize(
							type : '5SeQjBbd0FnfWDL6',
							w : 85,
							h : 42,
							size : 94,
						),
						$client->photoCachedSize(
							type : 'KFNltzcPp3YabIfu',
							w : 7,
							h : 35,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : '2rAby5Kl0wzdij4Q',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : '1rJOt2VcNYMhgB6x',
							w : 81,
							h : 72,
							sizes : array(70),
						),
						$client->photoPathSize(
							type : 'WK3kjweHUGzmIgr1',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'C9U4B3eV5rSwavHZ',
							w : 53,
							h : 73,
							size : 47,
							video_start_ts : 1377749.5810546875,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 456767596483288009,
							background_colors : array(68),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 8341660735123734154,
							background_colors : array(6),
						),
					),
					dc_id : 3,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 8,
							h : 88,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'Vt4qAbadzrIgFP6R',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -25081.1865234375,
							w : 62,
							h : 85,
							preload_prefix_size : 28,
							video_start_ts : -1346524.5712890625,
							video_codec : 'RHTGZnzIykNC2lAx',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 77,
							title : '16meKNoLygG27iaz',
							performer : 'YzHZ1Uqt43abCho2',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'qldYMJwR3WVtzGEf',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : '9LVorP2jIXC1iyYN',
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
				installed_date : 72,
				id : 3739446587281525177,
				access_hash : -4034376794596600685,
				title : 'zs80XNyjmWMRrD6e',
				short_name : 'Tyn3fPptwQFYONrI',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '2mEkOZuQf4XKF7eo',
					),
					$client->photoSize(
						type : 'SBUtdK1ENkIz0qHy',
						w : 54,
						h : 15,
						size : 82,
					),
					$client->photoCachedSize(
						type : 'wxBV7NvoZ61LXKm9',
						w : 40,
						h : 73,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'f2m1XEpOlvcFGSKi',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'z2Xho8HuG1spJxPa',
						w : 69,
						h : 48,
						sizes : array(32),
					),
					$client->photoPathSize(
						type : 'nfcX58iYhSuJm2Db',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 100,
				thumb_version : 78,
				thumb_document_id : 4478915323943413361,
				count : 71,
				hash : 0,
			),
		),
	),
);
```