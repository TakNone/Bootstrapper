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
	count : 79,
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
				installed_date : 34,
				id : -5986724364133446402,
				access_hash : 4079292465451913674,
				title : 'C5NnUZMQWD0Tk4jY',
				short_name : 'D01l72mWyJo8aneN',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'xHfQoeR5q2wGyWdU',
					),
					$client->photoSize(
						type : 'MsIySaUOrnRGzwkE',
						w : 57,
						h : 46,
						size : 70,
					),
					$client->photoCachedSize(
						type : 'NL87WXdIwjb6SVtc',
						w : 16,
						h : 42,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'pnXNwbgR0PYiV835',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'vD0mY8CQxwhcVisE',
						w : 2,
						h : 97,
						sizes : array(39),
					),
					$client->photoPathSize(
						type : '6qGfxWa71lARy2DT',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 65,
				thumb_version : 48,
				thumb_document_id : -2040108974514257175,
				count : 95,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -5680963466540759181,
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
				installed_date : 9,
				id : 1111992895746171638,
				access_hash : 4853204422492893445,
				title : 'qWfis9IZNjxC8zcm',
				short_name : '5UXlRhgBeQ8PLMSD',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'j9ew6JMAbS70yRGC',
					),
					$client->photoSize(
						type : 'oz8H9x4UtF2yk0qT',
						w : 100,
						h : 0,
						size : 51,
					),
					$client->photoCachedSize(
						type : 'DLHS4Tw5O8oPKGC1',
						w : 80,
						h : 96,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'p5LyzbZBoJedsF02',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'zF9VMgADqrbOEGRy',
						w : 80,
						h : 97,
						sizes : array(74),
					),
					$client->photoPathSize(
						type : 'Xeh7yP3FBTsp9Zwj',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 72,
				thumb_version : 80,
				thumb_document_id : -4064632436614596105,
				count : 94,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 8914365798036063969,
				),
				$client->document(
					id : -6523284595801963823,
					access_hash : 2063613927270897019,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 9,
					mime_type : 'sFLV3fltCaJNR8dY',
					size : 3987096044531005248,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'GjVMobB5ncfX0DdE',
						),
						$client->photoSize(
							type : 'l489PZsyMO32LxhI',
							w : 78,
							h : 97,
							size : 85,
						),
						$client->photoCachedSize(
							type : 'bCsfV7yW8n3JMela',
							w : 39,
							h : 52,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'YGIB4psQH12ACFcf',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'OuqPTVrB5ZUJRzgK',
							w : 1,
							h : 84,
							sizes : array(74),
						),
						$client->photoPathSize(
							type : 'i2RV5HzdJ0axXfom',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'mtGqofV85zaKx62n',
							w : 77,
							h : 64,
							size : 24,
							video_start_ts : -692630.701171875,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -853088257299023464,
							background_colors : array(23),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -374261184288104476,
							background_colors : array(48),
						),
					),
					dc_id : 16,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 53,
							h : 22,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'G75VnJEWA90wZgSl',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1136843.65625,
							w : 73,
							h : 14,
							preload_prefix_size : 13,
							video_start_ts : 263475.0546875,
							video_codec : '96ivUeKCZgO7JxTD',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 86,
							title : 'JEpsRMutfFzLXcC9',
							performer : '2VLuptbsXQ0HlDgS',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'rYgESUc80wvJiMhk',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : '6cWUBVY3FhquyIJG',
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
				installed_date : 26,
				id : 2346015961699294884,
				access_hash : -2132756267574966265,
				title : 'otb8X2zVlvS7wpBR',
				short_name : '4ecxRU26GJDVLY3z',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'XtRiwqMKeJHuWbz2',
					),
					$client->photoSize(
						type : 'T06Gh2OgMLJPozAK',
						w : 21,
						h : 45,
						size : 4,
					),
					$client->photoCachedSize(
						type : '61vYjKUcem37gSET',
						w : 71,
						h : 28,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'f7BdtDTwlcFY4zkJ',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'R9GzoiZ2cwgeYjaU',
						w : 77,
						h : 45,
						sizes : array(94),
					),
					$client->photoPathSize(
						type : 'ZO1rE9ADWU8ycqS0',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 63,
				thumb_version : 27,
				thumb_document_id : 2927957057515838779,
				count : 20,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : '4j5I9xtcHWEKOuSb',
					documents : array(8388624245125079370),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -6377374932428885031,
					keyword : array('cQpDzhnosKwtLATy'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -7006874519196049756,
				),
				$client->document(
					id : -6813269692592628979,
					access_hash : -488998475431367788,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 15,
					mime_type : 'BQdOT8HGqKnDNa2w',
					size : 5127183687198119943,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'xqhDcLUQigwsaX8t',
						),
						$client->photoSize(
							type : 'UyB6Nq1SCdofJITD',
							w : 56,
							h : 81,
							size : 45,
						),
						$client->photoCachedSize(
							type : 'TM8ZFejC1N9RGIYc',
							w : 42,
							h : 17,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'rEAFlZdbWjqIit2H',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : '9qGKL1gMkuftsBbd',
							w : 97,
							h : 45,
							sizes : array(15),
						),
						$client->photoPathSize(
							type : 'xLjs6voh98PrBWS2',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'AocQi9S0FIBdx6Mz',
							w : 46,
							h : 77,
							size : 89,
							video_start_ts : -2048383.7734375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 8887074937204825745,
							background_colors : array(51),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 6313410796966687403,
							background_colors : array(21),
						),
					),
					dc_id : 14,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 55,
							h : 23,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'RT0cy2kreYE8DC4n',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1006710.501953125,
							w : 31,
							h : 43,
							preload_prefix_size : 91,
							video_start_ts : 724395.11328125,
							video_codec : 'vAlQcVEZDo648wUa',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 1,
							title : 'JkXQKtGZv9w4FPin',
							performer : '5fRCSOyiQoxetUBa',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'kptcXPduaxnoQr4B',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : '1mpDWVCtRU9jyQZl',
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
				id : 774983452430911169,
				access_hash : 6562612276158328326,
				title : 'oeDl5O7hxKcGqt36',
				short_name : 'zb9NXnxsE46vTZyp',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'lzIoaS1DxGeuLV47',
					),
					$client->photoSize(
						type : 'aKCkvDNWJGwe68cx',
						w : 38,
						h : 94,
						size : 72,
					),
					$client->photoCachedSize(
						type : '09YZg2In6UzxLJtv',
						w : 95,
						h : 84,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'aeykgi3KQJ5Iz7pu',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'wEartLWYTDXOGpfb',
						w : 68,
						h : 22,
						sizes : array(9),
					),
					$client->photoPathSize(
						type : 'uQzvhRZeOwWEUTJd',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 36,
				thumb_version : 83,
				thumb_document_id : 5986104204068467004,
				count : 86,
				hash : 0,
			),
		),
	),
);
```