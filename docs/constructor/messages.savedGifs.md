# messages.savedGifs

**Description** : *Saved gifs*

**Layer** : 222

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
			id : 1195680867974763283,
		),
		$client->document(
			id : 8143394085142354009,
			access_hash : -3001108180315990199,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 23,
			mime_type : 'X3N7prZIlsaBDUCS',
			size : 7705330476136657553,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'U5R4rMnOBzvS36CN',
				),
				$client->photoSize(
					type : 'adAHQmSeVinFqhEy',
					w : 27,
					h : 81,
					size : 23,
				),
				$client->photoCachedSize(
					type : 'bjlQD7WwME4ByqZR',
					w : 92,
					h : 91,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'HX6SsoW8za0Irk7p',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'McqUaO71fiFDK0lQ',
					w : 67,
					h : 57,
					sizes : array(17),
				),
				$client->photoPathSize(
					type : 'u1TVWsoZIeCMiUjS',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'aKABy2J3d1qPpCFl',
					w : 85,
					h : 11,
					size : 68,
					video_start_ts : -1722820.4306640625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -1377213275266249893,
					background_colors : array(5),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 8521500480593956579,
					background_colors : array(33),
				),
			),
			dc_id : 37,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 68,
					h : 43,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'xEDgYAi4UmB7jR8u',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 48,
						x : 1973016.9541015625,
						y : -1407505.6953125,
						zoom : -903934.1455078125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1769363.6533203125,
					w : 70,
					h : 87,
					preload_prefix_size : 16,
					video_start_ts : -225404.0693359375,
					video_codec : 'dFY1XxALHQ5GRs9P',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 68,
					title : 'F4ELdbq2ClUD5Irf',
					performer : 'C35urPmqyvsgpDJL',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'v3LfwxDi2QuXF0pr',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'wK6mGNBbzr1UuF58',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```