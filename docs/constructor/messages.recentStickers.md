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
			emoticon : 'h5cdoaT8mSlJbEnr',
			documents : array(-6905312775250127941),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : -4696285790003468713,
		),
		$client->document(
			id : 2808971373686999385,
			access_hash : -3623267732913859269,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 72,
			mime_type : 'AIlzB0OGdR2wV85i',
			size : 1391690641182702362,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'MNx0OI8gmjPihbc1',
				),
				$client->photoSize(
					type : 'v6mV35pY9I8GMfAs',
					w : 50,
					h : 77,
					size : 73,
				),
				$client->photoCachedSize(
					type : 'l92XhbqH5BWmSj3L',
					w : 48,
					h : 46,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'YGFhKag39zVcp4E5',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'xV9CJXqgMZzbAKhe',
					w : 64,
					h : 17,
					sizes : array(23),
				),
				$client->photoPathSize(
					type : 'mcU0Q6gAYvOJqk8b',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '2StrVTEkJj3bxX8R',
					w : 17,
					h : 36,
					size : 94,
					video_start_ts : -1623503.640625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -1698644120379047269,
					background_colors : array(99),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 7330713540310857546,
					background_colors : array(55),
				),
			),
			dc_id : 77,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 29,
					h : 95,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'Y7jT1aPkdKw0hiOB',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 19,
						x : 1061496.2646484375,
						y : 1871959.16015625,
						zoom : 636803.51953125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1012220.8515625,
					w : 8,
					h : 0,
					preload_prefix_size : 66,
					video_start_ts : -559320.1484375,
					video_codec : 'ko4wJZutc8iSX5Dz',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 89,
					title : 'BERL75V4Nw9cH1tX',
					performer : '9PlnzUwbFcTWJZYG',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '0tf6Gad3l9IQrTSL',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'FkvDpgSQ1iEY6zT0',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	dates : array(19),
);
```