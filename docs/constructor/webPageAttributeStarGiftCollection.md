# webPageAttributeStarGiftCollection

**Description** : *Contains info about a gift collection &raquo; for a webPage preview of a gift collection &raquo; \(the webPage will have a type of telegram\_collection\)*

**Layer** : 229

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
			id : 3281040411439501552,
		),
		$client->document(
			id : 6248222275143769783,
			access_hash : 6600899083791389097,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 12,
			mime_type : '2894cuGqrpH3U0wi',
			size : 1545742465753508818,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'VTSkY3v5wlbIsaRK',
				),
				$client->photoSize(
					type : 'qVgJAHRP2flLZGYy',
					w : 56,
					h : 11,
					size : 90,
				),
				$client->photoCachedSize(
					type : 'iAyu4TLg9I5bSjsX',
					w : 75,
					h : 23,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '0VdcWBeng8buP1wZ',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'EdCu61alyJP2Wqms',
					w : 58,
					h : 48,
					sizes : array(74),
				),
				$client->photoPathSize(
					type : '0g3H5BCLzZ1jmrFV',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '5glNnHMvrQC0kFc1',
					w : 35,
					h : 94,
					size : 58,
					video_start_ts : 475425.5927734375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -2839454035898810211,
					background_colors : array(14),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 7820184896462462676,
					background_colors : array(60),
				),
			),
			dc_id : 7,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 38,
					h : 86,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '9Q5CosGDU0WJNqwV',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 63,
						x : 595899.2275390625,
						y : -1281329.876953125,
						zoom : 1289544.919921875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1871497.4970703125,
					w : 55,
					h : 85,
					preload_prefix_size : 72,
					video_start_ts : 1751998.1142578125,
					video_codec : 'IFqX8tErl7Uz0xfy',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 74,
					title : 'yAtl6Uvb1ufC0GKB',
					performer : 'Kz74hi13q0t8lZDU',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'vWU12PbF8x0swBaM',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'l84rmGNQsA0fH32X',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```