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
		id : 3144600439403304604,
	),
	alt_documents : array(
		$client->documentEmpty(
			id : -1129443190486989286,
		),
		$client->document(
			id : -2330707892195102444,
			access_hash : 4422603550204892867,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 20,
			mime_type : '7IP6ZBYqCT5Q3jJ2',
			size : -4689178273053207170,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'rWDJIOFsenu7vdYU',
				),
				$client->photoSize(
					type : 'lOSC3DmFbVL6xiNI',
					w : 36,
					h : 86,
					size : 55,
				),
				$client->photoCachedSize(
					type : 'UW2nJ8jdET1aecMG',
					w : 16,
					h : 22,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'zf3Hi7uA8raRL0Xx',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'x4CNUAE96yD2guhn',
					w : 29,
					h : 72,
					sizes : array(86),
				),
				$client->photoPathSize(
					type : 'z29XdtawkinvTBr5',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '8YlX5hZvLkue7y9O',
					w : 88,
					h : 98,
					size : 15,
					video_start_ts : -500263.7666015625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -2927632114695942904,
					background_colors : array(31),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 8700644997806092893,
					background_colors : array(9),
				),
			),
			dc_id : 38,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 34,
					h : 21,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'IwiWbFj0g8QK13dt',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 61,
						x : 473666.0556640625,
						y : -1905934.68359375,
						zoom : 1805053.3291015625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1687980.1767578125,
					w : 94,
					h : 27,
					preload_prefix_size : 67,
					video_start_ts : -526735.1767578125,
					video_codec : 'BAMbWkpraDZlUH1h',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 18,
					title : 'jQyBKXYm6ig0vdf5',
					performer : '8WnzdhFDHuCEplX4',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'KGbwuq042HsRPFXg',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'dfhrQvFqwGogOLc4',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	video_cover : $client->photoEmpty(
		id : -6822594377478553542,
	),
	video_timestamp : 38,
	ttl_seconds : 100,
);
```