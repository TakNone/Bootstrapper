# messages.stickers

**Description** : *Found stickers*

**Layer** : 222

```tl
messages.stickers#30a6ec7e hash:long stickers:Vector<Document> = messages.Stickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>stickers</mark> | [`Vector<Document>`](type/Document) | Stickers |

---

## Type

[messages.Stickers](type/messages.Stickers)

---

## Example

```php
$messagesStickers = $client->messages->stickers(
	hash : 0,
	stickers : array(
		$client->documentEmpty(
			id : 4614019286399620687,
		),
		$client->document(
			id : 1626014304924050946,
			access_hash : -3157013620134980950,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 77,
			mime_type : '91BdlK6mItXxkgfS',
			size : 1295551390377613917,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '4iYBbqgZOFRcD6Au',
				),
				$client->photoSize(
					type : 'cN9WVklqnraBLRTd',
					w : 77,
					h : 97,
					size : 59,
				),
				$client->photoCachedSize(
					type : '0CsaGUIfWEoxez2V',
					w : 43,
					h : 22,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '6b5jTaJ2I31ACtRO',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'RGLhf1HcNwZ7bIxj',
					w : 97,
					h : 87,
					sizes : array(97),
				),
				$client->photoPathSize(
					type : '94uevMbiL3C2WtXG',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'nSW26QfLmYHhKFUD',
					w : 66,
					h : 100,
					size : 35,
					video_start_ts : -55842.3623046875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 2238949307444482859,
					background_colors : array(6),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 1603071131988842170,
					background_colors : array(86),
				),
			),
			dc_id : 90,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 59,
					h : 24,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '13oUDuxrqEPgVW6R',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 6,
						x : 1622811.46875,
						y : -1745763.18359375,
						zoom : 1284909.919921875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -2017316.033203125,
					w : 37,
					h : 48,
					preload_prefix_size : 22,
					video_start_ts : 1528086.3349609375,
					video_codec : 'Enu96Jf5UIg2aT4w',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 79,
					title : 'LQngkeT8GKq6ymOv',
					performer : '1z67vMTsHaSOydkw',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '15Mlx8FeH3qZQO4h',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'bZ6rVN7nhsxcaHz4',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```