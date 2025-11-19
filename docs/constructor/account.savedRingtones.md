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
			id : 6126075148181246073,
		),
		$client->document(
			id : 6766734023109546217,
			access_hash : 6336169807285451286,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 100,
			mime_type : 'Mc5ABizhNU3F2m1w',
			size : 7288904683721370077,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'QU9Yfh3jylioMeBD',
				),
				$client->photoSize(
					type : 'DMWQcLmFYwdGA8Xh',
					w : 84,
					h : 67,
					size : 51,
				),
				$client->photoCachedSize(
					type : 'pc1kT6qofMOXwrdF',
					w : 92,
					h : 72,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'u4gwck8Z12dQjUpV',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'Kz4Gt0TFrMLwDJE8',
					w : 10,
					h : 5,
					sizes : array(63),
				),
				$client->photoPathSize(
					type : 'HkBReLm37WnIXlS9',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'RykfJ7Wu4U9CZrSP',
					w : 6,
					h : 84,
					size : 84,
					video_start_ts : -115306.220703125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 6021178223040695458,
					background_colors : array(36),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -7326560259619192684,
					background_colors : array(97),
				),
			),
			dc_id : 87,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 63,
					h : 51,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'ZeEpXLvw5AFQkcRi',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 51,
						x : 1889279.431640625,
						y : 830420.9619140625,
						zoom : -1674701.59375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1211915.330078125,
					w : 63,
					h : 47,
					preload_prefix_size : 91,
					video_start_ts : 392060.9736328125,
					video_codec : 'C9mvJbsUDRHZx3PK',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 95,
					title : 'T1rRVcMZKpg50ex8',
					performer : '9ksnoqYiFydCa3UL',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'rwSFbRZY0lfEK6hy',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'EBS7Y8qbxm9eIVPc',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```