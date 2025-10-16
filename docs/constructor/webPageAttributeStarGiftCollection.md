# webPageAttributeStarGiftCollection

**Description** : *Contains info about a gift collection &raquo; for a webPage preview of a gift collection &raquo; \(the webPage will have a type of telegram\_collection\)*

**Layer** : 216

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
			id : -679199108975226596,
		),
		$client->document(
			id : 5556336066965395301,
			access_hash : -2499053840855695363,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 48,
			mime_type : '9j3kpfHZlzEPgRns',
			size : -3161841214620225438,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'MIO4jcuD7U5pTWow',
				),
				$client->photoSize(
					type : 'nNQ2SsYKTrcyVJft',
					w : 80,
					h : 14,
					size : 53,
				),
				$client->photoCachedSize(
					type : '9pfWe4VmFnQ75UAZ',
					w : 26,
					h : 67,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'RHAur1f8z3sdxtc4',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'bWmBIyCZ8ciXokA2',
					w : 98,
					h : 82,
					sizes : array(38),
				),
				$client->photoPathSize(
					type : 'z5CIlhaswf2UKVG9',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'hXBcysAIaZ3E9C14',
					w : 74,
					h : 4,
					size : 89,
					video_start_ts : 1412700.375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -594386058731548738,
					background_colors : array(3),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -924340905852709570,
					background_colors : array(37),
				),
			),
			dc_id : 32,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 88,
					h : 85,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'Qak0pCV6ielEfNF8',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1843449.1513671875,
					w : 34,
					h : 89,
					preload_prefix_size : 29,
					video_start_ts : -200514.408203125,
					video_codec : '7rGZzHURwevjWFh0',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 75,
					title : 'OI0kdiUXlZxe1gm8',
					performer : 'bnlR5PZ1oWmYM4HI',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'KQFmoW95szgHwXe7',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'b2UKd6akXV13sC8A',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```