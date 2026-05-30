# webPageAttributeStarGiftCollection

**Description** : *Contains info about a gift collection &raquo; for a webPage preview of a gift collection &raquo; \(the webPage will have a type of telegram\_collection\)*

**Layer** : 222

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
			id : -8515315020803176632,
		),
		$client->document(
			id : -6496886110581633821,
			access_hash : -1579195141030820785,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 79,
			mime_type : 'oG9nOaeWkpXyA3MR',
			size : -1120414248370834753,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'CkWbSRlg9nji1vX3',
				),
				$client->photoSize(
					type : 'Z7tfN8v5guAeq1bQ',
					w : 8,
					h : 85,
					size : 49,
				),
				$client->photoCachedSize(
					type : 'Q87aSZMLxw3dVofc',
					w : 27,
					h : 22,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'A9Yb5LjN27vqKcGD',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'RLWdTreBcHv5o3mN',
					w : 16,
					h : 91,
					sizes : array(16),
				),
				$client->photoPathSize(
					type : 'AlE9ykhiHIFToupP',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'J3dixQfrMzDYug4I',
					w : 45,
					h : 6,
					size : 65,
					video_start_ts : -995957.2783203125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -2858453329544945267,
					background_colors : array(59),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 2585993848132609694,
					background_colors : array(12),
				),
			),
			dc_id : 64,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 14,
					h : 96,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '45E9bWqMX1oBAnRe',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 63,
						x : 637677.4111328125,
						y : -1247810.689453125,
						zoom : -1515270.0341796875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 2000626.611328125,
					w : 80,
					h : 1,
					preload_prefix_size : 56,
					video_start_ts : -971092.470703125,
					video_codec : 'klMC2Nj0fh7a5SeE',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 24,
					title : '8yHdmXu5JUbYfcjB',
					performer : 'DPsEISyLYucadC2r',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'PVneAwaJ1TFtmkoK',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'cqaKZOuiMNs3m0wH',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```