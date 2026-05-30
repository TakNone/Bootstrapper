# messages.stickerSetInstallResultArchive

**Description** : *The stickerset was installed, but since there are too many stickersets some were archived*

**Layer** : 225

```tl
messages.stickerSetInstallResultArchive#35e410a8 sets:Vector<StickerSetCovered> = messages.StickerSetInstallResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Archived stickersets |

---

## Type

[messages.StickerSetInstallResult](type/messages.StickerSetInstallResult)

---

## Example

```php
$messagesStickerSetInstallResult = $client->messages->stickerSetInstallResultArchive(
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
				installed_date : 44,
				id : -4045621442681195284,
				access_hash : -2213350716543131245,
				title : 'Sdpe8AtFhqoPbHiM',
				short_name : 'uHzcpmCVSo0rMN1Q',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '521ZEL6CO8Yub3Vj',
					),
					$client->photoSize(
						type : 'ulkHeVpKwB01sZtR',
						w : 20,
						h : 14,
						size : 81,
					),
					$client->photoCachedSize(
						type : 'x6etMDZwC4gIB2Go',
						w : 54,
						h : 14,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'yu80dG7e1ExBOLhM',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'HSLRzcQjkZfmqb5s',
						w : 46,
						h : 59,
						sizes : array(48),
					),
					$client->photoPathSize(
						type : 'lWmCFKdnBDSOxbEc',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 14,
				thumb_version : 38,
				thumb_document_id : 2030549621432227228,
				count : 74,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 2049454331367291313,
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
				installed_date : 89,
				id : -8280766924952251736,
				access_hash : -7088961638451913771,
				title : 'HFdZRKeAn2i3Qxz1',
				short_name : 'smZLq0JRoX3Gb1Aa',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '74jlEng6tLdkFaOr',
					),
					$client->photoSize(
						type : 'JU4o5lrMtYFkSED9',
						w : 62,
						h : 5,
						size : 78,
					),
					$client->photoCachedSize(
						type : 'q3rfDYRPIj6M4OSC',
						w : 37,
						h : 64,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'wBIk9hs8SAnHxV6M',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '1fJjR7gY6w82XT3n',
						w : 1,
						h : 54,
						sizes : array(84),
					),
					$client->photoPathSize(
						type : '2hnwZtomR5kpeNWg',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 26,
				thumb_version : 35,
				thumb_document_id : -934609214411230951,
				count : 24,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 8924180820596217056,
				),
				$client->document(
					id : 6475724113478575704,
					access_hash : -1498194622423508015,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 85,
					mime_type : '0KdPVo9GInwBc8ut',
					size : 963122817974974227,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'P9YGnIxDQo10j2mK',
						),
						$client->photoSize(
							type : 'lnm9TwYauD6XvKgS',
							w : 69,
							h : 0,
							size : 88,
						),
						$client->photoCachedSize(
							type : 'D1Mj38Q9bmh7BpCx',
							w : 85,
							h : 8,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'IuVQfLkKY5P6A7h4',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'xARbQqac0MlNyUZF',
							w : 84,
							h : 97,
							sizes : array(3),
						),
						$client->photoPathSize(
							type : 'xakRmZBXc3gKhls0',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'L5oJFXz7UqkWKCsf',
							w : 60,
							h : 58,
							size : 7,
							video_start_ts : 186605.2412109375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -6210382833751301351,
							background_colors : array(94),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 2509365430978624689,
							background_colors : array(96),
						),
					),
					dc_id : 38,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 35,
							h : 32,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'KY0CDe5cvoBjQWyp',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 644972.2216796875,
							w : 11,
							h : 19,
							preload_prefix_size : 9,
							video_start_ts : -2070685.759765625,
							video_codec : 'IUuvG4r1LYiNKmg9',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 27,
							title : 'XKFQVsD2lu7g4iLH',
							performer : 'HLqgPmNYhvXG0tC2',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : '02JV4qdrcLlIzMmv',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'I2PFHkiGWZg8eqMC',
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
				installed_date : 77,
				id : 2124577663189207545,
				access_hash : 2451557700252552992,
				title : 'gXi3DbKkQAn7t9R0',
				short_name : 'V7ET4iPFJlzK8Z9q',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'VE1mxwlHCIqTzo5X',
					),
					$client->photoSize(
						type : 'kcaH6pl3GsZISfUW',
						w : 78,
						h : 23,
						size : 47,
					),
					$client->photoCachedSize(
						type : '9axKdc2St0FjC1TN',
						w : 23,
						h : 19,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'xzsZcP1GWE0q3Y7j',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'iI2Ouxr7gnmGjC53',
						w : 54,
						h : 83,
						sizes : array(26),
					),
					$client->photoPathSize(
						type : 'fOJqNIYm6iVW8uEj',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 21,
				thumb_version : 18,
				thumb_document_id : -6189153096096900487,
				count : 14,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'UKF7ZbnE8wNqOxa2',
					documents : array(-3682374001553432054),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -7757621224912201194,
					keyword : array('39Jl2AWZeh0qbC8P'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 2067668158553600796,
				),
				$client->document(
					id : 2426928302709852790,
					access_hash : -7226416075282522640,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 19,
					mime_type : 'aThDg901elXvY8Pr',
					size : -8262245048347292053,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'wCurOJGmHIkKS71R',
						),
						$client->photoSize(
							type : 'Wer2wyHIvLzhutK3',
							w : 91,
							h : 8,
							size : 17,
						),
						$client->photoCachedSize(
							type : 'UK392vJuqfhTLPsr',
							w : 75,
							h : 63,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'SpYuo4ICFeEHqry3',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'tqToSXZLh7Qicr9W',
							w : 91,
							h : 98,
							sizes : array(30),
						),
						$client->photoPathSize(
							type : 'mPuCriYcnJDQz2bW',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'uVsNE1ZRdDOMmYq6',
							w : 78,
							h : 88,
							size : 30,
							video_start_ts : -259616.6240234375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 1746024847685807904,
							background_colors : array(37),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -3843057603228756538,
							background_colors : array(61),
						),
					),
					dc_id : 16,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 45,
							h : 96,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'LPEgCbnlRwq5uHpr',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1058315.6494140625,
							w : 0,
							h : 32,
							preload_prefix_size : 79,
							video_start_ts : 1043809.2548828125,
							video_codec : 'uahjFLGbIWOx5Po3',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 88,
							title : 'vjtPTQepEGdlmaCA',
							performer : 'R17JvBPFk069OELK',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'dh5ob6pOg9nKYli2',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'tzGnoOxU8fYl7NP1',
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
				installed_date : 84,
				id : 4821410470562190393,
				access_hash : -9223055891398988025,
				title : 'W43zcnLm6FpwNR8d',
				short_name : 'hxyuLeDj7KPJmZo1',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'MhT6gK7pA2nkxbPd',
					),
					$client->photoSize(
						type : 'tlNgveEAUjP9sDJq',
						w : 92,
						h : 51,
						size : 90,
					),
					$client->photoCachedSize(
						type : 'WSYZub2gFDXvwzhH',
						w : 98,
						h : 49,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'tR8HSxGC7YFEwhsA',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'ifPL2EAKM0aBXQzt',
						w : 76,
						h : 78,
						sizes : array(88),
					),
					$client->photoPathSize(
						type : 'ATSonL4MmXwzd3FV',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 60,
				thumb_version : 65,
				thumb_document_id : 7494794723933296812,
				count : 92,
				hash : 0,
			),
		),
	),
);
```