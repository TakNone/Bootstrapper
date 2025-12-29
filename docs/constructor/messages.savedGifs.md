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
			id : -4187730843515608809,
		),
		$client->document(
			id : -5877825189184034807,
			access_hash : -5613237040431777945,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 28,
			mime_type : 'cJVb9aj2ZyL4qE3n',
			size : 5681337468988550278,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'sI4Bu7FMyrbi02cn',
				),
				$client->photoSize(
					type : 'UDgtzR7MLKjWxcSp',
					w : 79,
					h : 6,
					size : 79,
				),
				$client->photoCachedSize(
					type : '1fUuOPqx5TKQtEeZ',
					w : 13,
					h : 57,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'KmAuzxnDp2h8Wefv',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'EetGyKoaQNPrC5Zp',
					w : 54,
					h : 9,
					sizes : array(39),
				),
				$client->photoPathSize(
					type : '0BE7W463Px1HhDNJ',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '65L9TSQJ1ZHAi4ju',
					w : 7,
					h : 42,
					size : 58,
					video_start_ts : 1142656.341796875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 7668397992002842164,
					background_colors : array(3),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -5896876410272006151,
					background_colors : array(36),
				),
			),
			dc_id : 25,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 96,
					h : 19,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'ZrghwSEPK2GDaNd1',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 14,
						x : 1934908.6748046875,
						y : -1141528.5654296875,
						zoom : -470995.193359375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1882828.2080078125,
					w : 55,
					h : 19,
					preload_prefix_size : 47,
					video_start_ts : -607932.994140625,
					video_codec : 'dqAxfNHBFtLrszXm',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 33,
					title : 'FOVjSChqkTE3L5t6',
					performer : 'C2qWetG5cLroFdpI',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '1IPMCTvhpdUr9VLo',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'liaCPtLcNDEA7RGr',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```