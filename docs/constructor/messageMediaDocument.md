# messageMediaDocument

**Description** : *Document \(video, audio, voice, sticker, any media type except photo\)*

**Layer** : 233

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
| **ttl_seconds** | [`flags.2?int`](type/int) | Time to live of self-destructing document, can be 0 to disable self-destruction, 0x7FFFFFFF to self-destruct the document immediately after it's played; otherwise self-destructs ttl_seconds after it's played |

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
		id : 7788570630316550783,
	),
	alt_documents : array(
		$client->documentEmpty(
			id : -3799169800990561358,
		),
		$client->document(
			id : -1429119154428946270,
			access_hash : -2263974925447153095,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 14,
			mime_type : 'UYZRMjOSPlbheHyX',
			size : 2620970177504611493,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'xf6F8tXaN7Phryli',
				),
				$client->photoSize(
					type : 'NPHqywOxSaZI0B1p',
					w : 2,
					h : 42,
					size : 63,
				),
				$client->photoCachedSize(
					type : 'D8rNOpfMV3lcwJbI',
					w : 87,
					h : 70,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'ehREU8lg6zumYxBO',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'ngwZG85uFBieNtCv',
					w : 4,
					h : 49,
					sizes : array(78),
				),
				$client->photoPathSize(
					type : 'EObN5u0hxDJFifrw',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'TAqpOzJICWb7Q6SZ',
					w : 26,
					h : 79,
					size : 8,
					video_start_ts : 1435494.4658203125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 4720026091375270966,
					background_colors : array(65),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -6296755657560154456,
					background_colors : array(5),
				),
			),
			dc_id : 49,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 91,
					h : 12,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'QbH1k3lMrSW725ev',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 59,
						x : 1709683.603515625,
						y : -1600325.7509765625,
						zoom : -1671242.0302734375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 848650.462890625,
					w : 4,
					h : 37,
					preload_prefix_size : 91,
					video_start_ts : 2025045.263671875,
					video_codec : 'gTO7e8LHlDxuNAZK',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 15,
					title : 'kpFvYDTZb6UEeBo0',
					performer : 'lcyqeFLxQTguMCzd',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'fq8gDilXFetVLK5z',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'NX9Gd6UR4BEWAOpy',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	video_cover : $client->photoEmpty(
		id : 2842571696947212304,
	),
	video_timestamp : 61,
	ttl_seconds : 21,
);
```