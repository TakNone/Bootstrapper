# messages.foundStickers

**Description** : *Found stickers*

**Layer** : 227

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
	next_offset : 11,
	hash : 0,
	stickers : array(
		$client->documentEmpty(
			id : 5735266547165462292,
		),
		$client->document(
			id : 1659154637299785118,
			access_hash : -1006053100951287854,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 83,
			mime_type : 'IkJ6fpeHb8PlcCs3',
			size : -1787412340035094501,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'WYKiUJvnz3Od5GIA',
				),
				$client->photoSize(
					type : 'Z1y5dK0Q4AsHR26u',
					w : 98,
					h : 94,
					size : 79,
				),
				$client->photoCachedSize(
					type : 'bKsew4ZINhJBYm3y',
					w : 91,
					h : 31,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'GQRj5YMTExHgvb4V',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'JWsDRuzr4p5AhIZo',
					w : 6,
					h : 65,
					sizes : array(1),
				),
				$client->photoPathSize(
					type : 'XRKTmL2QDrdqscpE',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'bluhPGKtU9Md4vOD',
					w : 65,
					h : 10,
					size : 89,
					video_start_ts : 1724336.32421875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -454072419328409019,
					background_colors : array(39),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 4814262548093937291,
					background_colors : array(90),
				),
			),
			dc_id : 58,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 93,
					h : 80,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'j8l4DPK1uhIvTEmc',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 88,
						x : 1127455.09765625,
						y : 738194.8369140625,
						zoom : -101825.9892578125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1081751.458984375,
					w : 94,
					h : 100,
					preload_prefix_size : 57,
					video_start_ts : -418842.896484375,
					video_codec : 'JS7QZuV39Rget2z5',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 8,
					title : '8FB7hYPbTaOmVWeJ',
					performer : 'Mezf9dVSE7o16ZsP',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'jYKULpMkbuPc9g0A',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'UH1sNQ7ganS3vDmZ',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```