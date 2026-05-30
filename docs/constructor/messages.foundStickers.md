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
	next_offset : 52,
	hash : 0,
	stickers : array(
		$client->documentEmpty(
			id : -1280187038875765680,
		),
		$client->document(
			id : 1505390730067463260,
			access_hash : 8412816583142874972,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 40,
			mime_type : 'ZsaibxvDN1Q2BIGh',
			size : -5415727698925373977,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'TxL1Mv0GqP5So9hD',
				),
				$client->photoSize(
					type : 'ZU1g4zrijoYpQR2M',
					w : 94,
					h : 72,
					size : 74,
				),
				$client->photoCachedSize(
					type : 'AGZts5NXbcqDjr0x',
					w : 16,
					h : 38,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'dYuIw3nqaUCpzZgi',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'ofsBrlCA2q8autYI',
					w : 56,
					h : 72,
					sizes : array(60),
				),
				$client->photoPathSize(
					type : 'Aoup6G5FY3I9xqtQ',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'ByaANHwCLTnIJEf7',
					w : 3,
					h : 4,
					size : 32,
					video_start_ts : 160625.6025390625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 3913961568740462174,
					background_colors : array(10),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 8687863187576715746,
					background_colors : array(86),
				),
			),
			dc_id : 34,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 10,
					h : 65,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '3KoM0rkJ8cnsbla1',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 87,
						x : -353274.6650390625,
						y : -156139.986328125,
						zoom : 685461.0693359375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -286348.84375,
					w : 50,
					h : 46,
					preload_prefix_size : 80,
					video_start_ts : 1536249.748046875,
					video_codec : 'Ml1HZyTWuNvL7aXY',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 16,
					title : '5H7B1v2aYhsWtx6F',
					performer : 'QBzliLfn6Z8O9hry',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'opZn9drKyw6H28WF',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'fEoIRrJ2y4W58keZ',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```