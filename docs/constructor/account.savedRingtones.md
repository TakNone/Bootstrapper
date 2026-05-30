# account.savedRingtones

**Description** : *A list of saved notification sounds*

**Layer** : 222

```tl
account.savedRingtones#c1e92cc5 hash:long ringtones:Vector<Document> = account.SavedRingtones;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>ringtones</mark> | [`Vector<Document>`](type/Document) | Saved notification sounds |

---

## Type

[account.SavedRingtones](type/account.SavedRingtones)

---

## Example

```php
$accountSavedRingtones = $client->account->savedRingtones(
	hash : 0,
	ringtones : array(
		$client->documentEmpty(
			id : 2721880780577939855,
		),
		$client->document(
			id : 108394491327949213,
			access_hash : 5040781929041543292,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 56,
			mime_type : 'g8I9fbL0VvsCWmRQ',
			size : -8268491621976794517,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'XTRxiuHON2rVvGJh',
				),
				$client->photoSize(
					type : '5fs2oK7DTFYSNl1i',
					w : 45,
					h : 75,
					size : 15,
				),
				$client->photoCachedSize(
					type : 'pkfo3OJFmlAhH9e6',
					w : 96,
					h : 13,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'icIEqvCnsWNFKpdr',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'BHWgupdy6ReAP7mG',
					w : 62,
					h : 51,
					sizes : array(88),
				),
				$client->photoPathSize(
					type : '3UON4QIX8jmrluDT',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'NvWOIY2sTmweBfFS',
					w : 9,
					h : 99,
					size : 87,
					video_start_ts : -1216761.109375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -6112990966039514221,
					background_colors : array(63),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -856068461389466882,
					background_colors : array(92),
				),
			),
			dc_id : 5,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 98,
					h : 59,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'N2sf36MCagq4Y5Ij',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 4,
						x : 257154.1123046875,
						y : 239648.2197265625,
						zoom : -1597421.3798828125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -639862.40234375,
					w : 97,
					h : 96,
					preload_prefix_size : 6,
					video_start_ts : -1781741.8515625,
					video_codec : 'wdyGnCOcUQR7vBTj',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 15,
					title : 'D31CYNagThV6kKnW',
					performer : 'Vy8GvkoYnuMDHeip',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'LqQvWncruHTJDMtS',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'HeMT0KtPU9aL7NpR',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```