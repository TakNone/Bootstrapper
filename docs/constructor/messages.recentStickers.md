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
			emoticon : 'xCt23OuNr18vUhV7',
			documents : array(2026289612854772757),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : -5271064467788073311,
		),
		$client->document(
			id : -6050690592776676476,
			access_hash : 6727867840381736132,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 67,
			mime_type : 'BS8VXd6U2YR1atWn',
			size : 6929850925392875353,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'JgVcyKv431O7XDMq',
				),
				$client->photoSize(
					type : 'uFAGB9Ol1Itsc8yq',
					w : 25,
					h : 68,
					size : 37,
				),
				$client->photoCachedSize(
					type : 't3PQarO10NunbY8y',
					w : 85,
					h : 23,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'B9Nr625jkWtD0zCF',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '7SgwUdmAafRse1oP',
					w : 89,
					h : 31,
					sizes : array(75),
				),
				$client->photoPathSize(
					type : 'VCQ5HP0hULv4uNET',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'DfQoe6HtOsjvrI3S',
					w : 10,
					h : 76,
					size : 85,
					video_start_ts : 1923354.806640625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -641053366287577715,
					background_colors : array(4),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -8756704969113696734,
					background_colors : array(97),
				),
			),
			dc_id : 3,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 67,
					h : 53,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'YuZBsKWzoCbT0Ovn',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 40,
						x : -585424.4765625,
						y : 1403869.0283203125,
						zoom : 836362.1767578125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 56073.7353515625,
					w : 74,
					h : 5,
					preload_prefix_size : 84,
					video_start_ts : -202413.7041015625,
					video_codec : 'oqAsrWj0FcN83fST',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 79,
					title : 'mNBOofzTSCFuLY6h',
					performer : '2FsLOIAwN5gPCdVZ',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'vX6ZKJI3gPRNyCOf',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'lKMbcmyLdIqk1SEh',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	dates : array(43),
);
```