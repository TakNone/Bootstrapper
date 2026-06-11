# messages.myStickers

**Description** : *The list of stickersets owned by the current account &raquo;*

**Layer** : 227

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
	count : 89,
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
				installed_date : 3,
				id : -9002504371924754299,
				access_hash : 8407592995316330044,
				title : 'lMomLV4guJy3SUAB',
				short_name : 'pQ0kTbxOhl7Ss9If',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'fzR9GwnF7ZhAgH0P',
					),
					$client->photoSize(
						type : 'qYDo7wsGBZrUL3li',
						w : 30,
						h : 34,
						size : 6,
					),
					$client->photoCachedSize(
						type : 'LRnoAUe3HPbz21Wk',
						w : 21,
						h : 57,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : '6gKcvyLF8JmGYRTQ',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'bZ5xg9YE2mdFDSWG',
						w : 55,
						h : 62,
						sizes : array(37),
					),
					$client->photoPathSize(
						type : 'sW8ZvKUQDf0RSwMo',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 19,
				thumb_version : 54,
				thumb_document_id : 2822293383268263184,
				count : 7,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -6831205599717980311,
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
				installed_date : 66,
				id : 1437926370921827780,
				access_hash : 2506268368080743473,
				title : 'T8qA1nmgSZkGfRQ7',
				short_name : 'YyCDdItMk9AH34uF',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'jsP6BWaKEeuHwr8d',
					),
					$client->photoSize(
						type : 'F1j8zCg93rXGBSal',
						w : 38,
						h : 70,
						size : 86,
					),
					$client->photoCachedSize(
						type : 'zXUsC2TPNlYBc4AI',
						w : 29,
						h : 38,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'nZWegUfSRIywbc4m',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'gKRGbuQDHLvpBFV4',
						w : 98,
						h : 43,
						sizes : array(75),
					),
					$client->photoPathSize(
						type : 'Serou1kisqTQwFbX',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 89,
				thumb_version : 34,
				thumb_document_id : 3344344657256325142,
				count : 93,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -5818187538637529808,
				),
				$client->document(
					id : 4868796020276774472,
					access_hash : 1837988794052964151,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 35,
					mime_type : '4cpSXZCKHsNEVniv',
					size : 3085715049879163734,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'S3gk1v9ZnUewxI8L',
						),
						$client->photoSize(
							type : 'qtUZOoeNH7kxaBEJ',
							w : 15,
							h : 80,
							size : 23,
						),
						$client->photoCachedSize(
							type : 'v1yoUpuOwZagkce8',
							w : 57,
							h : 20,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'WImTNPBA2w3SksGX',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'aBiQwRkUmY5uP7o6',
							w : 100,
							h : 39,
							sizes : array(78),
						),
						$client->photoPathSize(
							type : 'o4Q91RPlAbLvUE7i',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'xQzoYNwSp7fdXZRu',
							w : 98,
							h : 71,
							size : 31,
							video_start_ts : 1273024.9814453125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 5983700430287657941,
							background_colors : array(87),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 7154750152876172997,
							background_colors : array(69),
						),
					),
					dc_id : 99,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 40,
							h : 56,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'Ulx9X3t8hMGWezfO',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -292602.1474609375,
							w : 27,
							h : 0,
							preload_prefix_size : 39,
							video_start_ts : 1219263.330078125,
							video_codec : '0nK6HcSakJbB7tUl',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 96,
							title : 'ME5jLPqw2Au1W3xd',
							performer : 'cbKe364UDvlXAPkY',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'P9vjW7Kcrbk2m8RJ',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'dLi8Qu2Wg1XHMJTE',
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
				installed_date : 19,
				id : 5740249055922658775,
				access_hash : 8386536160814618850,
				title : 'iK7MdQT2f0CGhFnR',
				short_name : 'BCqfeNoWZstjw5lz',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'f1BAk0Q4aLuZI3JV',
					),
					$client->photoSize(
						type : 'z1Ci2REcwhQp8ysV',
						w : 18,
						h : 5,
						size : 62,
					),
					$client->photoCachedSize(
						type : 'o2EXgkuIW47wBpUN',
						w : 91,
						h : 94,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'tfhgvFK2x8ZOR3Xj',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '5S9chfQ3NTUjyzI0',
						w : 68,
						h : 65,
						sizes : array(79),
					),
					$client->photoPathSize(
						type : 'kzHSIhwJ9lu2ARnV',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 57,
				thumb_version : 49,
				thumb_document_id : -7878768701600717348,
				count : 68,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'PobRNl6KprDxvGQg',
					documents : array(-2976621712712942233),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -1125493491800997371,
					keyword : array('Dhw7tHV0r8IsLybu'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -4198535894502971733,
				),
				$client->document(
					id : 8404868902764727599,
					access_hash : -8722672460093601298,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 24,
					mime_type : 'zTKwtvhyJmEbefkQ',
					size : 8180346385713254519,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'pJGqfZ9dHxVuPty6',
						),
						$client->photoSize(
							type : 'Sh06sMeZoV94EtQK',
							w : 82,
							h : 6,
							size : 40,
						),
						$client->photoCachedSize(
							type : 'q1QUzHaGpXNjfMcb',
							w : 93,
							h : 66,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'WXQzlv6oxMGwfVqO',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : '43gPdRunyiTIW1zv',
							w : 46,
							h : 70,
							sizes : array(48),
						),
						$client->photoPathSize(
							type : 'CyAbLmUNQI9DfEpT',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'YOdtm5yP3CNFWcK4',
							w : 56,
							h : 23,
							size : 25,
							video_start_ts : 402024.861328125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -255938426051593342,
							background_colors : array(10),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -8533077033274248982,
							background_colors : array(20),
						),
					),
					dc_id : 44,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 60,
							h : 39,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'clxCyNa6Me9PjTS1',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -966033.3310546875,
							w : 28,
							h : 56,
							preload_prefix_size : 84,
							video_start_ts : -131670.84765625,
							video_codec : 'xBoaGkTDLletwRi6',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 44,
							title : 'tPHh5clXKMzej3Vm',
							performer : 'PyjetcFUIpX5SQom',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'dAyV0ZQYHahMkxjX',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'FfSGLIopjDmsaQnY',
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
				installed_date : 39,
				id : -6163252117749416233,
				access_hash : 655865677045700030,
				title : '3jLTIGnaHzqd4K6i',
				short_name : 'k2WpM5DwcXzTmN7j',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'putr6kPaKDNjvgOx',
					),
					$client->photoSize(
						type : 'pLnq5vo98jeaAGFC',
						w : 73,
						h : 30,
						size : 97,
					),
					$client->photoCachedSize(
						type : 'x7mONSGf0cnZ2H31',
						w : 72,
						h : 59,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'S3rk1jEY50HPtnqZ',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'ydef2tGNrkjaXCz3',
						w : 18,
						h : 38,
						sizes : array(18),
					),
					$client->photoPathSize(
						type : 'n2epAfsu8cWaHIUB',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 26,
				thumb_version : 62,
				thumb_document_id : 8517447219608288559,
				count : 35,
				hash : 0,
			),
		),
	),
);
```