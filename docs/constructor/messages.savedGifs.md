# messages.savedGifs

**Description** : *Saved gifs*

**Layer** : 211

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
	hash : 3521021217968653340,
	gifs : array(
		$client->documentEmpty(
			id : -3274409867693413910,
		),
		$client->document(
			id : -2657864422407064277,
			access_hash : 4680554805968038418,
			file_reference : 's?g?4LiveProto\\R?40',
			date : 1,
			mime_type : 'tMdPkRJFhS8NBg7Y',
			size : 7259149125747657015,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'By5HFSiLTxIU7sEp',
				),
				$client->photoSize(
					type : 'SlYy8AH45tveaNRz',
					w : 41,
					h : 46,
					size : 50,
				),
				$client->photoCachedSize(
					type : 'Ajuw6mBfdLPqaht7',
					w : 15,
					h : 76,
					bytes : '?4e@LiveProto?2??T',
				),
				$client->photoStrippedSize(
					type : 'xtLO9Ufs0mjdvPKM',
					bytes : 'a???$LiveProto(???I',
				),
				$client->photoSizeProgressive(
					type : 'RMoagPIX4LST6kH7',
					w : 74,
					h : 89,
					sizes : array(35),
				),
				$client->photoPathSize(
					type : '9wAg8aiEVS06mdHy',
					bytes : '?P,(LiveProto"?6?z',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'lgcfGnIwhkQvP8m5',
					w : 20,
					h : 27,
					size : 25,
					video_start_ts : -615884.5751953125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 7110170308259023272,
					background_colors : array(12),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 3826956964620707824,
					background_colors : array(3),
				),
			),
			dc_id : 67,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 70,
					h : 41,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'tkfAinS3PsXmCJvT',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 756202.8388671875,
					w : 23,
					h : 65,
					preload_prefix_size : 54,
					video_start_ts : -1345043.1201171875,
					video_codec : '5iJYpx3BKVgW9fZh',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 69,
					title : 'pDiga0YRSfhuP4CT',
					performer : 'hHoy6DRdZ8C3YPnT',
					waveform : '?M??LiveProto=@q?',
				),
				$client->documentAttributeFilename(
					file_name : 'B5zGLbaxj8tAXiZ6',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'muk0qCUzvHhQo7aR',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```