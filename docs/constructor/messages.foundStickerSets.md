# messages.foundStickerSets

**Description** : *Found stickersets*

**Layer** : 227

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
				installed_date : 66,
				id : -4895211398195435214,
				access_hash : -6111093669178108642,
				title : 'kQHCB2ohx4ySjPR3',
				short_name : 'PnsfIA3vQ5XqLW8j',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'ybT3POqhJY8miRAx',
					),
					$client->photoSize(
						type : '9zMQSDuZ4KOjfUn7',
						w : 62,
						h : 92,
						size : 28,
					),
					$client->photoCachedSize(
						type : 'G06WYPjyXVULQHxM',
						w : 25,
						h : 78,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'HasqEc9r4V7CheGJ',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'bQ8lsFJVUfDOM73N',
						w : 28,
						h : 75,
						sizes : array(83),
					),
					$client->photoPathSize(
						type : 'IPzawS8d5HFco26n',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 19,
				thumb_version : 94,
				thumb_document_id : 4147490004686864238,
				count : 7,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -992106840832375511,
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
				installed_date : 55,
				id : 765489435060290185,
				access_hash : 5983292186816512532,
				title : 'sQgut53AX64lSxDc',
				short_name : 'YeMf6t3gFrJdWwCD',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'DzgWoJbCmSryXsxf',
					),
					$client->photoSize(
						type : 'E6ZHo47LxseIndkQ',
						w : 1,
						h : 34,
						size : 85,
					),
					$client->photoCachedSize(
						type : 'tQTgGY68BSmbqPV5',
						w : 14,
						h : 28,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'ALd6ZNJTnRP4l27e',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'gzavZ6oAHN1DYTnL',
						w : 48,
						h : 39,
						sizes : array(82),
					),
					$client->photoPathSize(
						type : 'hRs3iW9xc0z52wbm',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 72,
				thumb_version : 84,
				thumb_document_id : -2998353115302645387,
				count : 54,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -8715005497301296913,
				),
				$client->document(
					id : -8270122379309152037,
					access_hash : -1168839957648949185,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 30,
					mime_type : 'aGqUWiM9cL4eNy6O',
					size : -5659328005307515709,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'xYkteTWf9rSLUv2C',
						),
						$client->photoSize(
							type : 'xmklbDvjAyMYFogT',
							w : 52,
							h : 40,
							size : 26,
						),
						$client->photoCachedSize(
							type : 'V54dSgL28nAGZfer',
							w : 8,
							h : 31,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'aBXpYew8FbcyflQ5',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'jGE85LaMwZBzyXFO',
							w : 48,
							h : 84,
							sizes : array(6),
						),
						$client->photoPathSize(
							type : 'ixuMALRrbZk8nEcw',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'JARKc082Y6B3Noph',
							w : 37,
							h : 74,
							size : 77,
							video_start_ts : 716884.3720703125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -3140166234423996688,
							background_colors : array(68),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 6159316143433469494,
							background_colors : array(87),
						),
					),
					dc_id : 21,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 74,
							h : 87,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'xnvBPrpFWokRdyba',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 716593.4501953125,
							w : 69,
							h : 3,
							preload_prefix_size : 19,
							video_start_ts : -269596.0029296875,
							video_codec : 'SORsypcaPQrYGviT',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 37,
							title : 'IZKtQ0RrBXLeON3Y',
							performer : 'dhPYTpcFe2I6gR1X',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : '3jzB07lZkpghtqXe',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : '84lpEyvMYRWnBf0j',
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
				installed_date : 79,
				id : 6096303174787302432,
				access_hash : 1851506862119888286,
				title : 'W6v7HonRCP8O21yY',
				short_name : 'UrLf0Qs9q1Pnd8Ji',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'KOWz6gqr8HemSDwZ',
					),
					$client->photoSize(
						type : 'Yc623AdtouTJBeKp',
						w : 13,
						h : 69,
						size : 51,
					),
					$client->photoCachedSize(
						type : 'PM8FVjgnDkhdGXwf',
						w : 11,
						h : 99,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : '7z9FYk8OHd4jeXGT',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'eyAoaExvT5WOYV9S',
						w : 64,
						h : 64,
						sizes : array(77),
					),
					$client->photoPathSize(
						type : 'sbKBtlyf6ZGU8SAJ',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 23,
				thumb_version : 65,
				thumb_document_id : -2788405989538255615,
				count : 6,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'NpyxO4g6jYQCrDB7',
					documents : array(4922802908110140053),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 8076546246979143824,
					keyword : array('YuACGowE94BH3b7t'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -7596565121131131348,
				),
				$client->document(
					id : -8369231906621457877,
					access_hash : -2785709889299628281,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 9,
					mime_type : 'lcRqXAMa5IjkoCmW',
					size : -4842758900394739484,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'Xj9KdnPuvtrTZo4U',
						),
						$client->photoSize(
							type : 'L1FSBvR8dY4gwZHp',
							w : 34,
							h : 30,
							size : 13,
						),
						$client->photoCachedSize(
							type : 'ARYICL28sJWPB74H',
							w : 84,
							h : 23,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'U27ktuINLigjfQmD',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : '2FmtuRai0JUQXVCn',
							w : 34,
							h : 9,
							sizes : array(65),
						),
						$client->photoPathSize(
							type : 'r0TIQ15ObsZBCp8A',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'GOnu3SdXBVrtpbsx',
							w : 77,
							h : 86,
							size : 45,
							video_start_ts : -1171313.1826171875,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -4723894488071611966,
							background_colors : array(39),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 7580874950968205910,
							background_colors : array(3),
						),
					),
					dc_id : 28,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 19,
							h : 87,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : '8jIQm0YRsXtDoPBr',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1551669.7294921875,
							w : 80,
							h : 72,
							preload_prefix_size : 55,
							video_start_ts : 117373.7158203125,
							video_codec : 'QeWCK3v9g7PmFk2x',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 97,
							title : 'qxvgAZBCFP52jUE3',
							performer : '13rMbR8AHWn7i62t',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'HTIxPRgsvlVDfu9J',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'rF0VuqdwKJZnQ3GY',
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
				installed_date : 45,
				id : 3997077549330274325,
				access_hash : -2528850562452543029,
				title : 'fh5EPQFIL1rydBRq',
				short_name : 'uWlX3j2sGIgAZTVL',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'yVEmkMcxDfhd9Xae',
					),
					$client->photoSize(
						type : 'SKp7gtoncY6I9sZC',
						w : 90,
						h : 41,
						size : 52,
					),
					$client->photoCachedSize(
						type : 'QjycmYV9XiCW6zPS',
						w : 66,
						h : 10,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'g21u6spi9YwXUxSH',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'vZDT6bYtXSwoWc72',
						w : 6,
						h : 0,
						sizes : array(75),
					),
					$client->photoPathSize(
						type : 'KGSjsomV2dhTQ0Rk',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 50,
				thumb_version : 23,
				thumb_document_id : -7560544293078413854,
				count : 28,
				hash : 0,
			),
		),
	),
);
```