# messages.stickers

**Description** : *Found stickers*

**Layer** : 216

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
			id : -1306559222354545969,
		),
		$client->document(
			id : 668073838957798872,
			access_hash : -2875121928820446266,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 65,
			mime_type : 'reYb5isXuzyRop8N',
			size : -2079990160205390207,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'rwyK5zQpZm7ePOYG',
				),
				$client->photoSize(
					type : 'R4BNE6frM8tghvon',
					w : 71,
					h : 45,
					size : 92,
				),
				$client->photoCachedSize(
					type : 'W1VjaMfJtIrhqBEA',
					w : 94,
					h : 94,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'BrVl0CL4GoeXO3pK',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '9kV82KP1SwurpAHX',
					w : 6,
					h : 69,
					sizes : array(59),
				),
				$client->photoPathSize(
					type : 'WOajxY0qDotBJln7',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'MyCK9Ez8swTkiIpv',
					w : 98,
					h : 49,
					size : 76,
					video_start_ts : 579590.361328125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -10879417431238227,
					background_colors : array(97),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -4831846908421963457,
					background_colors : array(45),
				),
			),
			dc_id : 46,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 11,
					h : 46,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'cYvRJdOQByhu4TI2',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1887412.458984375,
					w : 34,
					h : 70,
					preload_prefix_size : 53,
					video_start_ts : 1744192.265625,
					video_codec : '1qJjIO287enlKsrL',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 7,
					title : 'Nj7PLcoIFhHJlBDX',
					performer : 'iVZz7XfuPyS92amn',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'KW2Z8r1R0hJlQ9Ez',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Tpf03NyQ1uo5Xg6Z',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```