# messages.recentStickers

**Description** : *Recently used stickers*

**Layer** : 216

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
			emoticon : '0VqAvH3GkbaSOloC',
			documents : array(3264484629106426598),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : -8683480201462166633,
		),
		$client->document(
			id : -9111593914832359905,
			access_hash : -1710289091195314813,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 15,
			mime_type : 'ZdIMCYTqv2LocDis',
			size : 2798523237229150209,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '304aG5lqjMN8Omkx',
				),
				$client->photoSize(
					type : 'kma7eAsu4rYyz13O',
					w : 66,
					h : 64,
					size : 15,
				),
				$client->photoCachedSize(
					type : 'Nyf1noLemcYPJFQr',
					w : 69,
					h : 89,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'S6vJzdnVTMcAojDZ',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'n48xyEuTOdom3Jb5',
					w : 4,
					h : 22,
					sizes : array(2),
				),
				$client->photoPathSize(
					type : 'ZrK0NUdyFS7uWRsD',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'RoT85sdVjhYKUIp7',
					w : 62,
					h : 21,
					size : 31,
					video_start_ts : 911776.720703125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -5060864258418169686,
					background_colors : array(98),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -6160408642407360428,
					background_colors : array(3),
				),
			),
			dc_id : 67,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 32,
					h : 74,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'l8BU4gcqtf6a1Gwj',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -850352.9287109375,
					w : 94,
					h : 79,
					preload_prefix_size : 100,
					video_start_ts : -641074.0283203125,
					video_codec : 'koe1qByCnRzacG6g',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 87,
					title : 'LxFP47nGQahvtzgX',
					performer : 'THw1tA6u8hEcBG0z',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 't4l6MBxF3iUPdpgN',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'JNd5vHj1WQD893Ex',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
	dates : array(40),
);
```