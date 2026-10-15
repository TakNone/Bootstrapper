# account.savedRingtones

**Description** : *A list of saved notification sounds*

**Layer** : 229

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
			id : 7028679205990129537,
		),
		$client->document(
			id : -2134988769733923960,
			access_hash : 2987983187089830987,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 53,
			mime_type : 'RnVsZdNSzmkgGiuW',
			size : -7178458591677888893,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'on15ONJhyKGxzXPr',
				),
				$client->photoSize(
					type : 'gHLk0NZTCzdWcDyE',
					w : 8,
					h : 41,
					size : 38,
				),
				$client->photoCachedSize(
					type : 'fgcH8IrRUZW3dsJS',
					w : 70,
					h : 68,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'Ew2s08Xo6SDYmGNO',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'BJU2iRKmeEPHnpcC',
					w : 47,
					h : 50,
					sizes : array(17),
				),
				$client->photoPathSize(
					type : 'BjkrdQhMmUS9K4g1',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'adzX9wfGomRHqTVv',
					w : 30,
					h : 46,
					size : 62,
					video_start_ts : 507761.138671875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -3983931116483107560,
					background_colors : array(82),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -7913427489495684517,
					background_colors : array(35),
				),
			),
			dc_id : 89,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 13,
					h : 89,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'sUGFqOtVpdYgolZ9',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 25,
						x : -1653281.6201171875,
						y : -1369399.91796875,
						zoom : -1151971.5654296875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -811343.595703125,
					w : 28,
					h : 38,
					preload_prefix_size : 64,
					video_start_ts : 1424743.1455078125,
					video_codec : 'WbmGo8lwsznKjUEh',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 0,
					title : 'zBCfF8eSAMq7bWu6',
					performer : 'xisUnafVPHo1RQLq',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'VcDBpIHJPdbveK6o',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '1FlOGnQ70VfZgcsu',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```