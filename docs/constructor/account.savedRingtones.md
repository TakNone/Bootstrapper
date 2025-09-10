# account.savedRingtones

**Description** : *A list of saved notification sounds*

**Layer** : 214

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
			id : 4718981891459961520,
		),
		$client->document(
			id : 695034382585709243,
			access_hash : 232171014957013819,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 35,
			mime_type : 'FgIKpYZ4WdL6iX82',
			size : 7067037420315953372,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '6gMJz5iBUk8OIY7v',
				),
				$client->photoSize(
					type : 'jSiyFGKgc4qbr6M8',
					w : 92,
					h : 70,
					size : 5,
				),
				$client->photoCachedSize(
					type : '4hnSRFtJwjOeyTB7',
					w : 38,
					h : 85,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'Ju7xYe5rEnacSqvt',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'VlTUo0DQnr9cIkd1',
					w : 46,
					h : 61,
					sizes : array(46),
				),
				$client->photoPathSize(
					type : 'dqou1bLktNjPUrhJ',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'ZKPmdyeMb8nAsXfD',
					w : 56,
					h : 25,
					size : 66,
					video_start_ts : -788975.677734375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 5374618884189579244,
					background_colors : array(43),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -8587220848957919938,
					background_colors : array(81),
				),
			),
			dc_id : 99,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 56,
					h : 5,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'Vb0uJnAOBpqFyR85',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -19283.65625,
					w : 27,
					h : 27,
					preload_prefix_size : 86,
					video_start_ts : 617799.3486328125,
					video_codec : 'eCgSnjH6Id2ulXsD',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 25,
					title : 'YLzDE9n0WB78qrgi',
					performer : '0DThIyMoqiEnJH3a',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'Xwe74ZvPGtLzpnQx',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '4rqhoF9yTSeLMW5u',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```