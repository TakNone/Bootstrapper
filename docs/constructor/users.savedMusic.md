# users.savedMusic

**Description** : *List of songs currently pinned on a user&#039;s profile, see here &raquo; for more info*

**Layer** : 216

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
	count : 35,
	documents : array(
		$client->documentEmpty(
			id : 2681580562177598319,
		),
		$client->document(
			id : -5269437571263988424,
			access_hash : 690415935608533788,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 55,
			mime_type : 'N5cmr8I2PzF9b1yo',
			size : -7719232680219382019,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '4bzSteOYy6TaumrC',
				),
				$client->photoSize(
					type : 'rP5NgkmZp2jcFbzh',
					w : 36,
					h : 57,
					size : 45,
				),
				$client->photoCachedSize(
					type : 'D1gUiNG5ZBd90MV7',
					w : 73,
					h : 91,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'qVaFsvhyknH0fLEP',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'UjVWyNn1OBbauQie',
					w : 69,
					h : 12,
					sizes : array(19),
				),
				$client->photoPathSize(
					type : 'jEI6UBahqnzrJoZ0',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'GnRybfcm06oPWKDx',
					w : 77,
					h : 22,
					size : 87,
					video_start_ts : 700506.517578125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 7613836189694046386,
					background_colors : array(11),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 238152780621359158,
					background_colors : array(13),
				),
			),
			dc_id : 2,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 76,
					h : 86,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'qwcenPfLt0z8K5iB',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1851045.9384765625,
					w : 53,
					h : 91,
					preload_prefix_size : 12,
					video_start_ts : -425585.41796875,
					video_codec : 'umeZHbPU6E280D3j',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 55,
					title : '9vZjAEHsukNRyX3M',
					performer : '71YTEujNLdHIUx5S',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'lIoXSvxFpHVJR9hr',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'sVo2WZAvieaY1pGy',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```