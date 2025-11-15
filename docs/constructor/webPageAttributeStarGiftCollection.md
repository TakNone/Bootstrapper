# webPageAttributeStarGiftCollection

**Description** : *Contains info about a gift collection &raquo; for a webPage preview of a gift collection &raquo; \(the webPage will have a type of telegram\_collection\)*

**Layer** : 218

```tl
webPageAttributeStarGiftCollection#31cad303 icons:Vector<Document> = WebPageAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>icons</mark> | [`Vector<Document>`](type/Document) | Gifts in the collection |

---

## Type

[WebPageAttribute](type/WebPageAttribute)

---

## Example

```php
$webPageAttribute = $client->webPageAttributeStarGiftCollection(
	icons : array(
		$client->documentEmpty(
			id : 2641614124406290377,
		),
		$client->document(
			id : -6665271587933822642,
			access_hash : 3866761354369113457,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 2,
			mime_type : 'rxowbDNgknTJ2duR',
			size : 4865051234609141850,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'iQ0sqFbEVeGJ6vhK',
				),
				$client->photoSize(
					type : 'KioVxbeGD2zqnjcM',
					w : 92,
					h : 62,
					size : 60,
				),
				$client->photoCachedSize(
					type : 'zJqm6cwg7dVAPaGl',
					w : 9,
					h : 98,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'qjwBFbmYadtH7LDp',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '1UDitwM7Ed4JS9qg',
					w : 49,
					h : 85,
					sizes : array(10),
				),
				$client->photoPathSize(
					type : 'wt3uG0WjkXaqnldU',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'sFmz7EQt8Xl2a56x',
					w : 16,
					h : 49,
					size : 21,
					video_start_ts : 1730700.7001953125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -791626941515666912,
					background_colors : array(71),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 789253557023687636,
					background_colors : array(59),
				),
			),
			dc_id : 95,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 90,
					h : 27,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'S8dZeHqmyQgwGsXW',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 76,
						x : 384949.1904296875,
						y : 575213.404296875,
						zoom : -705071.8603515625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -264480.7744140625,
					w : 14,
					h : 60,
					preload_prefix_size : 15,
					video_start_ts : -178719.208984375,
					video_codec : '3cT9C2aRblpiJ14x',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 18,
					title : '6UOxZALkGW3p0NnH',
					performer : 'aiSHEMy50Whb4ICP',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'DWqgkB2FTianybRs',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'p4c7KGS9l2yHBoQr',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```