# messageMediaDocument

**Description** : *Document \(video, audio, voice, sticker, any media type except photo\)*

**Layer** : 216

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
		id : -105729390853088593,
	),
	alt_documents : array(
		$client->documentEmpty(
			id : 3711879706175598863,
		),
		$client->document(
			id : 5827552566523097457,
			access_hash : 6182153235709025606,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 80,
			mime_type : 'Dz3vI5eLwaARTl7F',
			size : 8879321258703518270,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'DihWgI0JFlzfd6yj',
				),
				$client->photoSize(
					type : 'LjDm7ukdUs4VQoCH',
					w : 4,
					h : 65,
					size : 15,
				),
				$client->photoCachedSize(
					type : 'ldMCGyLS0eKUHYsB',
					w : 72,
					h : 46,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'DMGh0qJzuRET3sea',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'BZe2DLuMsv08NGgd',
					w : 65,
					h : 11,
					sizes : array(6),
				),
				$client->photoPathSize(
					type : 'fMFkCpQGIqm6HxW4',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'cb4iaHM1GpvV5y3Z',
					w : 85,
					h : 42,
					size : 12,
					video_start_ts : -90709.876953125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 1007017381359043654,
					background_colors : array(49),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -8164766787146653317,
					background_colors : array(98),
				),
			),
			dc_id : 29,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 11,
					h : 26,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'EpKXkq5gwHYUOcnB',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1272023.95703125,
					w : 17,
					h : 37,
					preload_prefix_size : 96,
					video_start_ts : -989566.4130859375,
					video_codec : 'SlhAyfbBz7enTcsR',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 12,
					title : '1KdR0HwqQMV84jDm',
					performer : '0q8PgSDcRKnYkdiO',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'wMsF3AiQpLSqzOCR',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'aJX1ARh6yYqFDLvB',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
	video_cover : $client->photoEmpty(
		id : -240611463134841117,
	),
	video_timestamp : 5,
	ttl_seconds : 13,
);
```