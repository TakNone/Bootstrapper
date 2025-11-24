# stickerSetMultiCovered

**Description** : *Stickerset, with multiple stickers as preview*

**Layer** : 218

```tl
stickerSetMultiCovered#3407e51b set:StickerSet covers:Vector<Document> = StickerSetCovered;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>set</mark> | [`StickerSet`](type/StickerSet) | Stickerset |
| <mark>covers</mark> | [`Vector<Document>`](type/Document) | Preview stickers |

---

## Type

[StickerSetCovered](type/StickerSetCovered)

---

## Example

```php
$stickerSetCovered = $client->stickerSetMultiCovered(
	set : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 32,
		id : 1315451059985088358,
		access_hash : 5361207283051300977,
		title : 'n4UzPfcrJ9d8yqvu',
		short_name : 'NeMgWFQcLtOE68iH',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'LPJYxhNz38yGcoRq',
			),
			$client->photoSize(
				type : 'SHmf28lkwWEn5gu7',
				w : 94,
				h : 13,
				size : 93,
			),
			$client->photoCachedSize(
				type : 'qwhWgYuJfbx152I6',
				w : 53,
				h : 67,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'JneiH1gsQx268dSr',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'ZkDMGrsUwcKbpW58',
				w : 54,
				h : 80,
				sizes : array(72),
			),
			$client->photoPathSize(
				type : 'RjtNnbsUHS3Ydxck',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 11,
		thumb_version : 62,
		thumb_document_id : 1468101012430139902,
		count : 45,
		hash : 0,
	),
	covers : array(
		$client->documentEmpty(
			id : -744728140964216658,
		),
		$client->document(
			id : 879303971769082423,
			access_hash : -4276769634785226168,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 21,
			mime_type : 'jwoNhY1f6zG759Va',
			size : 4679849394452385739,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '41nRmUCGwzuJW7Oh',
				),
				$client->photoSize(
					type : 'hDMTy32JdvLWnFp5',
					w : 27,
					h : 4,
					size : 49,
				),
				$client->photoCachedSize(
					type : 'ENy5WJxBrhcCDb09',
					w : 15,
					h : 38,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'c6CiMeapZlq47fBo',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '9gPs7OUQlz2jvLdq',
					w : 43,
					h : 64,
					sizes : array(48),
				),
				$client->photoPathSize(
					type : 'OZqDfJLcCQPN05j9',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'jbuIqMRlCvNeDnm5',
					w : 52,
					h : 92,
					size : 92,
					video_start_ts : -1739806.3212890625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -7087306711358840569,
					background_colors : array(50),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -5128892087014138108,
					background_colors : array(45),
				),
			),
			dc_id : 25,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 61,
					h : 9,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'qzd2ELwe0Wfr7PFQ',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 36,
						x : -1296981.9345703125,
						y : -1450433.5849609375,
						zoom : 566923.7939453125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -199810.7333984375,
					w : 60,
					h : 85,
					preload_prefix_size : 64,
					video_start_ts : -61487.576171875,
					video_codec : '6e9hpkMRKVBXbfNQ',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 38,
					title : 'CtqkJTPQbvYaLNKV',
					performer : 'Gpy1PmVuKDE6aRbB',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'xT1sGuHcB2Zt0EPf',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'YKZzjPpXndHM98A5',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```