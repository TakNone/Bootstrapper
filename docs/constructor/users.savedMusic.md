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
	count : 99,
	documents : array(
		$client->documentEmpty(
			id : 8258949652665336887,
		),
		$client->document(
			id : -42228371431327867,
			access_hash : 1503893014657080471,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 62,
			mime_type : 'ISkWv8dLqbDGcPXa',
			size : 6021575401744645251,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'RlMmzbsPG2vxf8eX',
				),
				$client->photoSize(
					type : 'JxclADH4jRnMB2Sm',
					w : 58,
					h : 14,
					size : 80,
				),
				$client->photoCachedSize(
					type : 'ctEHeiMTr5A4z10m',
					w : 27,
					h : 40,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'V8NbYXa3gq0mfCMz',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '5c9KXCfGRH18UATr',
					w : 20,
					h : 95,
					sizes : array(31),
				),
				$client->photoPathSize(
					type : 'ry8nf4SmcPOWMQVo',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'Vz9gdWFJKre2YGTy',
					w : 7,
					h : 43,
					size : 99,
					video_start_ts : -317729.6884765625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 3431373171796501336,
					background_colors : array(35),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 7337454188828814805,
					background_colors : array(70),
				),
			),
			dc_id : 7,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 99,
					h : 14,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'VGb7TSx2v4PCac0L',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 10,
						x : -74527.255859375,
						y : -1865977.0908203125,
						zoom : -527250.5439453125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 122116.2705078125,
					w : 26,
					h : 92,
					preload_prefix_size : 40,
					video_start_ts : 1177712.65625,
					video_codec : 'N94qluGWeZCwbYox',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 35,
					title : 'QFq93VDspya2JMK8',
					performer : 'xpJUZX6nMhBmoQ89',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'hbz10sqrcNSet8oX',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '0ZovH1F89RTIrqti',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```