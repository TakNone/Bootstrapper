# webPageAttributeStickerSet

**Description** : *Contains info about a stickerset », for a webPage preview of a stickerset deep link » (the webPage will have a type of telegram_stickerset)*

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
			id : -2811302530351430238,
		),
		$client->document(
			id : -1696410255396734279,
			access_hash : -3748030952361406578,
			file_reference : '??\\?LiveProtoR?F??',
			date : 45,
			mime_type : '3eLdfNg97G8Jsu5c',
			size : -6999654696499900117,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'KCDy4Us5btd09QJG',
				),
				$client->photoSize(
					type : 'OcFmwaNYIlrfD73Z',
					w : 13,
					h : 83,
					size : 61,
				),
				$client->photoCachedSize(
					type : '5m0Wt38d71zf2Uax',
					w : 14,
					h : 89,
					bytes : '????LiveProtoqV???',
				),
				$client->photoStrippedSize(
					type : 'wnxyTqtM25FCHB1W',
					bytes : '0Y??2LiveProto]˳?',
				),
				$client->photoSizeProgressive(
					type : 'eycpTgFiOqrfCosV',
					w : 24,
					h : 48,
					sizes : array(58),
				),
				$client->photoPathSize(
					type : 'MsW5ZmA6Rndky1Y0',
					bytes : 'Ú|?LiveProto??d?',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'VWSeqwrx2KlnYah5',
					w : 12,
					h : 1,
					size : 84,
					video_start_ts : 1135517.806640625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 1439336364309510648,
					background_colors : array(32),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -6966901944887200856,
					background_colors : array(74),
				),
			),
			dc_id : 100,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 52,
					h : 83,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'JFsYQiM4Io0KS3TW',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -2080237.240234375,
					w : 63,
					h : 9,
					preload_prefix_size : 84,
					video_start_ts : 1887440.52734375,
					video_codec : 'kIJhZAVHO7U4opQS',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 8,
					title : 'zXLDys9f3oZWbarC',
					performer : '9qIeihzKY7tVC4Nv',
					waveform : 'U??LiveProto?z?˟',
				),
				$client->documentAttributeFilename(
					file_name : 'MKpZOrBx5EmS32jF',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Z2D4rESlwGBHMbUN',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```