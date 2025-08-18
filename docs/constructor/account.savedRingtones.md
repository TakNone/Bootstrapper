# account.savedRingtones

**Description** : *A list of saved notification sounds*

**Layer** : 211

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
	hash : -309789784258882833,
	ringtones : array(
		$client->documentEmpty(
			id : 5996380851394142228,
		),
		$client->document(
			id : 1039727666146474181,
			access_hash : 7706733235570664154,
			file_reference : 'I?RLiveProto??9?W',
			date : 8,
			mime_type : 'wYJbPopFlmBWr1u2',
			size : -121216336229344297,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'bzn3TIgW7pyaxLrC',
				),
				$client->photoSize(
					type : 'EAnLsyuQ47eGlmb6',
					w : 10,
					h : 68,
					size : 12,
				),
				$client->photoCachedSize(
					type : 'qBzYePbDKGiMSrJU',
					w : 65,
					h : 82,
					bytes : ' =JLiveProto?t7??',
				),
				$client->photoStrippedSize(
					type : 'pY6ic10dTX9ru8Nj',
					bytes : '??LiveProto????I',
				),
				$client->photoSizeProgressive(
					type : 'wpRiLEyvz7sxIVmF',
					w : 42,
					h : 11,
					sizes : array(14),
				),
				$client->photoPathSize(
					type : 'nOgZ7GkwLyorRNtx',
					bytes : 'TU???LiveProto?ԟ?',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'BdwWNlQgMFAUeZL4',
					w : 7,
					h : 17,
					size : 64,
					video_start_ts : -1402803.0654296875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -2891425703711537733,
					background_colors : array(42),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 5747042465968640323,
					background_colors : array(82),
				),
			),
			dc_id : 47,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 45,
					h : 91,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'qbQsw8CWPn6zjYy0',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1038825.0478515625,
					w : 45,
					h : 68,
					preload_prefix_size : 62,
					video_start_ts : 1376778.9072265625,
					video_codec : 'GH3cJk4xwroPE5U7',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 77,
					title : 'NIy5GkKsaPW4Jx7D',
					performer : 'B4odOW3MZVEiz6Pl',
					waveform : 'U???SLiveProtoA???',
				),
				$client->documentAttributeFilename(
					file_name : 'loOayxSBXhEqNMYt',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'fZ9GsmzY3FhKWcRk',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```