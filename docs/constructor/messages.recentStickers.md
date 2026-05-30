# messages.recentStickers

**Description** : *Recently used stickers*

**Layer** : 222

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
			emoticon : 't8ufkSjxBCUlRbd4',
			documents : array(-4586833848607931171),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : 8290573958135670712,
		),
		$client->document(
			id : 2877613253160348948,
			access_hash : 1745955543784655678,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 4,
			mime_type : 'wVh0D61GyECLUPji',
			size : -3195477685037545856,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '8JLkmCgMSWNTtrxB',
				),
				$client->photoSize(
					type : 'SruGOEZUjxXFaP7t',
					w : 19,
					h : 85,
					size : 41,
				),
				$client->photoCachedSize(
					type : 'N4Ca8jhKW1bfxUIA',
					w : 62,
					h : 48,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'GmLsSWqw0RHlENyP',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'bMnkca4CZxBKtNqo',
					w : 48,
					h : 13,
					sizes : array(17),
				),
				$client->photoPathSize(
					type : 'I8c7wZrhNGbRQHlC',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'DtrPhSZgwMpnjleR',
					w : 8,
					h : 73,
					size : 81,
					video_start_ts : -556178.2529296875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -2526668568480518614,
					background_colors : array(76),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 3815817082031858236,
					background_colors : array(20),
				),
			),
			dc_id : 62,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 35,
					h : 43,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'KkvDme0aYsGPBC3h',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 61,
						x : -560239.5029296875,
						y : 1180529.2822265625,
						zoom : -1641834.1142578125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1824203.0048828125,
					w : 81,
					h : 41,
					preload_prefix_size : 38,
					video_start_ts : -488103.8388671875,
					video_codec : 'Ao1RraOMJf5pQxwK',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 16,
					title : 'wNLdzXG1nhTKoS9A',
					performer : 'MgUZ8aEyBtn0LeWw',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'M27P6XWYcEnu0ema',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'CvKJ6Lda0V7IHsj9',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	dates : array(92),
);
```