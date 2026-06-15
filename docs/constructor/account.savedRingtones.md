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
			id : -941567859009550970,
		),
		$client->document(
			id : 4138860922139219739,
			access_hash : -2834979084978648260,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 98,
			mime_type : 'n7qaljU9dmBvJFOf',
			size : 5817521513277314871,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'eaN7Ycs3uydx4LwB',
				),
				$client->photoSize(
					type : '9ie2lpIKucAGJT30',
					w : 59,
					h : 58,
					size : 13,
				),
				$client->photoCachedSize(
					type : 'gTzLimMAFySUvscx',
					w : 69,
					h : 21,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'yuwnNjMcBkTzLH0a',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'LEV58Mmw9viob3fC',
					w : 58,
					h : 100,
					sizes : array(99),
				),
				$client->photoPathSize(
					type : '9HPG07yBmXgNF3cA',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'Tvnf98cbwyFLxhVA',
					w : 3,
					h : 66,
					size : 8,
					video_start_ts : 1065450.0244140625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -2989741988631527493,
					background_colors : array(93),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -7302508418263757572,
					background_colors : array(15),
				),
			),
			dc_id : 96,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 90,
					h : 49,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '7ozXcOQ9wmEklKBD',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 25,
						x : -104134.6904296875,
						y : -1458859.94140625,
						zoom : 895560.9736328125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1140781.9384765625,
					w : 100,
					h : 10,
					preload_prefix_size : 77,
					video_start_ts : 700086.1044921875,
					video_codec : 'kh0EnwVt8ZvxqTdz',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 1,
					title : '7Gl0WChbxrSV8qdH',
					performer : 'CE6VxePMtcypn520',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'vMrPo0qUHN8ieFy9',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'uiAHIO3DBs6eGp72',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```