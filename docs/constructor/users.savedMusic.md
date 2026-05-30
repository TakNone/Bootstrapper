# users.savedMusic

**Description** : *List of songs currently pinned on a user&#039;s profile, see here &raquo; for more info*

**Layer** : 222

```tl
users.savedMusic#34a2f297 count:int documents:Vector<Document> = users.SavedMusic;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of songs (can be bigger than documents depending on the passed limit, and the default maximum limit in which case pagination is required) |
| <mark>documents</mark> | [`Vector<Document>`](type/Document) | Songs |

---

## Type

[users.SavedMusic](type/users.SavedMusic)

---

## Example

```php
$usersSavedMusic = $client->users->savedMusic(
	count : 66,
	documents : array(
		$client->documentEmpty(
			id : -4143219327517338460,
		),
		$client->document(
			id : 4963640606381103192,
			access_hash : 3759492331968634812,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 16,
			mime_type : 'ZxGbMi0uew9vNop2',
			size : -5472683609902438583,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'B6lunxk0NCjMqvwD',
				),
				$client->photoSize(
					type : 'OFsPlTxih1RMIKq8',
					w : 65,
					h : 90,
					size : 86,
				),
				$client->photoCachedSize(
					type : '40ho9zQrwAZ6daDe',
					w : 19,
					h : 63,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'oGQecZXl7hAmSfvC',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'GfYAm5TktWJBn8Id',
					w : 11,
					h : 51,
					sizes : array(30),
				),
				$client->photoPathSize(
					type : 'uqI5LOar0Rt38MBc',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'hNt2rGg4sMfwXlL9',
					w : 45,
					h : 26,
					size : 16,
					video_start_ts : -531103.2255859375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 7745036916062044178,
					background_colors : array(26),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 8133443317272207282,
					background_colors : array(8),
				),
			),
			dc_id : 24,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 1,
					h : 2,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'LoXPxRcFuMekHsm9',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 89,
						x : 1845187.3076171875,
						y : -548248.4013671875,
						zoom : -673528.412109375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1885883.4091796875,
					w : 4,
					h : 0,
					preload_prefix_size : 70,
					video_start_ts : -991583.08984375,
					video_codec : '72C6PTDnpiO1oBvL',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 81,
					title : 'nFlYsRBWkXUEp2hu',
					performer : '71DPVMF2lcGefRCH',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'xRk596B3e8EVNYQl',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'xYlAGFz8umL0CD5K',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```