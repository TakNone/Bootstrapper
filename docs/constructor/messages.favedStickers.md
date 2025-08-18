# messages.favedStickers

**Description** : *Favorited stickers*

**Layer** : 211

```tl
messages.favedStickers#2cb51097 hash:long packs:Vector<StickerPack> stickers:Vector<Document> = messages.FavedStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>packs</mark> | [`Vector<StickerPack>`](type/StickerPack) | Emojis associated to stickers |
| <mark>stickers</mark> | [`Vector<Document>`](type/Document) | Favorited stickers |

---

## Type

[messages.FavedStickers](type/messages.FavedStickers)

---

## Example

```php
$messagesFavedStickers = $client->messages->favedStickers(
	hash : 5704326147184865486,
	packs : array(
		$client->stickerPack(
			emoticon : '0A7iouzUH4qSGNsD',
			documents : array(-6554955036328408135),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : 777304277243838402,
		),
		$client->document(
			id : 695431534893931690,
			access_hash : 2265493261784875448,
			file_reference : '?%hnLiveProto????',
			date : 3,
			mime_type : 'WoA5bgZHDC632qYs',
			size : -1215923338779685480,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'PYxXfnQelptizuB8',
				),
				$client->photoSize(
					type : 'XpeZ4JUyQwsIqWtH',
					w : 26,
					h : 73,
					size : 1,
				),
				$client->photoCachedSize(
					type : 'Ma4umzU30RTZCfqo',
					w : 37,
					h : 88,
					bytes : '??&??LiveProtor ??b',
				),
				$client->photoStrippedSize(
					type : '8nVNHI5pR417LwqO',
					bytes : '?}?K?LiveProto?l??',
				),
				$client->photoSizeProgressive(
					type : 'qIVmpwlYARHOLyNG',
					w : 2,
					h : 68,
					sizes : array(24),
				),
				$client->photoPathSize(
					type : 'VsKTF3jhm1BfeSkU',
					bytes : '?2?s@LiveProto??hI',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'm1YXv9PN8RyJ2st3',
					w : 83,
					h : 66,
					size : 76,
					video_start_ts : 1657172.13671875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -7562388230099425862,
					background_colors : array(82),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -2543653764551623401,
					background_colors : array(50),
				),
			),
			dc_id : 37,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 62,
					h : 71,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'ogDPw7OEmT9SXtVB',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 923156.1591796875,
					w : 24,
					h : 33,
					preload_prefix_size : 77,
					video_start_ts : 1739329.669921875,
					video_codec : 'oDlibTxO2udFynf6',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 81,
					title : 't0jaAMXQm1fJnrgU',
					performer : '4bY2kqjDfOxm3Lor',
					waveform : 'ry??vLiveProto}??\'',
				),
				$client->documentAttributeFilename(
					file_name : 'YJM6wbNmFDlsVSjU',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Cz8xOPsqRrwWBSQl',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```