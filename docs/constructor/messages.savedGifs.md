# messages.savedGifs

**Description** : *Saved gifs*

**Layer** : 233

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
			id : -5884897307968226061,
		),
		$client->document(
			id : 9174897968289903041,
			access_hash : -3081064377624312207,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 23,
			mime_type : 'cVefGRXDyabYSMlE',
			size : -2495093749167375857,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'LRAc7U6lqGaXh9fj',
				),
				$client->photoSize(
					type : 'VT3Pa0DFJnb14LH7',
					w : 0,
					h : 24,
					size : 30,
				),
				$client->photoCachedSize(
					type : '3FJ017dxAGgzRyH4',
					w : 69,
					h : 70,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'Fs9RDm7U0pGAkzBE',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'lP0HBVMexYE8Z5u6',
					w : 23,
					h : 82,
					sizes : array(10),
				),
				$client->photoPathSize(
					type : 'XlaRTCUhY82DNLvc',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'thwPIadNp2fW6qG9',
					w : 92,
					h : 95,
					size : 22,
					video_start_ts : 780786.9755859375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 8040433023751741095,
					background_colors : array(73),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -8379573220435954701,
					background_colors : array(51),
				),
			),
			dc_id : 35,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 47,
					h : 23,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'WmCtesRgp9JlGvYk',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 36,
						x : 204887.650390625,
						y : -423240.068359375,
						zoom : 553188.8212890625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1108311.7177734375,
					w : 3,
					h : 86,
					preload_prefix_size : 37,
					video_start_ts : 1351405.53515625,
					video_codec : 'sgfq05mKV8UMBHoO',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 54,
					title : 'xJpzlEfvYS5HVdTy',
					performer : 'OFo3suqNJcEMkL7h',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'uLQgTFZtGEhznNc3',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'MIpfHOtjv9bL0PCm',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```