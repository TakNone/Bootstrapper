# messageMediaDocument

**Description** : *Document \(video, audio, voice, sticker, any media type except photo\)*

**Layer** : 214

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
| **video_cover** | [`flags.9?Photo`](type/Photo) | NOTHING |
| **video_timestamp** | [`flags.10?int`](type/int) | NOTHING |
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
		id : 9180426465097810351,
	),
	alt_documents : array(
		$client->documentEmpty(
			id : 2671710246541320747,
		),
		$client->document(
			id : 146244431731399562,
			access_hash : 254132860908014946,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 58,
			mime_type : 'QDysquJw4E3vdK08',
			size : 8933362258828236033,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'NCsE4u98XRb6BmyY',
				),
				$client->photoSize(
					type : 'O1PeKCL3HMcF2lJw',
					w : 35,
					h : 30,
					size : 79,
				),
				$client->photoCachedSize(
					type : 'GutqTpRk537NCbjo',
					w : 19,
					h : 39,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'RDMJ3a8vmkpCZfuw',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '6csjqhVXgx8tbKFp',
					w : 88,
					h : 13,
					sizes : array(46),
				),
				$client->photoPathSize(
					type : 'zHarVwBSGTtbd5Pl',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'KfciMetBRhg7JW4u',
					w : 77,
					h : 56,
					size : 81,
					video_start_ts : -887127.9248046875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -1287190354607761165,
					background_colors : array(16),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 2105290807593409370,
					background_colors : array(23),
				),
			),
			dc_id : 91,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 65,
					h : 34,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '3eLI5pOwJBmd1kcR',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -483267.99609375,
					w : 6,
					h : 95,
					preload_prefix_size : 31,
					video_start_ts : 1342452.2685546875,
					video_codec : 'iJ9rYxDAX4vg31lm',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 2,
					title : 'V4xjUXS1fYRM5D89',
					performer : 'SqLgFnAlwvhk9e42',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'fTSBqg9KHUenEItQ',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '0UhHLfuqPdKvcazS',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
	video_cover : $client->photoEmpty(
		id : 696827036162782330,
	),
	video_timestamp : 34,
	ttl_seconds : 7,
);
```