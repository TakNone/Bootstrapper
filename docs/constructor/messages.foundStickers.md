# messages.foundStickers

**Description** : *Found stickers*

**Layer** : 211

```tl
messages.foundStickers#82c9e290 flags:# next_offset:flags.0?int hash:long stickers:Vector<Document> = messages.FoundStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **next_offset** | [`flags.0?int`](type/int) | Offset for pagination |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>stickers</mark> | [`Vector<Document>`](type/Document) | Found stickers |

---

## Type

[messages.FoundStickers](type/messages.FoundStickers)

---

## Example

```php
$messagesFoundStickers = $client->messages->foundStickers(
	next_offset : 3,
	hash : 7495535453178725833,
	stickers : array(
		$client->documentEmpty(
			id : -8659960882646538292,
		),
		$client->document(
			id : -1055612715464537337,
			access_hash : -5539949197969110936,
			file_reference : 'D<)\\?LiveProto?n˔p',
			date : 58,
			mime_type : '1dJ5CixPMV2XFRLm',
			size : -7374622210247298235,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'eUd9CGD4LYxyS31K',
				),
				$client->photoSize(
					type : 'iH0YTqAVtjU1ZsdB',
					w : 27,
					h : 15,
					size : 31,
				),
				$client->photoCachedSize(
					type : 'AoVZ0JRwyS31Y6c4',
					w : 94,
					h : 24,
					bytes : 'o???LiveProto?#aȮ',
				),
				$client->photoStrippedSize(
					type : 'yjLaISHJv64sBVdD',
					bytes : '?*o?LiveProto?|T?',
				),
				$client->photoSizeProgressive(
					type : 'wiY3vbXgJTKd8hkq',
					w : 91,
					h : 75,
					sizes : array(54),
				),
				$client->photoPathSize(
					type : 'MkxC5UElRbLqoTNY',
					bytes : '.???LiveProto?Yh?',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '5QALtrSavWebosj8',
					w : 15,
					h : 1,
					size : 89,
					video_start_ts : -689293.1650390625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -5397317144758057,
					background_colors : array(25),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -737033737781189963,
					background_colors : array(90),
				),
			),
			dc_id : 30,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 27,
					h : 10,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'Enjzoi61CgyF4wlx',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -395746.173828125,
					w : 100,
					h : 44,
					preload_prefix_size : 81,
					video_start_ts : -1475520.109375,
					video_codec : 'Px8Q3LIkYDy6qWug',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 48,
					title : 'Ls1W4emdNuRoUk7f',
					performer : 'bRCk8hVTAg09ijus',
					waveform : '??U9?LiveProtoH;??',
				),
				$client->documentAttributeFilename(
					file_name : 'Pb453q7rsgT8UpnI',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'rVehXibjS94yIUP1',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```