# account.savedRingtones

**Description** : *A list of saved notification sounds*

**Layer** : 225

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
			id : 8328531182290329938,
		),
		$client->document(
			id : 7660994643895787466,
			access_hash : 4653478141998014811,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 42,
			mime_type : 'uKXt7SczkTQIYoMb',
			size : -8334241606742748629,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '5d2Poh90iA1GvgQ7',
				),
				$client->photoSize(
					type : 'wCc0VA7TdYBFq6ZM',
					w : 100,
					h : 1,
					size : 37,
				),
				$client->photoCachedSize(
					type : 'ixJlFVZC0qLvK7hX',
					w : 99,
					h : 79,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'axNtYUnwbmJk6FWe',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'PtM1DwqSOsvaBL02',
					w : 85,
					h : 50,
					sizes : array(2),
				),
				$client->photoPathSize(
					type : 'sKy5S4gcw3PxotEV',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'ro9LyUSgO6FiKl8k',
					w : 58,
					h : 44,
					size : 45,
					video_start_ts : -1433007.7939453125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -6806945669082792788,
					background_colors : array(57),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -7615743212335245921,
					background_colors : array(36),
				),
			),
			dc_id : 94,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 44,
					h : 54,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'HAib7Cv9oVu3LUYe',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 93,
						x : -828615.123046875,
						y : -158530.5869140625,
						zoom : -1411764.5810546875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1341593.5478515625,
					w : 18,
					h : 76,
					preload_prefix_size : 88,
					video_start_ts : 1908486.2890625,
					video_codec : 'hXqgKZm2kWdn4E1A',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 35,
					title : 'mPivISeL3NoEnRQJ',
					performer : '6GbhQnMAm1LgDvsU',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'awLBYpNclZxC2U39',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '1JDgvhf5WwSobmC2',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```