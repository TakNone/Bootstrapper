# account.savedRingtones

**Description** : *A list of saved notification sounds*

**Layer** : 216

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
			id : -7976340866323051905,
		),
		$client->document(
			id : -7651721198451437789,
			access_hash : -298704532242552553,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 34,
			mime_type : 'IbrwnpV5xZgqcvkt',
			size : -5482941667899968356,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'KgVBSzU2eRjurnGY',
				),
				$client->photoSize(
					type : '0Fm4rIe2XcSiUf3h',
					w : 13,
					h : 17,
					size : 16,
				),
				$client->photoCachedSize(
					type : '8rEgMPQi2B9D6Noa',
					w : 10,
					h : 44,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'cI39MWYo2SK57LUB',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'xS9CRGHqcQUEVZF2',
					w : 71,
					h : 53,
					sizes : array(50),
				),
				$client->photoPathSize(
					type : '18JreBGsPQNVRwHv',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'NDeQGYAwkZxb1XWi',
					w : 6,
					h : 10,
					size : 78,
					video_start_ts : -123728.1181640625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -7066915000129480981,
					background_colors : array(35),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -2161426015880926274,
					background_colors : array(18),
				),
			),
			dc_id : 52,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 89,
					h : 63,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '0sbUhiNrw1QZGVgc',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -847764.869140625,
					w : 14,
					h : 78,
					preload_prefix_size : 57,
					video_start_ts : 85038.123046875,
					video_codec : 'GHFw4e7Zln5jvzyk',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 26,
					title : '9rFYfsEUCkWpbZLT',
					performer : 'GsjvP2XkHqay3w9l',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'u2AJOxWBREbatSLs',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '1baGJ8fMo7tXyFAq',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```