# messages.foundStickers

**Description** : *Found stickers*

**Layer** : 222

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
	next_offset : 43,
	hash : 0,
	stickers : array(
		$client->documentEmpty(
			id : 1516408536421591730,
		),
		$client->document(
			id : 8893609800471425411,
			access_hash : -6887416055518528871,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 72,
			mime_type : 'ExPsrVhlHiDf6Ce4',
			size : -1446246024496777579,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'MTBpYGXwmWcyVAOj',
				),
				$client->photoSize(
					type : 'obcSLnRCdOY6QF91',
					w : 58,
					h : 53,
					size : 31,
				),
				$client->photoCachedSize(
					type : 'QzWf05YcCNmK3IGa',
					w : 77,
					h : 16,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '5JSyV3w9l6GLx4TQ',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'LPuGDBjkVtSxyOsQ',
					w : 16,
					h : 45,
					sizes : array(98),
				),
				$client->photoPathSize(
					type : 'sJE2XVZptWTuGMzv',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'er9OloCkRnxpsf8M',
					w : 41,
					h : 54,
					size : 96,
					video_start_ts : -289974.970703125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 2607614652058706114,
					background_colors : array(76),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 1492960298511278139,
					background_colors : array(96),
				),
			),
			dc_id : 24,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 89,
					h : 85,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'NnVymdhcPfHDvBRQ',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 3,
						x : 667324.25,
						y : 1576047.5947265625,
						zoom : -697202.482421875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -673990.2568359375,
					w : 30,
					h : 86,
					preload_prefix_size : 88,
					video_start_ts : 180409.72265625,
					video_codec : 'NqYUmsIogzWSMyAP',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 31,
					title : 'GblPUfSRAuMQ3i6j',
					performer : 'pzcF2oA6wjCgPtke',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'MhVmaw38JS17RKq6',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'K2r6yuLlR1ADqQTa',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```