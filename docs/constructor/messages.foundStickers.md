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
	next_offset : 89,
	hash : 0,
	stickers : array(
		$client->documentEmpty(
			id : -2175254358438022797,
		),
		$client->document(
			id : -4610853224071222664,
			access_hash : -5041302285662887326,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 5,
			mime_type : '6HKQyRAwmtWeikGS',
			size : -9163785251778711297,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'f7ROP3QCehsxNU96',
				),
				$client->photoSize(
					type : 'CvpViOm5NRFlfLh8',
					w : 72,
					h : 58,
					size : 91,
				),
				$client->photoCachedSize(
					type : 'fv7RW3FnkHVyl4XI',
					w : 8,
					h : 82,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'fCDNpPogy6RmrwtV',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '6BASwp7TCvecUHXM',
					w : 99,
					h : 59,
					sizes : array(76),
				),
				$client->photoPathSize(
					type : 'U3eT2C1aADzFp68m',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'tq0va4lCgPw9MhB1',
					w : 49,
					h : 0,
					size : 10,
					video_start_ts : 126641.41015625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -2349860465303668399,
					background_colors : array(37),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -1429882607907920612,
					background_colors : array(61),
				),
			),
			dc_id : 2,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 54,
					h : 83,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'eQdB7FvVRf2UY40h',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 90,
						x : -1403304.978515625,
						y : 1357241.7880859375,
						zoom : 936554.638671875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -577077.548828125,
					w : 79,
					h : 52,
					preload_prefix_size : 94,
					video_start_ts : 1146896.2568359375,
					video_codec : 'ZCobthI3vUpu5m8x',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 66,
					title : 'BWDTeyIdiuNCtaPr',
					performer : 'Pc3YJsLyarREINVj',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'kCgyTcZoFEz79hVf',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'NesIkUApWx2zQ461',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```