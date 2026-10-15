# messages.stickers

**Description** : *Found stickers*

**Layer** : 229

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
			id : -6421396532670558249,
		),
		$client->document(
			id : 3506235409917880185,
			access_hash : -9022430837713185254,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 78,
			mime_type : 'Ii7lugXpyv3JBUqe',
			size : 2267668080715384352,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '0pm6MgFcGfv7dztX',
				),
				$client->photoSize(
					type : '9KqloNRAyPmJHf8Z',
					w : 99,
					h : 80,
					size : 49,
				),
				$client->photoCachedSize(
					type : 'ciDT3bghxFPRA6QJ',
					w : 30,
					h : 0,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'R5rWSu7FaIVgYsxT',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'tb9EnO4NH8W5p7jY',
					w : 89,
					h : 50,
					sizes : array(14),
				),
				$client->photoPathSize(
					type : 'FUTP8Nkv7VGMHpIX',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'YoIXHtcf2n561DjB',
					w : 12,
					h : 76,
					size : 43,
					video_start_ts : 2067114.0302734375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -3749473735898655703,
					background_colors : array(91),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 8286325041924867742,
					background_colors : array(41),
				),
			),
			dc_id : 78,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 73,
					h : 44,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'Nuz3ketdA0bXR6Tl',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 23,
						x : -2053211.3037109375,
						y : -227915.84375,
						zoom : 238583.8759765625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1215642.2392578125,
					w : 59,
					h : 19,
					preload_prefix_size : 87,
					video_start_ts : -1674950.76953125,
					video_codec : '8y0bISMJQ1WG7Ltu',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 5,
					title : 'yB8PcMU7xKAjdhus',
					performer : 'dNlAbj1TDZyQUW03',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'Og7TWXJehZUSMisK',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'XwtDRujIvAPaMk20',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```