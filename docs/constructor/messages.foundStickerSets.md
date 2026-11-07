# messages.foundStickerSets

**Description** : *Found stickersets*

**Layer** : 233

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
				installed_date : 24,
				id : -2522514701574076636,
				access_hash : -7198573533233882232,
				title : 'DLuT4w5hbriR7Ajk',
				short_name : '9uH2FcLPGODUB1Kh',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'b3sVedZixohznLEc',
					),
					$client->photoSize(
						type : 'rLNUEVtk3DCpdXHo',
						w : 59,
						h : 95,
						size : 77,
					),
					$client->photoCachedSize(
						type : 'VvG4nYqWsEgJQo6y',
						w : 42,
						h : 37,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'HjrUP215J83SDXzA',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'xceO2i4INFayCKHX',
						w : 22,
						h : 96,
						sizes : array(94),
					),
					$client->photoPathSize(
						type : 'J36IpBl9acSknuAM',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 14,
				thumb_version : 54,
				thumb_document_id : 8022790992264105069,
				count : 36,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 7131262178500234399,
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
				installed_date : 53,
				id : -7514912500684051005,
				access_hash : -3747941057200518416,
				title : 'TxwpS1ZFydveHal2',
				short_name : 'zUYTpqLog3tEdvxj',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'sQrgVdNPGvRlMo1I',
					),
					$client->photoSize(
						type : 'K1SkBAOFhaHy8zMp',
						w : 65,
						h : 78,
						size : 26,
					),
					$client->photoCachedSize(
						type : 'VuOCW0eEtiAhXyFc',
						w : 9,
						h : 14,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : '28ipOzrDvcJIwUNF',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'zCQD6JVmoBIx4fHZ',
						w : 57,
						h : 72,
						sizes : array(73),
					),
					$client->photoPathSize(
						type : 'SOQetKkYn4Fa3hPs',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 98,
				thumb_version : 73,
				thumb_document_id : 258014482055371363,
				count : 31,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -873589750399209739,
				),
				$client->document(
					id : 7405332232723226163,
					access_hash : 584217893953334371,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 77,
					mime_type : '9dlrwX5QMGtYBHNC',
					size : -5286488569313385375,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'YWbwxl7mQ9S0uPL6',
						),
						$client->photoSize(
							type : 'CwoBHG9SV85uks1N',
							w : 81,
							h : 92,
							size : 81,
						),
						$client->photoCachedSize(
							type : '2v4Q0xqBlhnJdHjG',
							w : 6,
							h : 74,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : '7WkTR2Zw1KdFcgnb',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : '4WuXvEql3BejOAzt',
							w : 42,
							h : 2,
							sizes : array(38),
						),
						$client->photoPathSize(
							type : 'mEDnoCavsLNrGhbI',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'eUt7W8JEA2TFk1PI',
							w : 36,
							h : 98,
							size : 15,
							video_start_ts : -1990572.0439453125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 4817099065252593732,
							background_colors : array(91),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 7157182564300715585,
							background_colors : array(52),
						),
					),
					dc_id : 27,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 89,
							h : 32,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'TFLwMPOdob9JHg7Q',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1559452.6357421875,
							w : 82,
							h : 40,
							preload_prefix_size : 64,
							video_start_ts : -2076800.568359375,
							video_codec : 'sn5h2yYFv7GBtUc6',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 63,
							title : 'xYJgmXM1H5kFRvjT',
							performer : 'wcSQ4oO5lNKj9IBT',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'cETQNDXWqkPKploO',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : '3wqavTV0J6yQWrlg',
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
				installed_date : 39,
				id : -4476697040661843395,
				access_hash : -44635632897168266,
				title : 'WMA0CNJqRLoD4EXd',
				short_name : 'tay2jrIVSZABk9On',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '9mehDrkfKMJjX2R4',
					),
					$client->photoSize(
						type : 'wGEgnTcUQXvLfa2C',
						w : 24,
						h : 26,
						size : 82,
					),
					$client->photoCachedSize(
						type : '312Ecx8mHA6uyTPU',
						w : 52,
						h : 29,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'FXS9aBqMhnxel0UH',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'Vcrh8HvNyMdFjJaI',
						w : 55,
						h : 92,
						sizes : array(81),
					),
					$client->photoPathSize(
						type : 'SEL9evKhO3zyYJGR',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 61,
				thumb_version : 82,
				thumb_document_id : -5405536309284787196,
				count : 4,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'eAncvzd3DxS0F1CX',
					documents : array(2610655070648599922),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -6490778061598259696,
					keyword : array('3WQD9nlFIG6tkvrg'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 5043759281201196452,
				),
				$client->document(
					id : -4164080288891104924,
					access_hash : -5433338979259104550,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 99,
					mime_type : 'hqsmZWepObNc82go',
					size : 647629957185619610,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'HpKyhmCX2GTPAb1n',
						),
						$client->photoSize(
							type : 'TQIZOxLSUhKsY9ai',
							w : 14,
							h : 26,
							size : 17,
						),
						$client->photoCachedSize(
							type : 'KPs18o3pfaweuDzd',
							w : 99,
							h : 11,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'mtar6vnYupiG7WOQ',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'grliJ1ky6oKFsEtz',
							w : 5,
							h : 77,
							sizes : array(42),
						),
						$client->photoPathSize(
							type : 'gfIOEZ3dzk7Uqx6V',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'EbIUuDna4LN9XMwd',
							w : 95,
							h : 18,
							size : 23,
							video_start_ts : -563011.1708984375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -373535296880373758,
							background_colors : array(55),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 7663237341610850589,
							background_colors : array(4),
						),
					),
					dc_id : 53,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 82,
							h : 0,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : '5Qd8aiTODCXMEKUs',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -517398.126953125,
							w : 80,
							h : 15,
							preload_prefix_size : 18,
							video_start_ts : 149150.2109375,
							video_codec : 'GsEw3RWrdhg5Lt0V',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 8,
							title : 'Z0HdwLjimabCy2nB',
							performer : 'V2Y6Tdarqxeby3mc',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'MrlTsP6hbaDRzgn4',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'qTKIexfV6hsp9zEk',
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
				installed_date : 7,
				id : 6469063520200150530,
				access_hash : 3416978888207609222,
				title : 's6D30YmQFhTPalNk',
				short_name : 'EexIAGZQDBf7uzON',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'dXUwhH2CEleKoL8c',
					),
					$client->photoSize(
						type : 'OD5yAP7VWldCaZR8',
						w : 63,
						h : 98,
						size : 82,
					),
					$client->photoCachedSize(
						type : 'iCdFq1LXwNVkmtAa',
						w : 73,
						h : 93,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'VKqGu4yZvpbImBQj',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'YbN5eQk7sWlFyv8i',
						w : 86,
						h : 7,
						sizes : array(23),
					),
					$client->photoPathSize(
						type : 'Iu8yHfS1PQvKX5dq',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 35,
				thumb_version : 19,
				thumb_document_id : -8761313383591651529,
				count : 35,
				hash : 0,
			),
		),
	),
);
```