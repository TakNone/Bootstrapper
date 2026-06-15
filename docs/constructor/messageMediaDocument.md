# messageMediaDocument

**Description** : *Document \(video, audio, voice, sticker, any media type except photo\)*

**Layer** : 227

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
		id : 4332305277376696032,
	),
	alt_documents : array(
		$client->documentEmpty(
			id : -8189058746548153266,
		),
		$client->document(
			id : 6576215783308808119,
			access_hash : -7670331400204314104,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 65,
			mime_type : 'xMyIgWmeQhDBF9Td',
			size : -6049213647339078249,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'mIYGJjp2bEq48hgw',
				),
				$client->photoSize(
					type : 'q1nTEtovre0BPS4j',
					w : 12,
					h : 41,
					size : 27,
				),
				$client->photoCachedSize(
					type : 'Wks8pBeYPthT1IJg',
					w : 43,
					h : 93,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'QMaDksgVo7wUZr0J',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'JWmbzdFC9IpKaXPo',
					w : 94,
					h : 77,
					sizes : array(95),
				),
				$client->photoPathSize(
					type : 'CxqsXIMvcR91Teut',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'niMZc0AtVRWzE8pH',
					w : 42,
					h : 22,
					size : 92,
					video_start_ts : 741941.85546875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 5918120247910588198,
					background_colors : array(43),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 2495742391909586010,
					background_colors : array(52),
				),
			),
			dc_id : 88,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 64,
					h : 49,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'G5xzgXHWbAFL27cR',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 9,
						x : -465499.203125,
						y : -247588.501953125,
						zoom : -1606648.2509765625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1842546.3203125,
					w : 75,
					h : 57,
					preload_prefix_size : 38,
					video_start_ts : -1042943.517578125,
					video_codec : 'ZWKhwzujEQqxrgGR',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 30,
					title : 'Cg7Dh8zkJ4OwXjIq',
					performer : 'MPrqoc32lvZNnbkT',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'pZes8Ky7o9FCO4lJ',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'tFilVEIxGmR7YrO2',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	video_cover : $client->photoEmpty(
		id : -4806009860728830271,
	),
	video_timestamp : 35,
	ttl_seconds : 89,
);
```