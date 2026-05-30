# messageMediaDocument

**Description** : *Document \(video, audio, voice, sticker, any media type except photo\)*

**Layer** : 222

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
		id : -8697149434021418329,
	),
	alt_documents : array(
		$client->documentEmpty(
			id : -6403886394613323151,
		),
		$client->document(
			id : 1190621213301677773,
			access_hash : 8987507696036932151,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 97,
			mime_type : 'mPOZCFalGDieH7TI',
			size : 3554365609371911252,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'Plo6OWLNw1shMJIY',
				),
				$client->photoSize(
					type : 'PrhHW4sAmOtFS2IY',
					w : 74,
					h : 52,
					size : 9,
				),
				$client->photoCachedSize(
					type : 'E39VaxQSckoqFtXI',
					w : 66,
					h : 1,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '3WALJFi96Vv5rQcS',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '2jgcU1Q3q5uarOnB',
					w : 75,
					h : 86,
					sizes : array(12),
				),
				$client->photoPathSize(
					type : 'JxKuqbrDclzIZf6Y',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'xA8h4RWvZf96Vd7l',
					w : 19,
					h : 93,
					size : 26,
					video_start_ts : 1463620.3896484375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 3400163017016921559,
					background_colors : array(5),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 4350532570588597439,
					background_colors : array(29),
				),
			),
			dc_id : 54,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 49,
					h : 25,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'yVgmzt9csLQBMj8i',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 69,
						x : -307483.072265625,
						y : -918261.7763671875,
						zoom : 140720.8466796875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1965111.5751953125,
					w : 12,
					h : 87,
					preload_prefix_size : 22,
					video_start_ts : 1614966.046875,
					video_codec : 'BwE9qkzxNaPDLGZR',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 88,
					title : '0LfpCBe5UkHi2ZmQ',
					performer : 'UKB4HdjwozF0Zcsv',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '3ldFGy1gtLkD2RMn',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'RreMqHK3JZ9iXF8f',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	video_cover : $client->photoEmpty(
		id : -7337880898322669274,
	),
	video_timestamp : 22,
	ttl_seconds : 7,
);
```