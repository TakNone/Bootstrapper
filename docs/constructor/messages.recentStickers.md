# messages.recentStickers

**Description** : *Recently used stickers*

**Layer** : 229

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
			emoticon : 'mILORQwphTCye73H',
			documents : array(2336464735264017549),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : -6945849458799965102,
		),
		$client->document(
			id : -2529946704993982557,
			access_hash : -4597430619953038295,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 41,
			mime_type : 'fJtXxhZ28KEWvURn',
			size : 3712826438739844064,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'irSqz9lV6L3Hxbew',
				),
				$client->photoSize(
					type : 'EwWiORDcxPmpSNna',
					w : 37,
					h : 51,
					size : 47,
				),
				$client->photoCachedSize(
					type : 'oreF0z2bOxsR7pHN',
					w : 95,
					h : 94,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'TslBrHGtL9iMkWw3',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '7Tojx9H2ESAB0yCP',
					w : 46,
					h : 16,
					sizes : array(15),
				),
				$client->photoPathSize(
					type : 'NnR8qIJ1A7gyZ9az',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '1PgMYSq0XLf6ms8N',
					w : 54,
					h : 38,
					size : 37,
					video_start_ts : -1611662.41796875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -4102074317511650570,
					background_colors : array(11),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 2205723715185796732,
					background_colors : array(32),
				),
			),
			dc_id : 48,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 73,
					h : 10,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '9BpUbTDyoLnQMq7F',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 86,
						x : 1654455.33203125,
						y : -1844243.8427734375,
						zoom : -755740.4189453125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1631916.21875,
					w : 9,
					h : 30,
					preload_prefix_size : 14,
					video_start_ts : -1039046.47265625,
					video_codec : 'PkVUj4ZEeLimd5QI',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 10,
					title : 'LGIUBvZgnhuQXoV3',
					performer : 'y3a91CbFT4OiVqN6',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'tagH8cbw9q2eJMSr',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'zeEmdb3TL8BRvwQA',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	dates : array(12),
);
```