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
			id : 5637898353049747742,
		),
		$client->document(
			id : -1693128559089838264,
			access_hash : -3384486013269804878,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 68,
			mime_type : 'OesSziWTN8V6qCx7',
			size : -22260360321733315,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'pNlHAyMKnFdt8Vs9',
				),
				$client->photoSize(
					type : 'SndWarQmZ9zbMhFo',
					w : 44,
					h : 44,
					size : 84,
				),
				$client->photoCachedSize(
					type : 'exHdB0bkn1fMGDUJ',
					w : 9,
					h : 86,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '3O2Te8xl67AzH5af',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'mebPf5HFJAZ7EqN1',
					w : 7,
					h : 98,
					sizes : array(90),
				),
				$client->photoPathSize(
					type : '3WAOl1Nx9LGMnBTd',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'HtO3gkToJsi0QYvL',
					w : 59,
					h : 66,
					size : 87,
					video_start_ts : 928679.9267578125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -1459585464244556281,
					background_colors : array(15),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -3423343552461423798,
					background_colors : array(31),
				),
			),
			dc_id : 7,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 66,
					h : 69,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'oGEA69FZrv4SaHcV',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 12,
						x : -123222.7783203125,
						y : 1479147.1767578125,
						zoom : -1453185.47265625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1044895.5634765625,
					w : 9,
					h : 77,
					preload_prefix_size : 76,
					video_start_ts : -1966511.2255859375,
					video_codec : 'Zms9DA8qxGV6ndPa',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 71,
					title : 'GOtJ0UxswFIZa7gc',
					performer : 'T9zPasx6ceCjhLpM',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '0HXTg7LKzvwsPSE9',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'cYsQdCTLwejkVz0A',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```