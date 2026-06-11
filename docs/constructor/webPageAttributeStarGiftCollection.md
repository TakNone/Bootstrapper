# webPageAttributeStarGiftCollection

**Description** : *Contains info about a gift collection &raquo; for a webPage preview of a gift collection &raquo; \(the webPage will have a type of telegram\_collection\)*

**Layer** : 227

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
			id : 6649273565080976741,
		),
		$client->document(
			id : -1913293834953737495,
			access_hash : 5708300638305812692,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 83,
			mime_type : 'w1mCsSBRtH27Ld34',
			size : 2704446665564844050,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'QHoGlrknizbySP0K',
				),
				$client->photoSize(
					type : '1qQHgIcMSuoBrvNY',
					w : 13,
					h : 43,
					size : 51,
				),
				$client->photoCachedSize(
					type : '21aIdmYcihnqszfE',
					w : 3,
					h : 30,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'K2Hg9ktCRJEUYDrW',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '4AUeBFiICdmyKRG1',
					w : 13,
					h : 85,
					sizes : array(59),
				),
				$client->photoPathSize(
					type : 'mBWRyVgYZuHEeCIJ',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'mXBLcThswgUvQEbI',
					w : 4,
					h : 35,
					size : 82,
					video_start_ts : -483719.2607421875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 7550891221040181920,
					background_colors : array(8),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -2591528870564696600,
					background_colors : array(76),
				),
			),
			dc_id : 53,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 6,
					h : 40,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'h7gCwnz6e3VPqDLG',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 77,
						x : 1472356.7236328125,
						y : -1488138.083984375,
						zoom : 1961129.880859375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1581866.84375,
					w : 82,
					h : 22,
					preload_prefix_size : 26,
					video_start_ts : 378242.7119140625,
					video_codec : 'b2m76G04qeC1FEnN',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 74,
					title : 'Vu1MxL7SRoDdbhnw',
					performer : 'qUJ0n5REQPBfhWzu',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'Xr4OCgA6JLF0k1RE',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Lv4zHES82jVCiqfB',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```