# users.savedMusic

**Layer** : 214

```tl
users.savedMusic#34a2f297 count:int documents:Vector<Document> = users.SavedMusic;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | NOTHING |
| <mark>documents</mark> | [`Vector<Document>`](type/Document) | NOTHING |

---

## Type

[users.SavedMusic](type/users.SavedMusic)

---

## Example

```php
$usersSavedMusic = $client->users->savedMusic(
	count : 44,
	documents : array(
		$client->documentEmpty(
			id : 5908847277431668128,
		),
		$client->document(
			id : -138186014589701621,
			access_hash : 3484080627293475232,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 65,
			mime_type : 'DgqvsTwky8HbU0tV',
			size : 666678167774216381,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'hadX5C8HeVxzMlf2',
				),
				$client->photoSize(
					type : '549hM3ZQCVuJRg6E',
					w : 2,
					h : 58,
					size : 34,
				),
				$client->photoCachedSize(
					type : 'sPDvIdWCo8eqRSzt',
					w : 76,
					h : 59,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'lgCvQMKVLRyqcmGN',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'C5HBr0yjwp89WUkT',
					w : 90,
					h : 13,
					sizes : array(71),
				),
				$client->photoPathSize(
					type : 'U4CFsrXGHMoOLjDp',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'XN6l4mM2yOGPAxDf',
					w : 52,
					h : 52,
					size : 7,
					video_start_ts : 1664909.8857421875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -3684043932199955934,
					background_colors : array(59),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 2382576457251796206,
					background_colors : array(2),
				),
			),
			dc_id : 73,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 70,
					h : 54,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'QXgIKHwVhJU17Mq9',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1516879.05859375,
					w : 81,
					h : 36,
					preload_prefix_size : 70,
					video_start_ts : -762531.740234375,
					video_codec : 'oNQTfXk27EYuga8q',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 4,
					title : 'CfQmiqSglALvHE9y',
					performer : 'owtlMV6c2snvYuPA',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'PY6xvOTQp0A4k5Kc',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'eavpoYLdKynWjkz9',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```