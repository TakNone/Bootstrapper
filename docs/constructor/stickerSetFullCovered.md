# stickerSetFullCovered

**Description** : *Stickerset preview with all stickers of the stickerset included\.
Currently used only for custom emoji stickersets, to avoid a further call to messages\.getStickerSet*

**Layer** : 227

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
		installed_date : 57,
		id : 2386279993113166164,
		access_hash : 3124268130670640606,
		title : 'SWLlwuU2nJBMde6V',
		short_name : 'afFJcDEK7ohuV8RM',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'JR2wHkF6DX8ua37j',
			),
			$client->photoSize(
				type : '58H0AwXbYmQJ2ckg',
				w : 4,
				h : 5,
				size : 78,
			),
			$client->photoCachedSize(
				type : 'COwmruoRPsxSlLDY',
				w : 93,
				h : 92,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : '05fQKCpaYl4c6RhF',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'Z4vKMpFaPCWwylXR',
				w : 5,
				h : 99,
				sizes : array(0),
			),
			$client->photoPathSize(
				type : '2Rwu7GxPAqkHncvU',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 90,
		thumb_version : 14,
		thumb_document_id : -2179188719444401710,
		count : 42,
		hash : 0,
	),
	packs : array(
		$client->stickerPack(
			emoticon : '8WNSbgjCUiXq671s',
			documents : array(3830723608478682276),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : -7798842950983278158,
			keyword : array('AoXKPTLnht7B3YNk'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : 2014335952102733646,
		),
		$client->document(
			id : -3488860648774772924,
			access_hash : -6358426055313371843,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 88,
			mime_type : '8FBlW32jaPTCr9gG',
			size : 1767225749743805875,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'aLYQ0DshC1lPejAi',
				),
				$client->photoSize(
					type : 'YQdsIr1N2oxZBtqH',
					w : 80,
					h : 29,
					size : 42,
				),
				$client->photoCachedSize(
					type : '5Wa94kKBg3pyv8tj',
					w : 87,
					h : 56,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '1hifJdcDEOlKtB4W',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'M2dQJIx8WuLnF15c',
					w : 96,
					h : 5,
					sizes : array(20),
				),
				$client->photoPathSize(
					type : 'lHB94tReEICZAS78',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '6hTSu5RfPvOr8Kep',
					w : 8,
					h : 23,
					size : 48,
					video_start_ts : -1618079.1943359375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -74381069932967524,
					background_colors : array(66),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -5439075044732513659,
					background_colors : array(51),
				),
			),
			dc_id : 58,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 17,
					h : 4,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '0UO3Zmu6BqHc4Wih',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 41,
						x : 410327.8564453125,
						y : 1483992.4638671875,
						zoom : -371504.046875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1837366.759765625,
					w : 74,
					h : 50,
					preload_prefix_size : 45,
					video_start_ts : 617472.900390625,
					video_codec : 'rDWsC6Nf9KvFURZg',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 33,
					title : 'Sj8kanA5C2zE9oiv',
					performer : 'j7Lh3FrDmkJK9CBp',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'evJ3dUVlAFwP4qHW',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'XTLpe1PJBEDk0ic9',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```