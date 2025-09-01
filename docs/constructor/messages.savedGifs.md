# messages.savedGifs

**Description** : *Saved gifs*

**Layer** : 214

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
	hash : 1509212010095090439,
	gifs : array(
		$client->documentEmpty(
			id : -7142770635306816295,
		),
		$client->document(
			id : -4468805973151374850,
			access_hash : -1878413093974549957,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 94,
			mime_type : 't4u0jONHQRrsFezW',
			size : 6801920018739622571,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'GqK7lE9IWbxALHNt',
				),
				$client->photoSize(
					type : 'cwn0BChKWMZo8vig',
					w : 84,
					h : 60,
					size : 27,
				),
				$client->photoCachedSize(
					type : 'KnIrJfRM7ypkSlWP',
					w : 91,
					h : 43,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'NR25D6vI84rMxlQj',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'FrhCv3iUlofgtn0H',
					w : 16,
					h : 90,
					sizes : array(14),
				),
				$client->photoPathSize(
					type : 'TUQ6jJBbShq4WiCZ',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'h5guKfZB1Tec6yrS',
					w : 31,
					h : 98,
					size : 34,
					video_start_ts : -1385959.638671875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -6600161507552953411,
					background_colors : array(34),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 5429446416737530135,
					background_colors : array(14),
				),
			),
			dc_id : 43,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 5,
					h : 63,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '5LmBJ0MY7EfiaqnW',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -299276.5703125,
					w : 61,
					h : 32,
					preload_prefix_size : 15,
					video_start_ts : -1997013.875,
					video_codec : 'JYVDaC5qFefB27bN',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 93,
					title : '4LufDSAHcZwCiWQs',
					performer : 'rFun7Mya5GidP1Bk',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'V9bZzpTIArw2WgUv',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'dYl7fqjDpHaM0m4k',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```