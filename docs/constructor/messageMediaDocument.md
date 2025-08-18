# messageMediaDocument

**Description** : *Document \(video, audio, voice, sticker, any media type except photo\)*

**Layer** : 211

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
		id : -5609876393093258435,
	),
	alt_documents : array(
		$client->documentEmpty(
			id : 6442933248078813530,
		),
		$client->document(
			id : 4888394212795808712,
			access_hash : -5004334711626066270,
			file_reference : 'ILiveProto?S??',
			date : 99,
			mime_type : 'go91xPZitnVIw0Ub',
			size : 4727285055665259644,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '8DRowufMdjh4gcKm',
				),
				$client->photoSize(
					type : 'cbFjwJvfxEHR1SXg',
					w : 64,
					h : 55,
					size : 51,
				),
				$client->photoCachedSize(
					type : '0xUYlQ1CJs7LmI3f',
					w : 74,
					h : 33,
					bytes : 'Nt2LiveProto9??x?',
				),
				$client->photoStrippedSize(
					type : 'xqNmJGV5ZgeK7b6D',
					bytes : 'N$#TLiveProto[????',
				),
				$client->photoSizeProgressive(
					type : 'oC84eEXkuxaLMz6w',
					w : 90,
					h : 27,
					sizes : array(99),
				),
				$client->photoPathSize(
					type : 'YeO4mt3WXMJ8K0Us',
					bytes : 'ƌ?)?LiveProto????',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '3PZq8tIfJDwTWn6L',
					w : 30,
					h : 69,
					size : 74,
					video_start_ts : -2072482.9951171875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 4077348956699796548,
					background_colors : array(95),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -1200365702878692499,
					background_colors : array(10),
				),
			),
			dc_id : 7,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 100,
					h : 10,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'zCt0qQkvFJBeTDhd',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 608462.857421875,
					w : 8,
					h : 18,
					preload_prefix_size : 93,
					video_start_ts : 550251.5546875,
					video_codec : '9P5OSklQxtYAKUJ7',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 27,
					title : 'uvzCrSR8VQUb1MsH',
					performer : '1R5fqYE9G7mzHFLj',
					waveform : 'Y?a??LiveProto????',
				),
				$client->documentAttributeFilename(
					file_name : 'Ng3MzUJujtp10HQD',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'UzWY4he06wBf3txg',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
	video_cover : $client->photoEmpty(
		id : 3309419480737444537,
	),
	video_timestamp : 5,
	ttl_seconds : 32,
);
```