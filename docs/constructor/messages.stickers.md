# messages.stickers

**Description** : *Found stickers*

**Layer** : 218

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
			id : 1378252998793992975,
		),
		$client->document(
			id : 6512144577923103890,
			access_hash : -1251243177688131554,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 61,
			mime_type : 'pBkeGuRPW2SfvQjF',
			size : 8589435380255531098,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'htpPvbMulnfOEWrw',
				),
				$client->photoSize(
					type : 'UE6zcRWpCMeh2yQi',
					w : 20,
					h : 22,
					size : 83,
				),
				$client->photoCachedSize(
					type : 'rtdkL3imgenqSTYM',
					w : 91,
					h : 37,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '4bp6RglTGQrJV3ut',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'FREtdSTJcX3LwMBs',
					w : 64,
					h : 21,
					sizes : array(60),
				),
				$client->photoPathSize(
					type : 'japxOnVTcCo9RwNl',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'lOZDVjxTzs1mkbLA',
					w : 40,
					h : 37,
					size : 26,
					video_start_ts : 72038.3173828125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -3608305834137981356,
					background_colors : array(7),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 731449830546010757,
					background_colors : array(70),
				),
			),
			dc_id : 51,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 40,
					h : 49,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'CWs8yX6vFEQVjt9u',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 24,
						x : -1270451.009765625,
						y : 84336.7568359375,
						zoom : 927186.3349609375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1637691.400390625,
					w : 34,
					h : 89,
					preload_prefix_size : 44,
					video_start_ts : 1958167.2216796875,
					video_codec : 'vlF8IEfJwsyLSQ5N',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 33,
					title : 'R4Vlo2kWqNfZdJ7c',
					performer : 'udjE9gtK07OiJaIx',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'gXBWbQnJtU6ZLfo4',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'mAdJKf2W4yrIz6O5',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```