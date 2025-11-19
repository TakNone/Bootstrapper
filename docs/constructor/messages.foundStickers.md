# messages.foundStickers

**Description** : *Found stickers*

**Layer** : 218

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
	next_offset : 85,
	hash : 0,
	stickers : array(
		$client->documentEmpty(
			id : -7160830224747624860,
		),
		$client->document(
			id : 7467000487235742556,
			access_hash : 5571343473969596162,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 91,
			mime_type : 'jA6kv5EPnDlCp2Xr',
			size : 4806177542550645056,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'l2pnmZJOAjuULxzM',
				),
				$client->photoSize(
					type : 'c1dlLzM5wfBO4Z7s',
					w : 4,
					h : 58,
					size : 81,
				),
				$client->photoCachedSize(
					type : '8nRsdaXb1ZeCjLUW',
					w : 21,
					h : 43,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'Hz4tIa0d15qyPexX',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'EKTts43BHb67N9Sd',
					w : 36,
					h : 18,
					sizes : array(28),
				),
				$client->photoPathSize(
					type : 'fkgVlnD4scULd7wF',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'wyYRboHFIOMCSpc9',
					w : 68,
					h : 94,
					size : 94,
					video_start_ts : 333028.599609375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -5463575605372170162,
					background_colors : array(42),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -2625086015064837978,
					background_colors : array(47),
				),
			),
			dc_id : 32,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 91,
					h : 2,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'LCTHSocsXFO2Gngm',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 47,
						x : -585776.0400390625,
						y : -535500.7802734375,
						zoom : 66089.7978515625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1235171.5869140625,
					w : 43,
					h : 72,
					preload_prefix_size : 35,
					video_start_ts : -1608814.908203125,
					video_codec : 'q3Zz6tsUR2nOedTw',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 82,
					title : 'r02y5pciRDXGHYI4',
					performer : 'XE4hwJpMSFbr02vo',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'VK7e2v8OshUJGni0',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'g0ptEPhUd7ITyjC6',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```