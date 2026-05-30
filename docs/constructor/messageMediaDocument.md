# messageMediaDocument

**Description** : *Document \(video, audio, voice, sticker, any media type except photo\)*

**Layer** : 225

```tl
messageMediaDocument#52d8ccd9 flags:# nopremium:flags.3?true spoiler:flags.4?true video:flags.6?true round:flags.7?true voice:flags.8?true document:flags.0?Document alt_documents:flags.5?Vector<Document> video_cover:flags.9?Photo video_timestamp:flags.10?int ttl_seconds:flags.2?int = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **nopremium** | [`flags.3?true`](type/true) | Whether this is a normal sticker, if not set this is a premium sticker and a premium sticker animation must be played |
| **spoiler** | [`flags.4?true`](type/true) | Whether this media should be hidden behind a spoiler warning |
| **video** | [`flags.6?true`](type/true) | Whether this is a video |
| **round** | [`flags.7?true`](type/true) | Whether this is a round video |
| **voice** | [`flags.8?true`](type/true) | Whether this is a voice message |
| **document** | [`flags.0?Document`](type/Document) | Attached document |
| **alt_documents** | [`flags.5?Vector<Document>`](type/Document) | Videos only, contains alternative qualities of the video |
| **video_cover** | [`flags.9?Photo`](type/Photo) | Custom video cover |
| **video_timestamp** | [`flags.10?int`](type/int) | Start playing the video at the specified timestamp (seconds) |
| **ttl_seconds** | [`flags.2?int`](type/int) | Time to live of self-destructing document |

---

## Type

[MessageMedia](type/MessageMedia)

---

## Example

```php
$messageMedia = $client->messageMediaDocument(
	nopremium : true,
	spoiler : true,
	video : true,
	round : true,
	voice : true,
	document : $client->documentEmpty(
		id : 6252660969122951395,
	),
	alt_documents : array(
		$client->documentEmpty(
			id : -6827664207740896282,
		),
		$client->document(
			id : -5332000970859327034,
			access_hash : -6639159251384131267,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 20,
			mime_type : 'gaFsTY0v5UzwS6le',
			size : -5533739489563135747,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '1Cjg8xZflkzPXwm0',
				),
				$client->photoSize(
					type : 'mqPGMokOix0zV1pf',
					w : 76,
					h : 81,
					size : 15,
				),
				$client->photoCachedSize(
					type : '8Aq7lOnrkpbG1W0E',
					w : 61,
					h : 43,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'BwC0VPZvRnxrNoL5',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'Ojg6ozKyJHTnG5eL',
					w : 17,
					h : 40,
					sizes : array(69),
				),
				$client->photoPathSize(
					type : '6UGBsVbFpWmefRaw',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'W5KTA3bevFJgXlm8',
					w : 22,
					h : 1,
					size : 19,
					video_start_ts : -2067119.259765625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -5794518434862642758,
					background_colors : array(78),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -2551076321378773686,
					background_colors : array(94),
				),
			),
			dc_id : 38,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 86,
					h : 23,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'FETGwHrOo0ke21jn',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 15,
						x : 1808400.28125,
						y : -589429.9619140625,
						zoom : 1049148.986328125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1374120.2763671875,
					w : 49,
					h : 49,
					preload_prefix_size : 89,
					video_start_ts : 181388.0654296875,
					video_codec : 'jewVHpy5DEQJWsbT',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 71,
					title : 'b9PFKDatBXAdYoRC',
					performer : 'fHwgKojBdtlIJ3sb',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'yd4WfsSqXo3kMIRe',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'RAv8KHTYiUgXkB6r',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	video_cover : $client->photoEmpty(
		id : 7946709515287553988,
	),
	video_timestamp : 5,
	ttl_seconds : 95,
);
```