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
			id : 3759338758201414855,
		),
		$client->document(
			id : -3285712966482303772,
			access_hash : 8927268129291265380,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 0,
			mime_type : 'qaBVblEhR18LPW3e',
			size : -3557619083394231195,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'fPzTXxikBU2gv8Fd',
				),
				$client->photoSize(
					type : 'g6hqJfLpBGmK5Viv',
					w : 70,
					h : 25,
					size : 7,
				),
				$client->photoCachedSize(
					type : 'rRMOxc2V4eYjU0iD',
					w : 65,
					h : 5,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'w60cv45qoIsgYWxQ',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'zjKhR4E6bkaA1POI',
					w : 57,
					h : 90,
					sizes : array(67),
				),
				$client->photoPathSize(
					type : 'uHfr5wTC3X0qU8Yj',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'VRTt4HF9r7DnBXJa',
					w : 90,
					h : 13,
					size : 62,
					video_start_ts : 1483246.58984375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 3491100901937195324,
					background_colors : array(65),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -5841421530474779447,
					background_colors : array(100),
				),
			),
			dc_id : 77,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 53,
					h : 28,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'iL9r4EPlxu7z8oMm',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 21,
						x : -1605906.69921875,
						y : -122262.7998046875,
						zoom : 22235.6455078125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -506118.3720703125,
					w : 12,
					h : 86,
					preload_prefix_size : 85,
					video_start_ts : 735928.6689453125,
					video_codec : 'aWkMJp2SerL96O10',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 70,
					title : 'CN8cPLexVgHd3opD',
					performer : 'rY6qUZVkA5gswhaD',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'opshrX6AJYB4MOnU',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '7UiZQ2ojradfHDvI',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```