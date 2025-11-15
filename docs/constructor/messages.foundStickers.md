# messages.foundStickers

**Description** : *Found stickers*

**Layer** : 216

```tl
messages.foundStickers#82c9e290 flags:# next_offset:flags.0?int hash:long stickers:Vector<Document> = messages.FoundStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **next_offset** | [`flags.0?int`](type/int) | Offset for pagination |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>stickers</mark> | [`Vector<Document>`](type/Document) | Found stickers |

---

## Type

[messages.FoundStickers](type/messages.FoundStickers)

---

## Example

```php
$messagesFoundStickers = $client->messages->foundStickers(
	next_offset : 51,
	hash : 0,
	stickers : array(
		$client->documentEmpty(
			id : 2961392363531771523,
		),
		$client->document(
			id : -181116135529812814,
			access_hash : 4112957188488353322,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 35,
			mime_type : 'fOHBmgu6xYQwoJSi',
			size : -5956780395422934421,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '9JXoKZLzfn2lst73',
				),
				$client->photoSize(
					type : 'B5czovjrx68dnuMH',
					w : 33,
					h : 5,
					size : 77,
				),
				$client->photoCachedSize(
					type : '3yPRkchK0xSD7JU2',
					w : 96,
					h : 82,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'bEDMqYjkzAyvWpVa',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'NaySbrGZsD3FdWtg',
					w : 38,
					h : 80,
					sizes : array(46),
				),
				$client->photoPathSize(
					type : '64fdjMR39aukriBQ',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'k6wTMa7g2sRIQKn8',
					w : 4,
					h : 8,
					size : 76,
					video_start_ts : -1797622.453125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -7494758644349254594,
					background_colors : array(80),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -3629003820686659689,
					background_colors : array(56),
				),
			),
			dc_id : 5,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 33,
					h : 59,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '9AqwnMmEeR1Xh5LZ',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 809257.296875,
					w : 63,
					h : 10,
					preload_prefix_size : 13,
					video_start_ts : -1738279.9365234375,
					video_codec : 't5u71dNGervw9Vmb',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 58,
					title : 'skZDjr5QilJTLpU0',
					performer : 'QmS41FxdE2ALBPXr',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '9RvnasYUxlCwZqGu',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'ITbqMaJHYc72u94e',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```