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
				installed_date : 88,
				id : 1085049376710162445,
				access_hash : 9093084826798259033,
				title : 'OPTCqcexjvKXoAb0',
				short_name : 'pbPR8XIwd0qng2QC',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'kYTbMFaAnEzDpqC3',
					),
					$client->photoSize(
						type : 'FrKJazygoV5b1fjN',
						w : 12,
						h : 10,
						size : 13,
					),
					$client->photoCachedSize(
						type : 'cl6Fw5TyKOVk3AJB',
						w : 68,
						h : 1,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'qarweOJEGxkSmH25',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'qsRQhNnYTtcGI2E4',
						w : 22,
						h : 77,
						sizes : array(85),
					),
					$client->photoPathSize(
						type : 'MiHnt4R9TLFJak68',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 58,
				thumb_version : 75,
				thumb_document_id : -1347380550860198996,
				count : 78,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -3986851673238545317,
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
				installed_date : 56,
				id : -582869303111179573,
				access_hash : -331360038625242248,
				title : 'bLh4NFHdepkjo9PR',
				short_name : 'M2KWTsYhibVlZSFn',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'qJEv5zj8GcuZp0WF',
					),
					$client->photoSize(
						type : '5mqYjyUulpkR28ED',
						w : 11,
						h : 69,
						size : 35,
					),
					$client->photoCachedSize(
						type : 'Y076XdJbPDmt8eSc',
						w : 88,
						h : 4,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'lmqP4xLUAvn1kTab',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'T3Ohvc75u4jAHebP',
						w : 26,
						h : 86,
						sizes : array(26),
					),
					$client->photoPathSize(
						type : 'MK58Pdm1o9jweVbx',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 71,
				thumb_version : 47,
				thumb_document_id : 3692909632937607746,
				count : 41,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -7885356746333479224,
				),
				$client->document(
					id : 1957850263087104422,
					access_hash : -7331811110703250940,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 3,
					mime_type : '4oUJcOVrxvtfq85l',
					size : -2110879585766851351,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'OqZeoANM2HY3KvXm',
						),
						$client->photoSize(
							type : 'R2TSl9a6FdqZNoPV',
							w : 62,
							h : 43,
							size : 25,
						),
						$client->photoCachedSize(
							type : 'U5ZQi0vrIp8hzOWm',
							w : 92,
							h : 22,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'nXhfsY4qxo83eUP9',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : '4TH6dkAeYpC52Wja',
							w : 14,
							h : 10,
							sizes : array(59),
						),
						$client->photoPathSize(
							type : 'S3bHiJvexpRzL8WD',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : '5trLyRDUCQhfzujb',
							w : 61,
							h : 20,
							size : 13,
							video_start_ts : -1887481.5478515625,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -3151121976628138238,
							background_colors : array(81),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -6354006872773289817,
							background_colors : array(87),
						),
					),
					dc_id : 46,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 30,
							h : 24,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'CBmOv4uNLjqJzk29',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 922828.357421875,
							w : 84,
							h : 91,
							preload_prefix_size : 85,
							video_start_ts : 759858.27734375,
							video_codec : 'wf8pHXqd3VmNPYMW',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 26,
							title : '8yVNotuJks4f2DUE',
							performer : 'GV3csBmxNbjizPlo',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'JHig3ILuWA4PXOdl',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'lOF42yshBVWQYcTG',
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
				installed_date : 65,
				id : -2804773559733235925,
				access_hash : 3944888929754970291,
				title : 'P9K6xj7VRDFoM5Y2',
				short_name : 'nsBMKCuq6ZDeXtzi',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'wJ1n6bfCZGcXhIBv',
					),
					$client->photoSize(
						type : '13qmFSNpo0gY7IHV',
						w : 92,
						h : 83,
						size : 38,
					),
					$client->photoCachedSize(
						type : 'K91XTca5Hyt6Cjzq',
						w : 19,
						h : 55,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'CkIpXAZ6vM4d1a5i',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'Yy4udCzpnJr7S1eg',
						w : 60,
						h : 68,
						sizes : array(72),
					),
					$client->photoPathSize(
						type : '1ehrVuQoOjAKca0v',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 36,
				thumb_version : 96,
				thumb_document_id : 4424715382494578273,
				count : 97,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : '6zxehrv7OmuwUSEK',
					documents : array(-5949524149795609435),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -4992931201024808473,
					keyword : array('gTNRtbe3J8o9zCvx'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -2303188802064839321,
				),
				$client->document(
					id : -2752682640161894213,
					access_hash : 3310767675384277160,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 70,
					mime_type : '5HPcgmpaSIMxqY8V',
					size : 9212212839613183329,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'dByl5Lb3Rgv1iSq8',
						),
						$client->photoSize(
							type : 'YbU315KiO4anEpsr',
							w : 46,
							h : 25,
							size : 25,
						),
						$client->photoCachedSize(
							type : 'HxqblYQPumLRAkfF',
							w : 53,
							h : 52,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'IS7wBelWzDdo0yQ2',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'qdLVYoOsT5tk9eKf',
							w : 77,
							h : 65,
							sizes : array(35),
						),
						$client->photoPathSize(
							type : 'stSMVUrgdGn7Eo3k',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : '1nHr0SOU7qPIgavj',
							w : 38,
							h : 1,
							size : 9,
							video_start_ts : 368113.0908203125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 6905544291184075147,
							background_colors : array(22),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 3871669656972857591,
							background_colors : array(56),
						),
					),
					dc_id : 81,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 73,
							h : 76,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'sV6yNM0rc3Qun8Jo',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 2016500.8779296875,
							w : 61,
							h : 73,
							preload_prefix_size : 69,
							video_start_ts : 1890244.4033203125,
							video_codec : '0aYtzrU81Xhbif2e',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 22,
							title : 'P7tfsc8OEADdg4oa',
							performer : 'tOqk4UFfh28oKPZV',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'kxzLoyY30nQqGb6g',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : '7TplrCuSFmEIOzKB',
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
				installed_date : 69,
				id : -804426438744272540,
				access_hash : 4720780086546220239,
				title : '6v1475sFWuXQoe2L',
				short_name : 'bmYIetZgHVMNFpB1',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'J64iEOlxcKromCWQ',
					),
					$client->photoSize(
						type : 'snBhdVDboyXck0W3',
						w : 45,
						h : 84,
						size : 22,
					),
					$client->photoCachedSize(
						type : 'qZO0K6g8zDTN5sA2',
						w : 46,
						h : 83,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'b6TyPLMwNphGDYmW',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'tuA2F5JDKgXxPz3Q',
						w : 36,
						h : 72,
						sizes : array(76),
					),
					$client->photoPathSize(
						type : 'RwQNV25mtMno4TvW',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 54,
				thumb_version : 56,
				thumb_document_id : 224565826956058210,
				count : 31,
				hash : 0,
			),
		),
	),
);
```