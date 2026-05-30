# webPageAttributeStickerSet

**Description** : *Contains info about a stickerset &raquo;, for a webPage preview of a stickerset deep link &raquo; \(the webPage will have a type of telegram\_stickerset\)*

**Layer** : 225

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
			id : -3892176373503049503,
		),
		$client->document(
			id : 8679051758165049019,
			access_hash : -1841065673366199668,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 92,
			mime_type : 'CR912KcjsVGnwD6r',
			size : 2595146725773937329,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '5lsyRLTpNvorkUaW',
				),
				$client->photoSize(
					type : '7igQ1mZq08olKG2T',
					w : 62,
					h : 15,
					size : 67,
				),
				$client->photoCachedSize(
					type : '1a2PO53WNFtYwUz8',
					w : 29,
					h : 28,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'Wx1blEr4985KnPoC',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'TjpsM3JBP28hXOit',
					w : 64,
					h : 40,
					sizes : array(83),
				),
				$client->photoPathSize(
					type : 'PXBFJsNC9mbKr8Tz',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'vIKbrqWhZj1uHS8B',
					w : 7,
					h : 12,
					size : 39,
					video_start_ts : 75197.4794921875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 7965545927760764139,
					background_colors : array(94),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 4097211320455502506,
					background_colors : array(75),
				),
			),
			dc_id : 20,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 43,
					h : 50,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'qSE1yzWNnuBkxFJR',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 8,
						x : -1106099.6474609375,
						y : -755835.0810546875,
						zoom : 249195.576171875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1021395.1865234375,
					w : 63,
					h : 40,
					preload_prefix_size : 17,
					video_start_ts : 1143482.8466796875,
					video_codec : 'eqNuiSVgLBk4cDhp',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 43,
					title : 'RvnShb6itaPWjoBc',
					performer : 'Jiz4ZREo9lkh8syD',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'zJQBeycXukT2NPoi',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Po5y7HIfsE3xLS1l',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```