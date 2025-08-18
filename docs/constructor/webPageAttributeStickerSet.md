# webPageAttributeStickerSet

**Description** : *Contains info about a stickerset &raquo;, for a webPage preview of a stickerset deep link &raquo; \(the webPage will have a type of telegram\_stickerset\)*

**Layer** : 211

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
			id : 5891607168453139501,
		),
		$client->document(
			id : 6981016025858703838,
			access_hash : 4605221271821550007,
			file_reference : '?H??LiveProto?>0??',
			date : 22,
			mime_type : 'RZl2sOpW9DCdq0aK',
			size : -5784452878200739119,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'KcyMvxn6tH4r3Obp',
				),
				$client->photoSize(
					type : 'Rur1YWKe7pszF0VX',
					w : 71,
					h : 31,
					size : 69,
				),
				$client->photoCachedSize(
					type : 'Qm9nafelkDYIVj3S',
					w : 72,
					h : 9,
					bytes : '	?t?LiveProto4????',
				),
				$client->photoStrippedSize(
					type : 'MAYW8fP1cl07uViq',
					bytes : '[???LiveProto|??',
				),
				$client->photoSizeProgressive(
					type : 'X5DbghxJA60P4jOM',
					w : 1,
					h : 42,
					sizes : array(26),
				),
				$client->photoPathSize(
					type : 'JXQL5IFio3Gda0Vm',
					bytes : '3??LiveProtov?@<',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '7hN8aVYgi5WE3InK',
					w : 20,
					h : 9,
					size : 40,
					video_start_ts : -1350484.3876953125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -3263225372939655940,
					background_colors : array(11),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 7009814155487403271,
					background_colors : array(55),
				),
			),
			dc_id : 9,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 65,
					h : 54,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'bgIEDU4sjTXCvQFy',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1322831.91796875,
					w : 48,
					h : 15,
					preload_prefix_size : 35,
					video_start_ts : 1138872.994140625,
					video_codec : 'qRLrMvfTn5xHG8wp',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 42,
					title : 'vCTn2JVMp64SfYhx',
					performer : 'lLi8kEjyoemCrZnc',
					waveform : '΃ dlLiveProto?лc?',
				),
				$client->documentAttributeFilename(
					file_name : 'Kn7zt8HqrcGbWR62',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'ActsYMNfej9BzhIJ',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```