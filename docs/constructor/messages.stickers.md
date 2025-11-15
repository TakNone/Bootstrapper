# messages.stickers

**Description** : *Found stickers*

**Layer** : 216

```tl
messages.stickers#30a6ec7e hash:long stickers:Vector<Document> = messages.Stickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>stickers</mark> | [`Vector<Document>`](type/Document) | Stickers |

---

## Type

[messages.Stickers](type/messages.Stickers)

---

## Example

```php
$messagesStickers = $client->messages->stickers(
	hash : 0,
	stickers : array(
		$client->documentEmpty(
			id : -926679149692312649,
		),
		$client->document(
			id : -6879775512477955758,
			access_hash : 6760795625938627640,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 71,
			mime_type : 'WVtlJ2dy5vkbQFzY',
			size : 6231947361843948282,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '1zHawxFbZKj3nTQL',
				),
				$client->photoSize(
					type : 'zYQVp8ZSCFexJ1H4',
					w : 30,
					h : 26,
					size : 33,
				),
				$client->photoCachedSize(
					type : 'yxKezo4GnrXJANh8',
					w : 76,
					h : 11,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'YgTrmPVsIjcQA4fk',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '3F9CJ028tzTE5mcs',
					w : 49,
					h : 72,
					sizes : array(54),
				),
				$client->photoPathSize(
					type : 'Ug6PuTIRWDl1BXLH',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'PxIwesStEO5ic4z3',
					w : 49,
					h : 99,
					size : 41,
					video_start_ts : -1890112.224609375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 5720959350343434119,
					background_colors : array(32),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 1056816125146135600,
					background_colors : array(47),
				),
			),
			dc_id : 81,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 33,
					h : 96,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'u1vhYBHrxwbGjS5c',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1521246.1005859375,
					w : 54,
					h : 50,
					preload_prefix_size : 74,
					video_start_ts : -1884860.7490234375,
					video_codec : 'QLYcbVOy3vw7MPHu',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 5,
					title : 'BMUeNHZ93KqwjLyE',
					performer : 'CFxfXaOsnIZdQiS5',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '3RgzixlYu9VJQ2MN',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'l4XTY3wGekDMB0qc',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```