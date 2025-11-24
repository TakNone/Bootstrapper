# messages.recentStickers

**Description** : *Recently used stickers*

**Layer** : 218

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
			emoticon : '9xHR4clXOr53hQST',
			documents : array(-4551644968975567893),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : -2680635497551297168,
		),
		$client->document(
			id : 4479277593887120902,
			access_hash : -8637574578697818704,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 34,
			mime_type : 'Tk137dDj6pi48Lag',
			size : -5080914268725397384,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '5KkBEgzNdOGHWC9M',
				),
				$client->photoSize(
					type : 'FsPjgiHNwa2J4BQ5',
					w : 76,
					h : 7,
					size : 96,
				),
				$client->photoCachedSize(
					type : 'jx8UIEHLlOPBvMQF',
					w : 84,
					h : 22,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'HAXW7ZwhKIdiOaeM',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'eXYtuFJGHA8lCrUN',
					w : 85,
					h : 33,
					sizes : array(74),
				),
				$client->photoPathSize(
					type : 'mSRrciwPxjHIselV',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'ch9kYbp5JwISUTaP',
					w : 11,
					h : 46,
					size : 29,
					video_start_ts : 36451.4677734375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -7399836244607211997,
					background_colors : array(80),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 2015209615376498373,
					background_colors : array(0),
				),
			),
			dc_id : 24,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 76,
					h : 31,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'WUly6DsOn3mJF8Ad',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 26,
						x : -1623443.0185546875,
						y : -1733097.9794921875,
						zoom : -1039242.318359375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -588875.244140625,
					w : 38,
					h : 21,
					preload_prefix_size : 90,
					video_start_ts : 1602396.4482421875,
					video_codec : 'oRHrkSiKm4pW7xAs',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 29,
					title : 'gJ1uXe6pWD7adZoj',
					performer : 'sSnqcrx6FaC0MiPQ',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'Daet2dr8Yf5HUPLn',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'pN8SbsEKnvILW6Hd',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	dates : array(37),
);
```