# webPageAttributeStickerSet

**Description** : *Contains info about a stickerset &raquo;, for a webPage preview of a stickerset deep link &raquo; \(the webPage will have a type of telegram\_stickerset\)*

**Layer** : 227

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
			id : 6014917283886944798,
		),
		$client->document(
			id : -501763370395123460,
			access_hash : 8376303498256660105,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 85,
			mime_type : 'N7o8zV3GYALR6guU',
			size : 8578643959950056955,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '4VFPNnR3Ec09IdGo',
				),
				$client->photoSize(
					type : 'LZOpGSFWHX8xjah5',
					w : 13,
					h : 83,
					size : 45,
				),
				$client->photoCachedSize(
					type : 'Xv10AywSh2D7lEPL',
					w : 6,
					h : 26,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'IPVa5DyAsHxeCwOc',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'Q1HqK5CiuAgB3tFl',
					w : 61,
					h : 80,
					sizes : array(40),
				),
				$client->photoPathSize(
					type : '0VTs7pNvtJBowhOW',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'ZjPd6vETc8zrgiMa',
					w : 14,
					h : 61,
					size : 2,
					video_start_ts : 1413663.27734375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 7989735699197433867,
					background_colors : array(61),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 7662473926238108035,
					background_colors : array(12),
				),
			),
			dc_id : 22,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 16,
					h : 8,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'pds6kT1PuXGzl4Yh',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 100,
						x : 403622.3173828125,
						y : -85488.2236328125,
						zoom : 547151.4912109375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -274691.345703125,
					w : 96,
					h : 87,
					preload_prefix_size : 28,
					video_start_ts : -1079378.8759765625,
					video_codec : 'nWwea05Bvut9Y73l',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 21,
					title : '0L7s4EGjNtwXvphF',
					performer : 'b87sZOhAf6mMIPTk',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '5QYkuWfNlM03P86F',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'ycnKGLpwhQFZ9U2l',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```