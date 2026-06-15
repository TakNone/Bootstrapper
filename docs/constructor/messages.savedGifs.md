# messages.savedGifs

**Description** : *Saved gifs*

**Layer** : 227

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
			id : -5226962400390482782,
		),
		$client->document(
			id : -7524515524610639359,
			access_hash : -6737986646362887910,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 51,
			mime_type : 'wRGUiOIQ2EXt8jSV',
			size : 6875977132639970361,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '8tDeHKy0nbVERmC9',
				),
				$client->photoSize(
					type : 'C48SxvmgPzdcnQhi',
					w : 6,
					h : 3,
					size : 68,
				),
				$client->photoCachedSize(
					type : 'sDrLFKktw5YI8Zu3',
					w : 88,
					h : 78,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'grMEyKU5Dc40R32N',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'Vq5zrlDQt1E8mSnY',
					w : 68,
					h : 92,
					sizes : array(47),
				),
				$client->photoPathSize(
					type : 'WJBVgiLDFfp8qnZa',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'AsbWN135LlZO2z7u',
					w : 27,
					h : 21,
					size : 69,
					video_start_ts : -873112.525390625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 4863434829557299991,
					background_colors : array(18),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -8029046535084988086,
					background_colors : array(17),
				),
			),
			dc_id : 66,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 38,
					h : 4,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'JoncxAv2QwzdCYEr',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 90,
						x : 672555.32421875,
						y : -1303291.576171875,
						zoom : -748164.552734375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -981131.990234375,
					w : 88,
					h : 59,
					preload_prefix_size : 95,
					video_start_ts : -462922.8310546875,
					video_codec : 'G9DN8M4abhcBwL7Y',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 25,
					title : 'Qpqe1iPH3nROCy6t',
					performer : 'zm6CyAOx0wXNGTjf',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '1XY8jTkcoK5Z6Uvn',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'pSaXKLeAlQvjxwED',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```