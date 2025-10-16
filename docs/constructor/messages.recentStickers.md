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
			emoticon : 'pWZcDR68HKnVuidU',
			documents : array(424221167091470127),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : 6879049188047142553,
		),
		$client->document(
			id : -2017479072626468917,
			access_hash : 3803567862266740046,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 49,
			mime_type : 'T4CB0ZqIG7DKFONJ',
			size : -9023764125458813005,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'M7VwloLDaRSn05TY',
				),
				$client->photoSize(
					type : 'G7CL14h8S6aMcgzR',
					w : 96,
					h : 17,
					size : 87,
				),
				$client->photoCachedSize(
					type : 'etmIWwn2xHujMoba',
					w : 98,
					h : 38,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 't5Sk7D2yGdzbZmwe',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'IpLH1ZTmBGJNcy4U',
					w : 35,
					h : 62,
					sizes : array(53),
				),
				$client->photoPathSize(
					type : 'QwAvDOqCuMezIGd4',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'm8XAIvVtrwRb67GT',
					w : 36,
					h : 5,
					size : 30,
					video_start_ts : -1572752.873046875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -7120539740505914405,
					background_colors : array(14),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 8497856103624924094,
					background_colors : array(81),
				),
			),
			dc_id : 86,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 84,
					h : 10,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'oOFsVnrbQkjPMmYv',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 158576.51953125,
					w : 30,
					h : 87,
					preload_prefix_size : 98,
					video_start_ts : 1062453.943359375,
					video_codec : 'B3WeGOJqUDTr4l9x',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 99,
					title : 'ARwGm1DH0p2IXxsq',
					performer : '3ZhdyqsDXgoV0LTC',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'c4UaKe5SWknzL3Ax',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'I69u0ycLPNtVB42O',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
	dates : array(17),
);
```