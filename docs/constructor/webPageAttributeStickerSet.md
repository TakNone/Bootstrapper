# webPageAttributeStickerSet

**Description** : *Contains info about a stickerset &raquo;, for a webPage preview of a stickerset deep link &raquo; \(the webPage will have a type of telegram\_stickerset\)*

**Layer** : 214

```tl
webPageAttributeStickerSet#50cc03d3 flags:# emojis:flags.0?true text_color:flags.1?true stickers:Vector<Document> = WebPageAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
			id : 2472653929269183537,
		),
		$client->document(
			id : 7461066543740610076,
			access_hash : -119397910373884931,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 30,
			mime_type : '9fupUqe6idMgrT4x',
			size : 1791390597887051174,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'sRMunHeJYQyI210d',
				),
				$client->photoSize(
					type : '4WIme7FBgkD3O5a0',
					w : 43,
					h : 0,
					size : 93,
				),
				$client->photoCachedSize(
					type : 'nDBOSt9FKHXUi2I1',
					w : 59,
					h : 92,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'netkTJWALxzFBHMv',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'eYI6ZOXrzk03FCVs',
					w : 93,
					h : 89,
					sizes : array(51),
				),
				$client->photoPathSize(
					type : 'tBQG5b2X8MT4Kcqz',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'YqKn0DAjUmPMcT7r',
					w : 0,
					h : 52,
					size : 23,
					video_start_ts : -1752942.3623046875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 6015655075134219569,
					background_colors : array(35),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -8059402206123192188,
					background_colors : array(62),
				),
			),
			dc_id : 53,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 45,
					h : 81,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'jchnu9dO0XNYa78I',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 539217.16796875,
					w : 90,
					h : 45,
					preload_prefix_size : 1,
					video_start_ts : -1263621.4365234375,
					video_codec : 'aS4UDOkcHIhnYNCA',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 38,
					title : 'Teon9iUR2I5b0W3x',
					performer : 'bXaztHynjSYZeovq',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'Ovb27Qk0qMl9fNF3',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'EdlexR0sNI23vZ7J',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```