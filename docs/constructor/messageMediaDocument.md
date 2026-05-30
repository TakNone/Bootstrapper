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
		id : 371953267119612899,
	),
	alt_documents : array(
		$client->documentEmpty(
			id : 8159838849812757708,
		),
		$client->document(
			id : 642131354672152266,
			access_hash : 4791772500420781475,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 28,
			mime_type : '1UXVP3kEYtBNdW9C',
			size : 3683361324778704216,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'oSeaY7JL1Hgs0zK4',
				),
				$client->photoSize(
					type : 'RDNXbef0Ld5Q3Y7u',
					w : 86,
					h : 59,
					size : 92,
				),
				$client->photoCachedSize(
					type : 'pyw7iumzGD2vqXlW',
					w : 22,
					h : 12,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'vAj2E4RkxIZNy7Wq',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '8Lk5FcK6Jm4SCgly',
					w : 90,
					h : 56,
					sizes : array(70),
				),
				$client->photoPathSize(
					type : 'kbQiTD1S6do93gqN',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'ITaumstOc9KpPi5e',
					w : 98,
					h : 72,
					size : 2,
					video_start_ts : -834807.6064453125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -2983164649303890247,
					background_colors : array(58),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -6796454157916350324,
					background_colors : array(2),
				),
			),
			dc_id : 21,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 10,
					h : 88,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '0moV3xphkK1iUdn8',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 97,
						x : 246510.4248046875,
						y : -788705.56640625,
						zoom : 1778703.9267578125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1538857.6171875,
					w : 57,
					h : 33,
					preload_prefix_size : 44,
					video_start_ts : 1093793.2666015625,
					video_codec : 'P8c3Hms0Q7hvLZAo',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 79,
					title : 'PVXxwSMELhkiGYoU',
					performer : 'DbJQ9w7TXht3vuEO',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'sqdrTLxawGAkK5W1',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'durv2qm3aBElJOpe',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	video_cover : $client->photoEmpty(
		id : 3577726616629336019,
	),
	video_timestamp : 4,
	ttl_seconds : 98,
);
```