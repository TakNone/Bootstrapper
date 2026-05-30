# messages.foundStickers

**Description** : *Found stickers*

**Layer** : 225

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
	next_offset : 71,
	hash : 0,
	stickers : array(
		$client->documentEmpty(
			id : 3033252941343863236,
		),
		$client->document(
			id : 2958447528684495746,
			access_hash : 3569272850969393744,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 85,
			mime_type : '13OquZ40Ypsyh7DB',
			size : 8098932651491521421,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'Y0BruMKm74VX5ZS3',
				),
				$client->photoSize(
					type : 'F0k9GWY5g12wXotN',
					w : 71,
					h : 64,
					size : 0,
				),
				$client->photoCachedSize(
					type : 'Ra0UQClSq3s5dHtM',
					w : 48,
					h : 99,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'iPVK4D5QrzpsWTZA',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '91BLoVNh34Sn8gRK',
					w : 54,
					h : 52,
					sizes : array(91),
				),
				$client->photoPathSize(
					type : '1ipNsmxk0LQfSWUC',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 's5to2pPiB0RHnXOM',
					w : 49,
					h : 17,
					size : 65,
					video_start_ts : 1159304.0673828125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -3308311260450471415,
					background_colors : array(57),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 1223859808383834001,
					background_colors : array(97),
				),
			),
			dc_id : 91,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 57,
					h : 44,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'l6nHgiIweNzM4kAq',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 89,
						x : -100372.869140625,
						y : -1940827.4892578125,
						zoom : 1838338.923828125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -576261.2626953125,
					w : 52,
					h : 40,
					preload_prefix_size : 85,
					video_start_ts : 1426680.0322265625,
					video_codec : '4AdoKrUtmgcOk2pn',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 72,
					title : '0EcCvtsZgLYoJK3M',
					performer : 'ZqJVMcn2EpwiW6SA',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'Eyl0JmLcf1kWwe3b',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'JsvFlVhQfKDn652g',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```