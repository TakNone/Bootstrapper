# messages.savedGifs

**Description** : *Saved gifs*

**Layer** : 218

```tl
messages.savedGifs#84a02a0d hash:long gifs:Vector<Document> = messages.SavedGifs;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>gifs</mark> | [`Vector<Document>`](type/Document) | List of saved gifs |

---

## Type

[messages.SavedGifs](type/messages.SavedGifs)

---

## Example

```php
$messagesSavedGifs = $client->messages->savedGifs(
	hash : 0,
	gifs : array(
		$client->documentEmpty(
			id : 2330673369342645552,
		),
		$client->document(
			id : -711507697130622597,
			access_hash : -1712006914732340511,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 55,
			mime_type : 'AL0JsIxc68p5Nmhr',
			size : -8527883091423000215,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'uryCIovfhDeF2dQE',
				),
				$client->photoSize(
					type : 'uEwtQYDo3enGTzFr',
					w : 53,
					h : 32,
					size : 34,
				),
				$client->photoCachedSize(
					type : '7MbvWYqxD1dVCjs2',
					w : 65,
					h : 43,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'lTNSI7W2rAfa53Kn',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'ec3XPCEiOgU7ruDW',
					w : 11,
					h : 52,
					sizes : array(18),
				),
				$client->photoPathSize(
					type : 'stHkuUdTo9ZvBlWh',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'LUjhK79Y25yoV0st',
					w : 26,
					h : 36,
					size : 100,
					video_start_ts : -944837.1201171875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -5679160459228577893,
					background_colors : array(75),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -8702631500293530561,
					background_colors : array(56),
				),
			),
			dc_id : 98,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 38,
					h : 75,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'FiZuIJM5fcLDCHe1',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 37,
						x : -720522.0693359375,
						y : 1499116.81640625,
						zoom : -1419868.01171875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1014612.19140625,
					w : 77,
					h : 29,
					preload_prefix_size : 56,
					video_start_ts : -2059698.103515625,
					video_codec : 'Pq7bd5mU8v6LMCap',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 77,
					title : 'DAh8TGEyqkZeBwK9',
					performer : '0U96m4qGL7VCSlIx',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'oEOIuqQBxmkPrcCF',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'M8dtLC1SZRuAFG6W',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```