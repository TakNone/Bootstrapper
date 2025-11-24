# messageMediaDocument

**Description** : *Document \(video, audio, voice, sticker, any media type except photo\)*

**Layer** : 218

```tl
messageMediaDocument#52d8ccd9 flags:# nopremium:flags.3?true spoiler:flags.4?true video:flags.6?true round:flags.7?true voice:flags.8?true document:flags.0?Document alt_documents:flags.5?Vector<Document> video_cover:flags.9?Photo video_timestamp:flags.10?int ttl_seconds:flags.2?int = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
		id : 1993504835589180013,
	),
	alt_documents : array(
		$client->documentEmpty(
			id : -864476775157097810,
		),
		$client->document(
			id : 2445055752381898037,
			access_hash : -834867056747879462,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 33,
			mime_type : 'XzLjxPUmao57bvt6',
			size : -6394786732381903121,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'OpTcBuZnrUYENt3I',
				),
				$client->photoSize(
					type : 'a0MnfEKORGQVXzu9',
					w : 94,
					h : 4,
					size : 46,
				),
				$client->photoCachedSize(
					type : 'XGqz3ubtcR176Mpk',
					w : 77,
					h : 19,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'knehDzfsIV8j1NYb',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'f9cn6jo3AL21hQDN',
					w : 33,
					h : 88,
					sizes : array(66),
				),
				$client->photoPathSize(
					type : 'Mcb4AlX0aI3t7DFs',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'NhLznY2sHOAWIdwb',
					w : 28,
					h : 90,
					size : 45,
					video_start_ts : -1573824.79296875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -4843360604712923254,
					background_colors : array(61),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -4384535152936244711,
					background_colors : array(80),
				),
			),
			dc_id : 79,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 11,
					h : 18,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'tDvi2QP9x7EczmHr',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 76,
						x : 1308020.1708984375,
						y : -278246.8447265625,
						zoom : 1644417.8857421875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1593349.2607421875,
					w : 41,
					h : 1,
					preload_prefix_size : 56,
					video_start_ts : 1621626.0361328125,
					video_codec : 'YBhnl8jzMDQrTIAV',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 84,
					title : 'F4buhKZ0QW5SA2wj',
					performer : 'rCiWj4tBxYSvnVHp',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'LrGz4KkVceDv5YoW',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '2mSrj6I05Rwa9vHQ',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	video_cover : $client->photoEmpty(
		id : -9134742016159770852,
	),
	video_timestamp : 86,
	ttl_seconds : 43,
);
```