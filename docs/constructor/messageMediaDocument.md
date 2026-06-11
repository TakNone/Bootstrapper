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
		id : -880217077177708669,
	),
	alt_documents : array(
		$client->documentEmpty(
			id : 7874793997497465848,
		),
		$client->document(
			id : -3878808450051639924,
			access_hash : -1078980062493561268,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 79,
			mime_type : 'P642cJ1yUSQGZjTA',
			size : 7772985281380172378,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'udcY8amFLslxQ26j',
				),
				$client->photoSize(
					type : 'HTezJoq5QEIu169F',
					w : 17,
					h : 93,
					size : 9,
				),
				$client->photoCachedSize(
					type : 'C6Pe0nKtVULJf4AS',
					w : 70,
					h : 48,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'vkg7aNMJl6oy2ieI',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '1jILfQ4hKWezwSOp',
					w : 49,
					h : 14,
					sizes : array(39),
				),
				$client->photoPathSize(
					type : 'beo98YSKjkNgGwtC',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'hsznuvo4QCiqBgLH',
					w : 70,
					h : 79,
					size : 13,
					video_start_ts : 79931.0068359375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -5610295018811115009,
					background_colors : array(5),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -6861177852698513210,
					background_colors : array(29),
				),
			),
			dc_id : 23,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 93,
					h : 95,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '4pPHvyW03LMjbZuA',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 49,
						x : -1123898.958984375,
						y : -1179991.1513671875,
						zoom : -1721412.5185546875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1015084.666015625,
					w : 84,
					h : 45,
					preload_prefix_size : 76,
					video_start_ts : -1072823.544921875,
					video_codec : 'YLBrhFspN2Jy6aKq',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 14,
					title : 'AoNcRKebp9jZhylO',
					performer : '01aHJ5zhsfnk4ZOR',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'Tngjwr6cVudIKJzL',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'MJCDGo5ZBSFwy9hu',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	video_cover : $client->photoEmpty(
		id : 4037701169680612267,
	),
	video_timestamp : 69,
	ttl_seconds : 45,
);
```