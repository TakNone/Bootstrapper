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
			emoticon : 'FZ4XgLSA3f1TorRu',
			documents : array(6380021124176390917),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : 2604450230792111708,
		),
		$client->document(
			id : -8279782549497990374,
			access_hash : -578984379162920036,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 78,
			mime_type : 'zENqtXb3u6MDl5sU',
			size : 955718141329778329,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'zB8YVlI0qL31Wg7s',
				),
				$client->photoSize(
					type : 'XyIrRYVfmlSMwOZP',
					w : 87,
					h : 79,
					size : 78,
				),
				$client->photoCachedSize(
					type : 'yLkSZGxjQ4Fm6cP7',
					w : 14,
					h : 25,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'wN6mluPYhnFxApsU',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'VxlFC2voZnTaWuIA',
					w : 14,
					h : 12,
					sizes : array(71),
				),
				$client->photoPathSize(
					type : 'pcz75XbvWw40d2es',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'snAejpw8Q0NFlEvS',
					w : 93,
					h : 70,
					size : 34,
					video_start_ts : 283906.09765625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 3806550236687745261,
					background_colors : array(13),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 7929593740701841502,
					background_colors : array(19),
				),
			),
			dc_id : 38,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 70,
					h : 32,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '48GMNujn7xiLtPv9',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 13,
						x : 191306.2138671875,
						y : 352782.2626953125,
						zoom : -1320139.6083984375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -462968.517578125,
					w : 41,
					h : 6,
					preload_prefix_size : 25,
					video_start_ts : -361858.251953125,
					video_codec : 'ROiYZ4mTyzKDQBjv',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 66,
					title : 'vTkSzKsy3Ynr1Wwu',
					performer : 'QjoWIaxlfvwyHBkE',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'KJF8NwhuL4M0Ggrf',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'J9Q47HfVsMjGDSRb',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	dates : array(20),
);
```