# messages.archivedStickers

**Description** : *Archived stickersets*

**Layer** : 222

```tl
messages.archivedStickers#4fcba9c8 count:int sets:Vector<StickerSetCovered> = messages.ArchivedStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Number of archived stickers |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Archived stickersets |

---

## Type

[messages.ArchivedStickers](type/messages.ArchivedStickers)

---

## Example

```php
$messagesArchivedStickers = $client->messages->archivedStickers(
	count : 13,
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
				installed_date : 45,
				id : -2077377115670615703,
				access_hash : -2276160880407806020,
				title : 'bYN0jfdG6FucDpvw',
				short_name : 'ECwKpIfaOhlSsxPe',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'R860ITiKVLOQGJab',
					),
					$client->photoSize(
						type : '4nL0NImR5Ff87XuS',
						w : 62,
						h : 12,
						size : 40,
					),
					$client->photoCachedSize(
						type : 'PmfiGokCa9X7H5Ep',
						w : 20,
						h : 61,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'khS29RMK76FgCA1I',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'A0BiVLDyhw3u8NMT',
						w : 8,
						h : 25,
						sizes : array(78),
					),
					$client->photoPathSize(
						type : 'hk9rNf6v2bpB3eLQ',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 93,
				thumb_version : 70,
				thumb_document_id : 780301307566398971,
				count : 4,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -5166219835405052094,
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
				installed_date : 10,
				id : 9123636781993265688,
				access_hash : 5045067122145300324,
				title : 'rhzp1Z3tswqa8i9D',
				short_name : 'aLminoMJNVzHdhl4',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'FYhUKste6ZV0iOdx',
					),
					$client->photoSize(
						type : 'HJpoKu629YrIEX5D',
						w : 83,
						h : 67,
						size : 57,
					),
					$client->photoCachedSize(
						type : 'CunVOA02tclj9peN',
						w : 39,
						h : 55,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'Pwvc1WO2BD578AYl',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'lXHth9NsnaobZ2BV',
						w : 77,
						h : 21,
						sizes : array(11),
					),
					$client->photoPathSize(
						type : 'fobFwGyvhLaQiCsS',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 75,
				thumb_version : 78,
				thumb_document_id : 9134812786325097346,
				count : 81,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 3540671213427143140,
				),
				$client->document(
					id : -8454958866966881788,
					access_hash : -4370604566493689521,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 67,
					mime_type : '9MqUKkVwWX8PmCZN',
					size : 6966947133683768185,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'CHUiZjTGDnQhBAEz',
						),
						$client->photoSize(
							type : '7hcOUWZzSL8dqGAk',
							w : 77,
							h : 75,
							size : 53,
						),
						$client->photoCachedSize(
							type : 'AU5VoXQsT46pKC0B',
							w : 7,
							h : 0,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'i1YoKs0mDwU5AjG6',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'GEteb2oPMSCnx8uk',
							w : 14,
							h : 81,
							sizes : array(52),
						),
						$client->photoPathSize(
							type : 'dUX62waDkMHAelG0',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'nzYHLdI6PlcxBphT',
							w : 15,
							h : 9,
							size : 44,
							video_start_ts : 1160390.4619140625,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 2806284515972026813,
							background_colors : array(66),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -4979847612648929257,
							background_colors : array(67),
						),
					),
					dc_id : 7,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 59,
							h : 63,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'VBzIWAaX81dcq7Ow',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 303093.16015625,
							w : 61,
							h : 67,
							preload_prefix_size : 89,
							video_start_ts : -1075214.1376953125,
							video_codec : '8AuGq9UVlx4KnMRb',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 32,
							title : 'nhlCIGRtg6Yaojz2',
							performer : 'vYUmLKdri613PRZV',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'TPcD69fn2bUSlO3V',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'H05B39kMUFlnQpfN',
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
				installed_date : 5,
				id : 3159565754695854167,
				access_hash : -1685064274535957397,
				title : 'Mxsh3ZCS7J684j2N',
				short_name : '5OcZGXJyTQ1K6qal',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'RINbwO54vXoWVBsg',
					),
					$client->photoSize(
						type : 'ugqorNh2Ue0QSz57',
						w : 23,
						h : 7,
						size : 24,
					),
					$client->photoCachedSize(
						type : 'kusW9zBUomcnVyQt',
						w : 80,
						h : 66,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : '4jCIFAZLvobnhExR',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'Xxgb81PBeDZ5CwOJ',
						w : 10,
						h : 74,
						sizes : array(79),
					),
					$client->photoPathSize(
						type : '5yKt810R4q2jlaxY',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 59,
				thumb_version : 21,
				thumb_document_id : -7047301894907075731,
				count : 34,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'qxBQcvMzlPGdtwjO',
					documents : array(6589389287273818427),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 7729609583015000161,
					keyword : array('d4oALDBPbV3tFGcp'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -1016002649525550656,
				),
				$client->document(
					id : -3794235050127405311,
					access_hash : -1619547800227865590,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 100,
					mime_type : 'iDJautqKZ9EHFfgr',
					size : 1545340681214527483,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'mfKbShcutEqajBel',
						),
						$client->photoSize(
							type : '01GpxOjQlwm3BTVA',
							w : 31,
							h : 56,
							size : 71,
						),
						$client->photoCachedSize(
							type : 'AKbnfuF5NLtieokr',
							w : 27,
							h : 16,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'P0pqecTtQrVw1UGD',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : '458P7clQKxLWdbeS',
							w : 33,
							h : 19,
							sizes : array(56),
						),
						$client->photoPathSize(
							type : '7gG6zB9OfL1eNukK',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'ox2netECRLzr3ZGg',
							w : 25,
							h : 91,
							size : 22,
							video_start_ts : -1648461.2392578125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -4003705863114290293,
							background_colors : array(73),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 8171441595860849472,
							background_colors : array(90),
						),
					),
					dc_id : 50,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 11,
							h : 70,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'Z4xPYETCKoqILlpb',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 2061340.8603515625,
							w : 24,
							h : 58,
							preload_prefix_size : 78,
							video_start_ts : -1074135.728515625,
							video_codec : 'XLIfRgJAvCH9Wb3x',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 46,
							title : 'ijP34vRZezQUOn9c',
							performer : 'kuot0JfazmvFgisw',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'BQr7KyEn3fpc2XVj',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : '8EA1K7VvgpdiexCZ',
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
				installed_date : 36,
				id : 3003408317745521538,
				access_hash : -520730221666778930,
				title : 'EQSVFeZoCX3k9JgT',
				short_name : 'KoRr8QpxnWwyzdaM',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'b0HW5cRhFUk8YlOA',
					),
					$client->photoSize(
						type : 'BTQdtjE8eAwGXf12',
						w : 22,
						h : 42,
						size : 8,
					),
					$client->photoCachedSize(
						type : 'WPINcAl35yB1gw7z',
						w : 80,
						h : 98,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'L53ae2QuPS4yT6Rq',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'v9siAyhZ2aIn8H4D',
						w : 25,
						h : 83,
						sizes : array(74),
					),
					$client->photoPathSize(
						type : 'azdwe8qVoSFvTnEH',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 38,
				thumb_version : 18,
				thumb_document_id : -8974840635704630175,
				count : 42,
				hash : 0,
			),
		),
	),
);
```