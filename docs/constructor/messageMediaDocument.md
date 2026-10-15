# messageMediaDocument

**Description** : *Document \(video, audio, voice, sticker, any media type except photo\)*

**Layer** : 229

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
		id : -8964225623682510451,
	),
	alt_documents : array(
		$client->documentEmpty(
			id : 3504970014359186940,
		),
		$client->document(
			id : -3580901465314807894,
			access_hash : -4796136367565552858,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 46,
			mime_type : 'fRZVlc32SuJNx0kI',
			size : -4208817565326994205,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'TaiMpw3xoKlvU1cE',
				),
				$client->photoSize(
					type : 'URkFXL9W4Dpa2tdw',
					w : 7,
					h : 88,
					size : 1,
				),
				$client->photoCachedSize(
					type : 'BnuqRY1CXQPalf5M',
					w : 9,
					h : 95,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'd7jbEtZDrhOiCcMG',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'z1pNUCITGcwOjQtm',
					w : 22,
					h : 27,
					sizes : array(94),
				),
				$client->photoPathSize(
					type : 'aOVN8s0zPYFUnc4k',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '7BdUsjWw1oYfH5Gr',
					w : 100,
					h : 91,
					size : 48,
					video_start_ts : 184794.240234375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -9168560601313097778,
					background_colors : array(51),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 7379412899790322570,
					background_colors : array(3),
				),
			),
			dc_id : 29,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 65,
					h : 92,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'JWYf2LqIrcv5Nypt',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 41,
						x : -1871403.1689453125,
						y : 529788.2978515625,
						zoom : 1563791.19921875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1861635.4111328125,
					w : 16,
					h : 31,
					preload_prefix_size : 40,
					video_start_ts : -1334645.970703125,
					video_codec : '6VyenW4Su35aHFCK',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 70,
					title : 'ysT6gXncqhK4Zl8S',
					performer : 'l7mF0ixUSfhpoQzJ',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '5zXKUonvtdJxuh4c',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'qHpbPRKBEMCmwvxX',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	video_cover : $client->photoEmpty(
		id : 8487536989621238670,
	),
	video_timestamp : 50,
	ttl_seconds : 16,
);
```