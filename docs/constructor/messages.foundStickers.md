# messages.foundStickers

**Description** : *Found stickers*

**Layer** : 233

```tl
messages.foundStickers#82c9e290 flags:# next_offset:flags.0?int hash:long stickers:Vector<Document> = messages.FoundStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	next_offset : 68,
	hash : 0,
	stickers : array(
		$client->documentEmpty(
			id : 4661317309973496747,
		),
		$client->document(
			id : 7791905890999727516,
			access_hash : 6473870350088380068,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 58,
			mime_type : 'nE5vgdaZQo30qMUV',
			size : -1118846890746997610,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'rbgFViODwKBZtdo6',
				),
				$client->photoSize(
					type : 'JC3z5l0w7GR2IMeQ',
					w : 13,
					h : 99,
					size : 46,
				),
				$client->photoCachedSize(
					type : '9q68ZPkApncLTUXb',
					w : 27,
					h : 96,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'MdUWuKbcAam249lH',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'VWgRmF1y7dpufisz',
					w : 0,
					h : 57,
					sizes : array(67),
				),
				$client->photoPathSize(
					type : 'eGfBtV7bOUQFPYL5',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'd2ePoQYr75Nh4yIH',
					w : 44,
					h : 38,
					size : 95,
					video_start_ts : 494742.490234375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 77228929343689191,
					background_colors : array(31),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 7116775515458330133,
					background_colors : array(82),
				),
			),
			dc_id : 4,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 56,
					h : 12,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'y7VK0QYlr3wtJ8fx',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 48,
						x : 2013440.6845703125,
						y : -1324218.65234375,
						zoom : -865965.107421875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1067655.0458984375,
					w : 92,
					h : 17,
					preload_prefix_size : 41,
					video_start_ts : 568730.21875,
					video_codec : 'BkbGXdwuC4Z9Qhcj',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 21,
					title : 'Pr7ZOhdgeM52AafD',
					performer : '7JgX6OFRraY98v20',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'HBR3spFTUQgoA10V',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'dVn8Ah09vfXEJuUH',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```