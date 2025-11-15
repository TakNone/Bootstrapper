# stickerSetMultiCovered

**Description** : *Stickerset, with multiple stickers as preview*

**Layer** : 216

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
		installed_date : 7,
		id : 7377343822978647119,
		access_hash : 862168831578309474,
		title : 'r5xcAvwWtjbTKOIZ',
		short_name : 'mFpPIBlOeJdU2yVX',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'WagZpRv1dBIQL4iy',
			),
			$client->photoSize(
				type : 'FKTXkqe1iCjfaBns',
				w : 60,
				h : 97,
				size : 46,
			),
			$client->photoCachedSize(
				type : 'Ote3lBJCPvfdU4Vb',
				w : 83,
				h : 38,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'L2YDtwR47KlWVAek',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'oE5U8DzbMiOkHvnA',
				w : 39,
				h : 39,
				sizes : array(52),
			),
			$client->photoPathSize(
				type : 'cuX1vB26QdO3zGVm',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 38,
		thumb_version : 61,
		thumb_document_id : -2358881121869057885,
		count : 7,
		hash : 0,
	),
	covers : array(
		$client->documentEmpty(
			id : -1143434923578707508,
		),
		$client->document(
			id : 4002452031028854689,
			access_hash : -3360464402022055765,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 2,
			mime_type : 'tYu3VG4e9nfQTZBw',
			size : -6398117209239644169,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'bTz81UDq3GA0ck5Q',
				),
				$client->photoSize(
					type : 'b4cdE5vUeWB2ms0H',
					w : 59,
					h : 25,
					size : 38,
				),
				$client->photoCachedSize(
					type : 'sirMWKEt8oXUjYZ1',
					w : 35,
					h : 79,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '2YuvG1TN6IxqpsF4',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'cxWpgUlG2foqIBu4',
					w : 28,
					h : 77,
					sizes : array(72),
				),
				$client->photoPathSize(
					type : 'FWxIHaf2liuqEbKG',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '5Ia6uyltKWXOoqEP',
					w : 51,
					h : 21,
					size : 61,
					video_start_ts : -172482.96484375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -3380710854221713306,
					background_colors : array(41),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -3293395451020926,
					background_colors : array(73),
				),
			),
			dc_id : 18,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 10,
					h : 90,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'ljz5Xb8ONw9dMCWy',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 881924.9833984375,
					w : 55,
					h : 23,
					preload_prefix_size : 17,
					video_start_ts : 1703030.29296875,
					video_codec : 'Irl7tYjzqXCiuQJT',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 18,
					title : 'mdt57IX4Yz6pEGj2',
					performer : 'DLpJR41n9tKvUjH7',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '5PA8RgNOpWHyae4M',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'wfFNeG1gSEcKBIda',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```