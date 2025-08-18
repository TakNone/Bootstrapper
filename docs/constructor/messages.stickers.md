# messages.stickers

**Description** : *Found stickers*

**Layer** : 211

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
	hash : -7816408834858664796,
	stickers : array(
		$client->documentEmpty(
			id : -5976850867142696295,
		),
		$client->document(
			id : -175039049465279395,
			access_hash : 1540522355571919705,
			file_reference : '??#?yLiveProto?#?H?',
			date : 71,
			mime_type : '3Z8ldRSKqcn7riQJ',
			size : 979320899294307662,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'OTzxAhIp8mufP5Wt',
				),
				$client->photoSize(
					type : 'DAXQKbJvhfCGUoOx',
					w : 92,
					h : 0,
					size : 67,
				),
				$client->photoCachedSize(
					type : 'BNGQoX4dOSICMk2l',
					w : 25,
					h : 86,
					bytes : '?T?h?LiveProto?k?#',
				),
				$client->photoStrippedSize(
					type : 'AvKXbm1ruCZDIxEd',
					bytes : '?T?LiveProto??2??',
				),
				$client->photoSizeProgressive(
					type : 'kxp1o0wfglu9SsLy',
					w : 39,
					h : 90,
					sizes : array(11),
				),
				$client->photoPathSize(
					type : 'E3yci7O9MB4xJ0au',
					bytes : '?m???LiveProto.??h',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'dqF8eRUjJ1KDV03p',
					w : 36,
					h : 94,
					size : 94,
					video_start_ts : 1919705.6875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -511514969536801445,
					background_colors : array(35),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -1101841203770169951,
					background_colors : array(61),
				),
			),
			dc_id : 68,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 86,
					h : 69,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '3BFcaLgs4e8YqElu',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1632522.8818359375,
					w : 18,
					h : 70,
					preload_prefix_size : 40,
					video_start_ts : -1690090.4521484375,
					video_codec : 'CzK1gYwxAhbvDrfI',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 49,
					title : 'DGn4AXRWiIKrd5Ve',
					performer : 'zMRs5eFu2jidAgJ1',
					waveform : '???LiveProto*{|?(',
				),
				$client->documentAttributeFilename(
					file_name : '1s8gDih3FbvjArJo',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '7X20BM8OWbVZna1m',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```