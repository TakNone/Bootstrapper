# webPageAttributeStickerSet

**Description** : *Contains info about a stickerset &raquo;, for a webPage preview of a stickerset deep link &raquo; \(the webPage will have a type of telegram\_stickerset\)*

**Layer** : 222

```tl
webPageAttributeStickerSet#50cc03d3 flags:# emojis:flags.0?true text_color:flags.1?true stickers:Vector<Document> = WebPageAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **emojis** | [`flags.0?true`](type/true) | Whether this i s a custom emoji stickerset |
| **text_color** | [`flags.1?true`](type/true) | Whether the color of this TGS custom emoji stickerset should be changed to the text color when used in messages, the accent color if used as emoji status, white on chat photos, or another appropriate color based on context |
| <mark>stickers</mark> | [`Vector<Document>`](type/Document) | A subset of the stickerset in the stickerset |

---

## Type

[WebPageAttribute](type/WebPageAttribute)

---

## Example

```php
$webPageAttribute = $client->webPageAttributeStickerSet(
	emojis : true,
	text_color : true,
	stickers : array(
		$client->documentEmpty(
			id : -6748007872087347716,
		),
		$client->document(
			id : 6127036630581370952,
			access_hash : -4587764365879322465,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 18,
			mime_type : 'BZYWANdkGTbu9ScQ',
			size : -2762483639781323081,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'U78L3PRGoih4T6wI',
				),
				$client->photoSize(
					type : 'xSn5A7yU6hB083zZ',
					w : 98,
					h : 89,
					size : 14,
				),
				$client->photoCachedSize(
					type : 'oCzYELA6kdhxKBRf',
					w : 23,
					h : 83,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '73SQqVJPgKGINWhv',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'GodYiLanFlysVU1k',
					w : 49,
					h : 43,
					sizes : array(11),
				),
				$client->photoPathSize(
					type : 'xIQ9qbAUgfLtMHs6',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'f0wm7NcYUjCux2tb',
					w : 96,
					h : 78,
					size : 37,
					video_start_ts : 134340.8271484375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -8803258250791752457,
					background_colors : array(14),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 5987548316362772558,
					background_colors : array(94),
				),
			),
			dc_id : 59,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 90,
					h : 33,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'nMaQsiv2mpH5KFbT',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 33,
						x : 1692652.662109375,
						y : -1813165.833984375,
						zoom : -2017872.912109375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1699840.3525390625,
					w : 5,
					h : 11,
					preload_prefix_size : 76,
					video_start_ts : 1922773.8974609375,
					video_codec : 'NAC3WVEtKyUoQaXI',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 80,
					title : 'sz4lYcEyOmfvQFq3',
					performer : 'Fp3GAUJqD5zx9BeI',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'dGmRzNel5FLtHTas',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '5MagcEbJjDKvTe3y',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```