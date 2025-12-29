# messages.foundStickers

**Description** : *Found stickers*

**Layer** : 218

```tl
messages.foundStickers#82c9e290 flags:# next_offset:flags.0?int hash:long stickers:Vector<Document> = messages.FoundStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	next_offset : 65,
	hash : 0,
	stickers : array(
		$client->documentEmpty(
			id : 5962136777346567988,
		),
		$client->document(
			id : -4889228200470182008,
			access_hash : 8308513028179546948,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 23,
			mime_type : 'r5sBy3YpbQCc7tTj',
			size : 2560083081657601018,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'oG4q03ZAWzXSRK78',
				),
				$client->photoSize(
					type : 'Du4WmiponxgwlIrL',
					w : 8,
					h : 6,
					size : 21,
				),
				$client->photoCachedSize(
					type : 'iFyqz5rGNR7Ac6Ul',
					w : 43,
					h : 16,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'Oi5EzZADTum492Gk',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'aoKs8QdNeSjLG160',
					w : 86,
					h : 48,
					sizes : array(83),
				),
				$client->photoPathSize(
					type : 'dgitIWmj31R7hLGw',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '6IC4y1PjZqiwYvpz',
					w : 52,
					h : 28,
					size : 17,
					video_start_ts : 704728.8046875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -4670141540567071717,
					background_colors : array(58),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -9209615827454241570,
					background_colors : array(66),
				),
			),
			dc_id : 37,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 78,
					h : 84,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'mtKOslEn5wZpoFB0',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 90,
						x : 1374206.310546875,
						y : 1823998.076171875,
						zoom : 968207.216796875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1698320.009765625,
					w : 67,
					h : 72,
					preload_prefix_size : 65,
					video_start_ts : -1665549.025390625,
					video_codec : 'hK7XPu1wGMV3rpkL',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 75,
					title : 'Y9VjcZylrfOtbdXD',
					performer : 'FehMYx2CimVcIQBD',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'Jq90lovSBb6RFH4T',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'TgJM9LA6IaCclx3t',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```