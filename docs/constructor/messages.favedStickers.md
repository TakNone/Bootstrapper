# messages.favedStickers

**Description** : *Favorited stickers*

**Layer** : 216

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
	hash : 0,
	packs : array(
		$client->stickerPack(
			emoticon : '6XcDhj1gKYEqLuOP',
			documents : array(7203202939327316928),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : 9051917378482967367,
		),
		$client->document(
			id : 2204087741316022605,
			access_hash : 6883604216670238195,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 29,
			mime_type : 'Y1Rlsz5rg6Fn04Cf',
			size : 6124770579609077328,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'XwNP4CklTWeIGb9L',
				),
				$client->photoSize(
					type : 'cpTOxRjEKY1bU27P',
					w : 39,
					h : 75,
					size : 47,
				),
				$client->photoCachedSize(
					type : 'TK1IxBh6a5fYycqo',
					w : 99,
					h : 2,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'wn0jxbmPlBFcTCiW',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'L8qvdzmPo2W935ae',
					w : 3,
					h : 76,
					sizes : array(76),
				),
				$client->photoPathSize(
					type : 'ewaPHW7VyIFzAmqd',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'fFrzudZKgt2MXban',
					w : 22,
					h : 78,
					size : 79,
					video_start_ts : 969378.1650390625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 1234697635286715471,
					background_colors : array(36),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -1187610927357726359,
					background_colors : array(79),
				),
			),
			dc_id : 42,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 83,
					h : 78,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'qyU98fXDpGhNsvzx',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1246745.1875,
					w : 35,
					h : 25,
					preload_prefix_size : 25,
					video_start_ts : -1988288.51953125,
					video_codec : 'KsCOMlFVdmIj7iXe',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 13,
					title : 'oAVGv7XYFRsC30dH',
					performer : 'M7mSROtPYUv20XQr',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'hYMA7CleUsRdnErx',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'PEbZWRsKFruLQHjz',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```