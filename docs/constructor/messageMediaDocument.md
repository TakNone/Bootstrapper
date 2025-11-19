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
		id : -5557296892977521872,
	),
	alt_documents : array(
		$client->documentEmpty(
			id : -1274477866568018026,
		),
		$client->document(
			id : 1517656402505050299,
			access_hash : -5386976662351501971,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 28,
			mime_type : 'jUFS4wArysQxm6Le',
			size : 8430519063366091470,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'bHYWcF5wV9yx1Spj',
				),
				$client->photoSize(
					type : 'wd1YNfMqOcPVz0gs',
					w : 14,
					h : 80,
					size : 60,
				),
				$client->photoCachedSize(
					type : '1h0q8fo6VwdUDlPe',
					w : 51,
					h : 19,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '4JRXtrwu92i3jAmf',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '32KolEMvB0POD7Cw',
					w : 16,
					h : 38,
					sizes : array(62),
				),
				$client->photoPathSize(
					type : 'aYBfJxGMWEpusvN4',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'aIUhE1RP89AuqDKo',
					w : 74,
					h : 54,
					size : 7,
					video_start_ts : -1226782.974609375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 1397219881474561082,
					background_colors : array(68),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -4187010868107460798,
					background_colors : array(15),
				),
			),
			dc_id : 81,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 36,
					h : 95,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'GFVRoULKP26YOXh1',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 39,
						x : -1742420.0615234375,
						y : -2041428.173828125,
						zoom : 2003997.845703125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -2085752.830078125,
					w : 33,
					h : 44,
					preload_prefix_size : 41,
					video_start_ts : -1200115.8583984375,
					video_codec : 'x2mW0HbJTiCtArOz',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 2,
					title : 'jOJzu48Vrove3WE7',
					performer : 'nmPfgt25XlV7hopH',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'RHYIBoGUvQ1PdhNr',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'iefKSdctCLHD5k3m',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	video_cover : $client->photoEmpty(
		id : 7403227777173184243,
	),
	video_timestamp : 83,
	ttl_seconds : 10,
);
```