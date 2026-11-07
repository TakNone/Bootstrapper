# messages.stickerSet

**Description** : *Stickerset and stickers inside it*

**Layer** : 233

```tl
messages.stickerSet#6e153f16 set:StickerSet packs:Vector<StickerPack> keywords:Vector<StickerKeyword> documents:Vector<Document> = messages.StickerSet;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>set</mark> | [`StickerSet`](type/StickerSet) | The stickerset |
| <mark>packs</mark> | [`Vector<StickerPack>`](type/StickerPack) | Emoji info for stickers |
| <mark>keywords</mark> | [`Vector<StickerKeyword>`](type/StickerKeyword) | Keywords for some or every sticker in the stickerset |
| <mark>documents</mark> | [`Vector<Document>`](type/Document) | Stickers in stickerset |

---

## Type

[messages.StickerSet](type/messages.StickerSet)

---

## Example

```php
$messagesStickerSet = $client->messages->stickerSet(
	set : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 89,
		id : -8816606593391358563,
		access_hash : 5211934899671824448,
		title : 'aPLVpDf7dNwlXEk4',
		short_name : '8DuUH6IXlesmFzb4',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'O5YAF0vHk4hjLNc1',
			),
			$client->photoSize(
				type : 'mI398vjaBPUE4tMn',
				w : 53,
				h : 39,
				size : 73,
			),
			$client->photoCachedSize(
				type : 'K3EefcI2BskNraCZ',
				w : 7,
				h : 10,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : '3GOblAHZUhP1Nn56',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'vbuiX0nj7V1NDm8O',
				w : 8,
				h : 100,
				sizes : array(97),
			),
			$client->photoPathSize(
				type : 'Vg4eL0WF8u7hpOIi',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 20,
		thumb_version : 94,
		thumb_document_id : 8927389589766024088,
		count : 27,
		hash : 0,
	),
	packs : array(
		$client->stickerPack(
			emoticon : '2x4iHsVnKXbQOFzh',
			documents : array(-151258710657219520),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : 1728312813213550876,
			keyword : array('WJtfD50GMm9UQFPA'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : 3877491078293363620,
		),
		$client->document(
			id : -6114650712500647753,
			access_hash : 7519474807908431723,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 42,
			mime_type : 'wQO9crpkyLf6hmMD',
			size : -2028961803282290723,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'vEcY27hUS6Ty8Qif',
				),
				$client->photoSize(
					type : 'nFcgeAauTb2RESd8',
					w : 80,
					h : 28,
					size : 35,
				),
				$client->photoCachedSize(
					type : 'SrvOsC4UJxA60gPf',
					w : 16,
					h : 94,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '0UbgwAfVaxnJeOPN',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'gvwJKGO0oErPWh4A',
					w : 33,
					h : 80,
					sizes : array(30),
				),
				$client->photoPathSize(
					type : '1KxDMz5uydVcEw4F',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'PuBe6RKwXF5OEgpW',
					w : 13,
					h : 76,
					size : 57,
					video_start_ts : 813365.3583984375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 8930644581424770036,
					background_colors : array(97),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 7481614444725578932,
					background_colors : array(76),
				),
			),
			dc_id : 48,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 76,
					h : 88,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'y6KQuXN1zsjZmPv2',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 49,
						x : -516236.2509765625,
						y : -1125879.1591796875,
						zoom : -1708722.2705078125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -559440.8564453125,
					w : 6,
					h : 26,
					preload_prefix_size : 43,
					video_start_ts : 1629698.5302734375,
					video_codec : 'qkXdKpC8MI57DzEn',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 38,
					title : '3JdkaRuHOfo7mqAK',
					performer : 'k46JQvLzl5GPtDjK',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'QBLtZHTegrqosJxI',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'koTeN1ZAL8GIcuOf',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```