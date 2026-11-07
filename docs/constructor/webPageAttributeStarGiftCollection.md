# webPageAttributeStarGiftCollection

**Description** : *Contains info about a gift collection &raquo; for a webPage preview of a gift collection &raquo; \(the webPage will have a type of telegram\_collection\)*

**Layer** : 233

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
			id : 4323059674293520346,
		),
		$client->document(
			id : -3206500413167634223,
			access_hash : -396322445178295696,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 14,
			mime_type : 'bMcUHeif619ImzOJ',
			size : -4782360450339357262,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'THMcYCVBsUfyPaeh',
				),
				$client->photoSize(
					type : 'yHI74focMSUaBubl',
					w : 9,
					h : 8,
					size : 33,
				),
				$client->photoCachedSize(
					type : 'ZnId127gu4jhVwY0',
					w : 7,
					h : 89,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'yG2mwhPelCAQ6TpI',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'NvKjLGXR4ecDnqzW',
					w : 100,
					h : 12,
					sizes : array(56),
				),
				$client->photoPathSize(
					type : 'a4tD6MkFAwfEm8jp',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'yj1HivAFd32kERol',
					w : 87,
					h : 79,
					size : 70,
					video_start_ts : 142285.111328125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 6073598520426265517,
					background_colors : array(16),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -4517533970864286606,
					background_colors : array(23),
				),
			),
			dc_id : 83,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 28,
					h : 90,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'emX2i9yGq8gZ7f3b',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 91,
						x : -465637.1376953125,
						y : -1666143.296875,
						zoom : 181515.5341796875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 900017.3154296875,
					w : 96,
					h : 88,
					preload_prefix_size : 57,
					video_start_ts : 1408406.435546875,
					video_codec : 'duLecOSKsM0RAyrp',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 26,
					title : 'jokdQC3apD0Rx74e',
					performer : 'oTJ1kLnsxWuEpDSq',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'BEIMbA3G7ymcWh2C',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'TwE9p17BOcmdzNVD',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```