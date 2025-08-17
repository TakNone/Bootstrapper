# messageMediaDocument

**Description** : *Document (video, audio, voice, sticker, any media type except photo)*

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
		id : -7495462883060512380,
	),
	alt_documents : array(
		$client->documentEmpty(
			id : -1007224623417832574,
		),
		$client->document(
			id : -4624625768092804569,
			access_hash : -753475168328058510,
			file_reference : 'l??LiveProtoH?A??',
			date : 49,
			mime_type : 'xtn8KOkC9dXhRpuY',
			size : 792317010246129813,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'SUq6I8R3DNkiXbOn',
				),
				$client->photoSize(
					type : 'BYgi09dy8t5INsaS',
					w : 86,
					h : 57,
					size : 56,
				),
				$client->photoCachedSize(
					type : 'd7t0MswWaoXZjLOG',
					w : 51,
					h : 100,
					bytes : '???WLiveProto.????',
				),
				$client->photoStrippedSize(
					type : 'I0cqgRG2fy1kK7ZB',
					bytes : '?3??xLiveProto????z',
				),
				$client->photoSizeProgressive(
					type : 'rOKo1V6InMLmeBNg',
					w : 40,
					h : 14,
					sizes : array(31),
				),
				$client->photoPathSize(
					type : 'zJQLYP2sAIf6UiCh',
					bytes : '???l4LiveProtob?+.',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 't5m7f9BGHIok4Jha',
					w : 28,
					h : 35,
					size : 97,
					video_start_ts : 190569.275390625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 3304672752553659033,
					background_colors : array(20),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -6294740023488005615,
					background_colors : array(95),
				),
			),
			dc_id : 97,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 72,
					h : 85,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'Auy27BFapJePkQ15',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1991417.0400390625,
					w : 47,
					h : 95,
					preload_prefix_size : 37,
					video_start_ts : 1145686.421875,
					video_codec : 'vQ6dSWtPuri0fL7b',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 75,
					title : 'cex2V6LpdOQ8HCjU',
					performer : '0FK8aP3nqLyxrcgC',
					waveform : 'Y?J?LiveProto?w?+?',
				),
				$client->documentAttributeFilename(
					file_name : '1klOAtzdc4jK2XhQ',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'XfURveKPQOHnBy5z',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
	video_cover : $client->photoEmpty(
		id : -9049146951335935961,
	),
	video_timestamp : 27,
	ttl_seconds : 83,
);
```