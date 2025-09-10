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
		id : -6927705333325611488,
	),
	alt_documents : array(
		$client->documentEmpty(
			id : 8188335785071012042,
		),
		$client->document(
			id : -3275024032689420596,
			access_hash : 2820324900526001451,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 27,
			mime_type : 'VIbzdftLBjcwnGki',
			size : -4963551618597717868,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'gxuJMtcVWXfOD7l6',
				),
				$client->photoSize(
					type : 'kDrWaP3iwA6ZhCGR',
					w : 49,
					h : 0,
					size : 51,
				),
				$client->photoCachedSize(
					type : 'JfYgw3Ttj7WCApav',
					w : 22,
					h : 43,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'of0VuiFSr4LjwMG6',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '7gmZNeHlwyrQBJqT',
					w : 78,
					h : 67,
					sizes : array(69),
				),
				$client->photoPathSize(
					type : 'lOXTAL5oVhnaGsF6',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'OmSMWq1dr7BztPHu',
					w : 60,
					h : 43,
					size : 9,
					video_start_ts : -870521.736328125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 4921222720329736113,
					background_colors : array(87),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -1309285779837729691,
					background_colors : array(26),
				),
			),
			dc_id : 3,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 56,
					h : 17,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'E1ipqBJUNdxYQRIu',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 297694.1103515625,
					w : 90,
					h : 42,
					preload_prefix_size : 39,
					video_start_ts : 461121.4658203125,
					video_codec : 'M56FIyGwQsWH2fmT',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 28,
					title : 'q7RMBIYAKWwxJ9bE',
					performer : 'TgpocGmRdN2hFVsb',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'dRxPqyGwLajKWth9',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Ahue1R4MKtTFLCV3',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
	video_cover : $client->photoEmpty(
		id : 2272334958590003109,
	),
	video_timestamp : 84,
	ttl_seconds : 58,
);
```