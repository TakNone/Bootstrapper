# messages.recentStickers

**Description** : *Recently used stickers*

**Layer** : 227

```tl
messages.recentStickers#88d37c56 hash:long packs:Vector<StickerPack> stickers:Vector<Document> dates:Vector<int> = messages.RecentStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>packs</mark> | [`Vector<StickerPack>`](type/StickerPack) | Emojis associated to stickers |
| <mark>stickers</mark> | [`Vector<Document>`](type/Document) | Recent stickers |
| <mark>dates</mark> | [`Vector<int>`](type/int) | When was each sticker last used |

---

## Type

[messages.RecentStickers](type/messages.RecentStickers)

---

## Example

```php
$messagesRecentStickers = $client->messages->recentStickers(
	hash : 0,
	packs : array(
		$client->stickerPack(
			emoticon : 'nkg9NCTLErI8DdeF',
			documents : array(-1945875766658182463),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : 4999412910886608044,
		),
		$client->document(
			id : 4205982179652742172,
			access_hash : 9181288291973763979,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 86,
			mime_type : 'z1i7x4f5St2JgArK',
			size : 1401448374251228787,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'WjKI9MwEY0gk3s1a',
				),
				$client->photoSize(
					type : 'c2ugXHJCRLKkd8QY',
					w : 43,
					h : 56,
					size : 21,
				),
				$client->photoCachedSize(
					type : 'dRSmFti7CepXqv9l',
					w : 13,
					h : 100,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'Oxtj761IksndKh45',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'TRs6Mytoa2PgSbVw',
					w : 94,
					h : 38,
					sizes : array(40),
				),
				$client->photoPathSize(
					type : 'vWXK9YU5sIedA3NR',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'zGLPiSbueXNYAoKc',
					w : 18,
					h : 7,
					size : 23,
					video_start_ts : -1594665.962890625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 5137923365616555736,
					background_colors : array(44),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 856758698536135239,
					background_colors : array(77),
				),
			),
			dc_id : 17,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 29,
					h : 7,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'AkT1iouEzjd7LSDZ',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 46,
						x : -1250236.3212890625,
						y : -1432448.6474609375,
						zoom : -1794505.1494140625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1429427.90234375,
					w : 49,
					h : 9,
					preload_prefix_size : 80,
					video_start_ts : -295712.5751953125,
					video_codec : '9UGxgpQn1f2B5S3b',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 8,
					title : 'iNpWfDeyGYvXhd9P',
					performer : 'yBg7C9ia4FJjeTq2',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'i6V3SkQ50MOybH4g',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'ilLeDkFtg73xNvzb',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	dates : array(17),
);
```