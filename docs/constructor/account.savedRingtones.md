# account.savedRingtones

**Description** : *A list of saved notification sounds*

**Layer** : 227

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
			id : 4041129115688409396,
		),
		$client->document(
			id : 3521335404128450387,
			access_hash : 9040778604065070283,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 31,
			mime_type : 'YuWXhTtNJAyRBOxS',
			size : -2018669069231943963,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'MW92jILcwmPUfiSX',
				),
				$client->photoSize(
					type : 'VBuAzH02WMbt7i8Z',
					w : 83,
					h : 4,
					size : 8,
				),
				$client->photoCachedSize(
					type : '7BZsKVyAbgLQ1uUP',
					w : 63,
					h : 59,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '0Dvd1Swx9fEL8Toq',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '1qRUxKr2zMkuJIwX',
					w : 72,
					h : 55,
					sizes : array(79),
				),
				$client->photoPathSize(
					type : 'XA5fZ1MDyzBkqiH2',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'TyziRKGZ29Xw1J3a',
					w : 41,
					h : 34,
					size : 71,
					video_start_ts : 942273.5107421875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -6313190906625015679,
					background_colors : array(93),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 6042064732181362318,
					background_colors : array(61),
				),
			),
			dc_id : 36,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 80,
					h : 81,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'VkEJnDQMOt658Tso',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 77,
						x : -1819777.5693359375,
						y : -2037749.890625,
						zoom : -2011941.1201171875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 96652.666015625,
					w : 29,
					h : 12,
					preload_prefix_size : 55,
					video_start_ts : -335364.537109375,
					video_codec : 'RuWoVXPCv0HlLwn3',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 59,
					title : '2LREecA3h0tCZYrK',
					performer : '5CScOIbpHXmA4ks9',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '4c8SQXjIJl3ki6CT',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '8PvLDUI07B2Ydryj',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```