# messages.myStickers

**Description** : *The list of stickersets owned by the current account &raquo;*

**Layer** : 233

```tl
messages.myStickers#faff629d count:int sets:Vector<StickerSetCovered> = messages.MyStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of owned stickersets |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Stickersets |

---

## Type

[messages.MyStickers](type/messages.MyStickers)

---

## Example

```php
$messagesMyStickers = $client->messages->myStickers(
	count : 9,
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
				installed_date : 48,
				id : -2669465455832703180,
				access_hash : 2315068253577066843,
				title : 'ajGIY5TZtkDH8qzN',
				short_name : 'ftUVz9PlLOAD5Suv',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '2b5weuskCUBtVNK1',
					),
					$client->photoSize(
						type : '4UbzWNO2MEsiS3R6',
						w : 40,
						h : 51,
						size : 19,
					),
					$client->photoCachedSize(
						type : 'mZoOiRuXjfSpUbHJ',
						w : 82,
						h : 35,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'XTreHjM9OftUvB8g',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'QCLm7RqrOGIiMWnK',
						w : 7,
						h : 32,
						sizes : array(16),
					),
					$client->photoPathSize(
						type : 'c84mCGYBtuSebwlZ',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 95,
				thumb_version : 45,
				thumb_document_id : 445094883419832413,
				count : 47,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 8398958111314029704,
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
				installed_date : 12,
				id : -2462442689121543762,
				access_hash : -8166823845933053228,
				title : 'qWyHPIGThXoJE5MS',
				short_name : '9kzMs1TmRqndFLwv',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'tg4E9LcTDbk0WeyB',
					),
					$client->photoSize(
						type : 'r5A2DCXtWHvZSg8z',
						w : 88,
						h : 85,
						size : 20,
					),
					$client->photoCachedSize(
						type : 'kcUINPiG6s4rlzbE',
						w : 80,
						h : 16,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'ATPQYy7xvbpCSNmn',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'cZzHK5oDy6FLiOPT',
						w : 66,
						h : 29,
						sizes : array(51),
					),
					$client->photoPathSize(
						type : 'bPTZhWH5NpA0RyYU',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 69,
				thumb_version : 21,
				thumb_document_id : -2538807557072700826,
				count : 42,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 3956054301129539742,
				),
				$client->document(
					id : -1269121601551295266,
					access_hash : -5999378901271883787,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 13,
					mime_type : 'YaR24ZsvKhL0yCDi',
					size : 2536410427403122447,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'jUXxlCDb5QPceAJ0',
						),
						$client->photoSize(
							type : 'zmOSpLVKU08NiHaP',
							w : 71,
							h : 83,
							size : 37,
						),
						$client->photoCachedSize(
							type : 'sdJntRVxO9rSXf50',
							w : 45,
							h : 15,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'AjB2te70OQvlGPYi',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'FAbJS2eRmz6rGhPg',
							w : 66,
							h : 30,
							sizes : array(2),
						),
						$client->photoPathSize(
							type : 'HMYXB8NnKFVj7ZQi',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'fAKz0c1qgWXsBMQ8',
							w : 5,
							h : 91,
							size : 5,
							video_start_ts : 515438.5625,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -6681600637322312487,
							background_colors : array(81),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -1803648005120203856,
							background_colors : array(12),
						),
					),
					dc_id : 2,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 98,
							h : 23,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'va7UgwVZPcQMKNpo',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 206513.4375,
							w : 81,
							h : 79,
							preload_prefix_size : 89,
							video_start_ts : 778593.8447265625,
							video_codec : 'TlRKaXNAmrynfks7',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 41,
							title : 'uFqRsCpcLQxEO3nI',
							performer : 'UolS0DCcIzYQdH1N',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : '97Uo4zcr8e3AH1xP',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'd47krnJCsO23oItF',
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
				installed_date : 71,
				id : 3553865448621383964,
				access_hash : 8349598214435588903,
				title : 'iwHILQt2XR0Zq4nG',
				short_name : 'VG2C45L69orUvASJ',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'sT38wh19HjImpNZ5',
					),
					$client->photoSize(
						type : 'pH6MsjDlOFngBhXx',
						w : 76,
						h : 45,
						size : 46,
					),
					$client->photoCachedSize(
						type : 'Ms9NPaydpb6tSvEn',
						w : 83,
						h : 42,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : '9mLYncjoWTBH3Uax',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'Th5vLGs4Q2ISoC60',
						w : 93,
						h : 57,
						sizes : array(7),
					),
					$client->photoPathSize(
						type : 'ZlxjnWw9OUKfcrVs',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 22,
				thumb_version : 56,
				thumb_document_id : -1544193243525880497,
				count : 70,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : '8fNB4UCGnciIKrxd',
					documents : array(5155365645132278036),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 3392003613381575343,
					keyword : array('g7BjR9s4rwuyTzxP'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -3798696939265780862,
				),
				$client->document(
					id : 1091969081746787041,
					access_hash : 7930337301307230952,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 91,
					mime_type : 'UBuEyns6DapMvO1d',
					size : 376249005981544905,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'a2EWs3r1Gq4m7nRV',
						),
						$client->photoSize(
							type : 'QAWHZ4BXVqgrGf59',
							w : 46,
							h : 81,
							size : 6,
						),
						$client->photoCachedSize(
							type : 'kdOLAEMzJQgsCa5N',
							w : 74,
							h : 4,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : '14eXgu9jZxBUGAWy',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'Cz6Zio5tRwa1YIUW',
							w : 61,
							h : 14,
							sizes : array(44),
						),
						$client->photoPathSize(
							type : 'sjgQVkGe0UA9R7pE',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'RMoK6VJzuArx709I',
							w : 73,
							h : 65,
							size : 54,
							video_start_ts : 362910.017578125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 7052927908075155123,
							background_colors : array(89),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -1482876592192435497,
							background_colors : array(86),
						),
					),
					dc_id : 26,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 75,
							h : 33,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'nG5olihWrd9IxYsu',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -1662739.5927734375,
							w : 50,
							h : 24,
							preload_prefix_size : 68,
							video_start_ts : 2048762.9013671875,
							video_codec : 'R2l679owv8nLs4yB',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 77,
							title : '19HsoZu0ThgwMOeb',
							performer : 'QB3FGHNhqcDuov5g',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'LuEaMUDiOcFG7qB9',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : '5EPNrlRKcD8uHy7g',
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
				installed_date : 18,
				id : 4714083319259517150,
				access_hash : -167663638495316382,
				title : 'MZsKjWc1BTykL8lw',
				short_name : 'NWeLI4ac7wFjgzER',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'iRu7SPts9Jm4IjFL',
					),
					$client->photoSize(
						type : 'xJqMFWpHX96afjsG',
						w : 12,
						h : 50,
						size : 37,
					),
					$client->photoCachedSize(
						type : 'Vd0oMFZr9U2xYAD8',
						w : 17,
						h : 52,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'pF75imbgRUWEwzsY',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'NMleg0FVUD68TO3q',
						w : 90,
						h : 97,
						sizes : array(100),
					),
					$client->photoPathSize(
						type : 'rgEnY0pOtu72BdwP',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 26,
				thumb_version : 72,
				thumb_document_id : -2899671721451181369,
				count : 44,
				hash : 0,
			),
		),
	),
);
```