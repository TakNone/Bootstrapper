# stickerSetFullCovered

**Description** : *Stickerset preview with all stickers of the stickerset included\.
Currently used only for custom emoji stickersets, to avoid a further call to messages\.getStickerSet*

**Layer** : 233

```tl
stickerSetFullCovered#40d13c0e set:StickerSet packs:Vector<StickerPack> keywords:Vector<StickerKeyword> documents:Vector<Document> = StickerSetCovered;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>set</mark> | [`StickerSet`](type/StickerSet) | Stickerset |
| <mark>packs</mark> | [`Vector<StickerPack>`](type/StickerPack) | Emoji information about every sticker in the stickerset |
| <mark>keywords</mark> | [`Vector<StickerKeyword>`](type/StickerKeyword) | Keywords for some or every sticker in the stickerset |
| <mark>documents</mark> | [`Vector<Document>`](type/Document) | Stickers |

---

## Type

[StickerSetCovered](type/StickerSetCovered)

---

## Example

```php
$stickerSetCovered = $client->stickerSetFullCovered(
	set : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 16,
		id : 7286226594912934874,
		access_hash : -8489266620051750563,
		title : 'kgFwpsA6bX5fiPtL',
		short_name : 'G92sH7LMoEzneuPD',
		thumbs : array(
			$client->photoSizeEmpty(
				type : '91570zPZ3JDdSl86',
			),
			$client->photoSize(
				type : '1FoaYhJyx7XB9Rmt',
				w : 89,
				h : 1,
				size : 99,
			),
			$client->photoCachedSize(
				type : 'SrPEb5G0U8iwpBIo',
				w : 88,
				h : 17,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'QJreqltX5uKFic9S',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'dsBKq7NueWDXMhQP',
				w : 15,
				h : 89,
				sizes : array(83),
			),
			$client->photoPathSize(
				type : 'x4kmWRbN6oGIB1nP',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 67,
		thumb_version : 55,
		thumb_document_id : -4195918700040791179,
		count : 56,
		hash : 0,
	),
	packs : array(
		$client->stickerPack(
			emoticon : 'dYCJHaWtikqSVyD8',
			documents : array(1847461263079307294),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : -8572737641242803137,
			keyword : array('9ljduMDTGkzEHmrV'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : -2357136540941033625,
		),
		$client->document(
			id : -3329935881004106095,
			access_hash : 1137063402664678551,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 34,
			mime_type : 'fGUmApOHRsBvVNhS',
			size : 2639754465144790152,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'Ocw3s9NrMUS2vZ8m',
				),
				$client->photoSize(
					type : 'WsILpKMEGVFSrDwY',
					w : 24,
					h : 33,
					size : 77,
				),
				$client->photoCachedSize(
					type : 'nHufqhtde1EyVIzx',
					w : 72,
					h : 16,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'M6KwGUD8jga4CcS9',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'ol3GBJmcEDvu6x9H',
					w : 55,
					h : 13,
					sizes : array(91),
				),
				$client->photoPathSize(
					type : '6RH59iSutvyOwGdq',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'XRzktFOLmgAS2q73',
					w : 3,
					h : 51,
					size : 0,
					video_start_ts : -806526.1484375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -9084386497443058670,
					background_colors : array(56),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 7229308213964581665,
					background_colors : array(28),
				),
			),
			dc_id : 93,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 47,
					h : 32,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'xT23dOoVLBQceNHz',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 31,
						x : 1714700.525390625,
						y : -1399226.431640625,
						zoom : -38007.6787109375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 258954.9443359375,
					w : 1,
					h : 7,
					preload_prefix_size : 59,
					video_start_ts : 1134292.0517578125,
					video_codec : 'VaQoZ6TfLvhn3490',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 47,
					title : '7f5g9mqYPObS02za',
					performer : 'LGIzHaYoedFE1sKu',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'YuEvUVdTQsB0lk5y',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'IsxkeGz2yUHAFBoO',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```