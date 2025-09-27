# webPageAttributeStarGiftCollection

**Layer** : 214

```tl
webPageAttributeStarGiftCollection#31cad303 icons:Vector<Document> = WebPageAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>icons</mark> | [`Vector<Document>`](type/Document) | NOTHING |

---

## Type

[WebPageAttribute](type/WebPageAttribute)

---

## Example

```php
$webPageAttribute = $client->webPageAttributeStarGiftCollection(
	icons : array(
		$client->documentEmpty(
			id : 489573817215483896,
		),
		$client->document(
			id : -9136297088142845643,
			access_hash : 3686692935443347739,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 60,
			mime_type : 'eHYTL4Jb9q3y6ciA',
			size : -7154341740056588294,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'UWsrdCB5EuRo7f4J',
				),
				$client->photoSize(
					type : 'gnLDRGj6IFJ2aAKu',
					w : 41,
					h : 83,
					size : 61,
				),
				$client->photoCachedSize(
					type : 'O7ZjBtJTcdazk4RP',
					w : 40,
					h : 71,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'IbGiHWuql68zMdxr',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '9qnMl6f58ReW7aVr',
					w : 19,
					h : 21,
					sizes : array(50),
				),
				$client->photoPathSize(
					type : 'CYQ4haUWbfp7H2Mg',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'AmZGYQirHN80dpVC',
					w : 22,
					h : 25,
					size : 27,
					video_start_ts : -2035137.5576171875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 2339697338235860649,
					background_colors : array(43),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -3997805089137322791,
					background_colors : array(29),
				),
			),
			dc_id : 47,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 44,
					h : 48,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'Kv0f1bVOrtzhPjDd',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 359811.9013671875,
					w : 93,
					h : 89,
					preload_prefix_size : 12,
					video_start_ts : 666136.220703125,
					video_codec : 'belRjFKxgr07a9Vw',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 68,
					title : '8TlcP1Xq67YjseLr',
					performer : 'cDnzvLK5u2TbZIra',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'djxLTiPZFcKQuW6q',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'gxMbvPR9dWVTnapO',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```