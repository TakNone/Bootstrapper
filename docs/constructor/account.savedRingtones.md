# account.savedRingtones

**Description** : *A list of saved notification sounds*

**Layer** : 218

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
			id : 2805839033516140983,
		),
		$client->document(
			id : -1985993045912188942,
			access_hash : -5388763243600058875,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 57,
			mime_type : 'xpwlR5GHdNcOgDQv',
			size : -6890754513201323168,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '56o2VfqjHIiUSEyr',
				),
				$client->photoSize(
					type : 'eFtXCliu1oq2dhJv',
					w : 33,
					h : 84,
					size : 19,
				),
				$client->photoCachedSize(
					type : 'NVM4E9iQotIXm2ua',
					w : 72,
					h : 46,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'ZAgqmY4ITyFxcC7i',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'q3SpCb2oHyXMT6z1',
					w : 7,
					h : 94,
					sizes : array(21),
				),
				$client->photoPathSize(
					type : 'zdwAMZiHUvaf3J82',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'ugwCESXmYM2pVeb5',
					w : 27,
					h : 47,
					size : 42,
					video_start_ts : -727370.4892578125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -3570346636569844700,
					background_colors : array(94),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -5308762414655716133,
					background_colors : array(20),
				),
			),
			dc_id : 18,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 78,
					h : 34,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'FOyfZJ3KSE7osIgk',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 79,
						x : -1460721.7939453125,
						y : 1701502.234375,
						zoom : 544520.375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1429213.0625,
					w : 90,
					h : 77,
					preload_prefix_size : 58,
					video_start_ts : 1116707.5078125,
					video_codec : 'ZsjHa8L1rJ7z2Uhp',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 24,
					title : '3A9npfwotH2I07SE',
					performer : 'L6Z7WpXjkIHVu8N2',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '9Bj5fr7xEnvaXh4o',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '1p8gyrWsGwbMCxtH',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```