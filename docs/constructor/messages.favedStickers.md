# messages.favedStickers

**Description** : *Favorited stickers*

**Layer** : 218

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
			emoticon : 'AMjWk9F7n1QeJaxb',
			documents : array(6885863110109631911),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : 8707875843292920858,
		),
		$client->document(
			id : -3017455967142207305,
			access_hash : 5253239363985276041,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 63,
			mime_type : '2OyU5RBbusJF9twj',
			size : -2839180258280048241,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'dr4OXFn16pfjUNo8',
				),
				$client->photoSize(
					type : 'Tq9lrzYdNGJQEAo6',
					w : 87,
					h : 12,
					size : 44,
				),
				$client->photoCachedSize(
					type : 'TtfZShkNPlr5jFCD',
					w : 38,
					h : 86,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'M9l67hibyzWgVAnP',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'svJo0yZkfcNnOl3H',
					w : 100,
					h : 27,
					sizes : array(86),
				),
				$client->photoPathSize(
					type : 'nxVaPZOusz8GB1gC',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'LUDgY1hXTfoJ0klp',
					w : 80,
					h : 12,
					size : 6,
					video_start_ts : -300584.80859375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -9034538856293080278,
					background_colors : array(46),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -9031854860635365944,
					background_colors : array(83),
				),
			),
			dc_id : 25,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 25,
					h : 69,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'm0cifdT6YKPCxkNQ',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 68,
						x : -1127404.1298828125,
						y : 982693.0625,
						zoom : -155956.65625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1018292.8115234375,
					w : 78,
					h : 74,
					preload_prefix_size : 84,
					video_start_ts : -704643.1455078125,
					video_codec : 'CENbWSdjsnrqtKJl',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 36,
					title : 'TLO5t4grbfKM2hy8',
					performer : 'wPZh7HmXFMbW8Q2l',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'rM3R6tmPOwVhka2q',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'IKegH7kBqzO2VCFG',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```