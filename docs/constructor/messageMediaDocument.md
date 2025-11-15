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
		id : -5331179459028604673,
	),
	alt_documents : array(
		$client->documentEmpty(
			id : 6936806730078539731,
		),
		$client->document(
			id : -4173201250394716133,
			access_hash : -4855064118158086440,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 95,
			mime_type : 'eJozYfBbPOS1svA2',
			size : -4830567748664868334,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'vJtRTZIjs594oU71',
				),
				$client->photoSize(
					type : 'eLthcDTYg60Mrl73',
					w : 71,
					h : 60,
					size : 82,
				),
				$client->photoCachedSize(
					type : 'NpBki2eMTxz4gERY',
					w : 48,
					h : 27,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '7GgQDSjKz2rAOkl5',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'DlyU1gfoVKRc62eT',
					w : 28,
					h : 77,
					sizes : array(0),
				),
				$client->photoPathSize(
					type : 'ZiwulG1MRDme3g0j',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'FY82t3XH5doMUV6m',
					w : 46,
					h : 51,
					size : 11,
					video_start_ts : 1461385.5478515625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -3072006602663035550,
					background_colors : array(96),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -3617698126401305933,
					background_colors : array(79),
				),
			),
			dc_id : 25,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 65,
					h : 81,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'bsHF9nvzNEIKSPhM',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -683184.3935546875,
					w : 54,
					h : 92,
					preload_prefix_size : 53,
					video_start_ts : 1629246.1259765625,
					video_codec : 'D8NubmoZrzR7Ynls',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 4,
					title : '59EYv1DGXtFcZyUn',
					performer : 'MCL7met8KFsVJgjn',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'Lt1rCpBOMZnokPEb',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'QlMTNmAuOVCKF5Eh',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
	video_cover : $client->photoEmpty(
		id : 1705392497561769780,
	),
	video_timestamp : 13,
	ttl_seconds : 59,
);
```