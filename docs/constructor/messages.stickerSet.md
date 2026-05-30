# messages.stickerSet

**Description** : *Stickerset and stickers inside it*

**Layer** : 222

```tl
messages.stickerSet#6e153f16 set:StickerSet packs:Vector<StickerPack> keywords:Vector<StickerKeyword> documents:Vector<Document> = messages.StickerSet;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>set</mark> | [`StickerSet`](type/StickerSet) | The stickerset |
| <mark>packs</mark> | [`Vector<StickerPack>`](type/StickerPack) | Emoji info for stickers |
| <mark>keywords</mark> | [`Vector<StickerKeyword>`](type/StickerKeyword) | Keywords for some or every sticker in the stickerset |
| <mark>documents</mark> | [`Vector<Document>`](type/Document) | Stickers in stickerset |

---

## Type

[messages.StickerSet](type/messages.StickerSet)

---

## Example

```php
$messagesStickerSet = $client->messages->stickerSet(
	set : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 76,
		id : -6002901813061739169,
		access_hash : 4730557460887627774,
		title : '2YxP9lf5btKvi1FE',
		short_name : 'U07kwiY1m3nzSlvg',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'FH4ofU1yzAu0N5jv',
			),
			$client->photoSize(
				type : 'Fgk17Wl0EQAb3uoB',
				w : 46,
				h : 86,
				size : 65,
			),
			$client->photoCachedSize(
				type : 'ArsCXKq8eZTkli9g',
				w : 60,
				h : 22,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'D124fLCAasvRnudT',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'f1xKBudkFsJI3j98',
				w : 80,
				h : 93,
				sizes : array(12),
			),
			$client->photoPathSize(
				type : 'jlkIPDvZY4rFCx2B',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 37,
		thumb_version : 28,
		thumb_document_id : -2079360146907007122,
		count : 8,
		hash : 0,
	),
	packs : array(
		$client->stickerPack(
			emoticon : 'H9LrvpjlPe3AZtnC',
			documents : array(3675195999145490164),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : 8169830142133379913,
			keyword : array('Ys9hL3dP2FkRN4jl'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : -2876349760433422022,
		),
		$client->document(
			id : -3538246943007282491,
			access_hash : 5810752551470075085,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 6,
			mime_type : 'U36OreDhlzbAVxPp',
			size : -6314970484733363087,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'dvroXD1ijtmBHQIP',
				),
				$client->photoSize(
					type : 'r6pQCovAyRwn913b',
					w : 33,
					h : 74,
					size : 34,
				),
				$client->photoCachedSize(
					type : 'gV5PXF3uIq9A2y4L',
					w : 56,
					h : 43,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '5Dg7omlfRIZHPYBF',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'g3Mbzi5O02pYCvQ9',
					w : 0,
					h : 75,
					sizes : array(33),
				),
				$client->photoPathSize(
					type : 'SoOCR9TF6XfUuMlp',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'rEiByCqAueDhvkRz',
					w : 52,
					h : 44,
					size : 70,
					video_start_ts : 582915.6259765625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -6287606770953014205,
					background_colors : array(79),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -1094593336600072023,
					background_colors : array(70),
				),
			),
			dc_id : 86,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 14,
					h : 50,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'csOWKwvt3gJGixoN',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 12,
						x : -158713.763671875,
						y : -709199.521484375,
						zoom : 1821315.3447265625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1710253.6396484375,
					w : 97,
					h : 38,
					preload_prefix_size : 85,
					video_start_ts : -1034760.916015625,
					video_codec : 'NACcKVwyRW9GE2YB',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 8,
					title : 'igt4zEcpB9YVM3I6',
					performer : 'YfH1GLRKOnkpg3xa',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'wrinaDmYW2CPZEJA',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'SXEHGMVTYLaJ7ftI',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```