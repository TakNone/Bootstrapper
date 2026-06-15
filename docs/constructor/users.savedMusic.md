# users.savedMusic

**Description** : *List of songs currently pinned on a user&#039;s profile, see here &raquo; for more info*

**Layer** : 227

```tl
users.savedMusic#34a2f297 count:int documents:Vector<Document> = users.SavedMusic;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of songs (can be bigger than documents depending on the passed limit, and the default maximum limit in which case pagination is required) |
| <mark>documents</mark> | [`Vector<Document>`](type/Document) | Songs |

---

## Type

[users.SavedMusic](type/users.SavedMusic)

---

## Example

```php
$usersSavedMusic = $client->users->savedMusic(
	count : 100,
	documents : array(
		$client->documentEmpty(
			id : -4860478240585477690,
		),
		$client->document(
			id : 2413919402381907889,
			access_hash : -4180003094638436432,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 77,
			mime_type : 'D16QNV9y74xP2pKr',
			size : -3660376606923592617,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'Y2FNmGWiTejV4Dxw',
				),
				$client->photoSize(
					type : '3c0PkK9RjSYdsIno',
					w : 46,
					h : 35,
					size : 18,
				),
				$client->photoCachedSize(
					type : 'vT7mqQrcAEz0wJyi',
					w : 7,
					h : 65,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'UiFkv6Lrq1Z0G8sp',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'G1nO5LdJeY96CokK',
					w : 70,
					h : 98,
					sizes : array(2),
				),
				$client->photoPathSize(
					type : '5QObMKzWuHTt0Ph9',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'Z0yUVxiY79Ws2z3L',
					w : 72,
					h : 15,
					size : 58,
					video_start_ts : 1101889.447265625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 1724477945258138124,
					background_colors : array(85),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -8025999409881965643,
					background_colors : array(94),
				),
			),
			dc_id : 97,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 98,
					h : 56,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'mxpynBSlEQUgCGj3',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 99,
						x : -468902.08984375,
						y : 2016051.22265625,
						zoom : -1012259.0888671875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1887824.7578125,
					w : 90,
					h : 61,
					preload_prefix_size : 12,
					video_start_ts : -433998.4140625,
					video_codec : 'aBsxFUWHz76SEfPR',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 81,
					title : 'UNSnQwjaTMFpDi5P',
					performer : 'QWVqKkz28AlgY1pU',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'BSe4vAzTrEKgxd5u',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '675nOe13jFfqTx2I',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```