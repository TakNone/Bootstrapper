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
			id : -8878692802907991574,
		),
		$client->document(
			id : 5867149444091154542,
			access_hash : 8672160320991008288,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 84,
			mime_type : 'jbKz81RPZ7VCevnp',
			size : -1274169816691674379,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'TQmN6GHZ5ug4nXaF',
				),
				$client->photoSize(
					type : 'dLbk9HBUADs1wuWC',
					w : 46,
					h : 37,
					size : 5,
				),
				$client->photoCachedSize(
					type : 'xKQShds6LelG0AFY',
					w : 51,
					h : 48,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'tWLlqSGga19vdBON',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'F8JieMl7WPoVmNa1',
					w : 94,
					h : 73,
					sizes : array(5),
				),
				$client->photoPathSize(
					type : 'P3iwRUa7M1qZFshn',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'jNZ3rQeAd6ElMBx0',
					w : 79,
					h : 85,
					size : 15,
					video_start_ts : 926077.2734375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 472929137544825165,
					background_colors : array(86),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -7520213358128656111,
					background_colors : array(68),
				),
			),
			dc_id : 17,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 10,
					h : 77,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'Kobct5vre3CnXkDV',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 68,
						x : -152737.0498046875,
						y : -1016362.455078125,
						zoom : -2034330.0712890625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1438716.9716796875,
					w : 29,
					h : 47,
					preload_prefix_size : 38,
					video_start_ts : -1999288.01953125,
					video_codec : 'uZcC8RAnW7pJmViy',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 83,
					title : 'D3ciUanxh971vVXF',
					performer : 'J0dnDaiY8gK1vxX6',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '0S54NEhLXgvBGasz',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Ftls3rSRX26pfijz',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```