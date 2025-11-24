# stickerSetFullCovered

**Description** : *Stickerset preview with all stickers of the stickerset included\.
Currently used only for custom emoji stickersets, to avoid a further call to messages\.getStickerSet*

**Layer** : 218

```tl
stickerSetFullCovered#40d13c0e set:StickerSet packs:Vector<StickerPack> keywords:Vector<StickerKeyword> documents:Vector<Document> = StickerSetCovered;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>set</mark> | [`StickerSet`](type/StickerSet) | Stickerset |
| <mark>packs</mark> | [`Vector<StickerPack>`](type/StickerPack) | Emoji information about every sticker in the stickerset |
| <mark>keywords</mark> | [`Vector<StickerKeyword>`](type/StickerKeyword) | Keywords for some or every sticker in the stickerset |
| <mark>documents</mark> | [`Vector<Document>`](type/Document) | Stickers |

---

## Type

[StickerSetCovered](type/StickerSetCovered)

---

## Example

```php
$stickerSetCovered = $client->stickerSetFullCovered(
	set : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 6,
		id : 4020187469772163871,
		access_hash : -3381312114943172884,
		title : 'IBLSuxhgbOarFUjq',
		short_name : 'i5Ilw8cC7mMeXDNA',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'Ptf8qVBr7G4IiQUc',
			),
			$client->photoSize(
				type : 'dpCbs6WhOVSuUXNa',
				w : 93,
				h : 22,
				size : 28,
			),
			$client->photoCachedSize(
				type : 'ipF0Bm8GYZU5RXnf',
				w : 31,
				h : 95,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'y4zHPS1d5AngG2qF',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'J2MlrzxH1UegpmDX',
				w : 81,
				h : 32,
				sizes : array(92),
			),
			$client->photoPathSize(
				type : 'ClgDYds7f48OxTGt',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 58,
		thumb_version : 90,
		thumb_document_id : 5766573947439098237,
		count : 73,
		hash : 0,
	),
	packs : array(
		$client->stickerPack(
			emoticon : 'Hq3w0oZXtiyVDEM4',
			documents : array(329825305292117432),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : 4718365209042628870,
			keyword : array('jZftTxuEeoCdiwRI'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : 7882402006980566406,
		),
		$client->document(
			id : -3635382994202972689,
			access_hash : 1994517036902181453,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 29,
			mime_type : 'aJgCrSjqxb9huymD',
			size : -6165771741936510347,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'YXbTULao3Avu691c',
				),
				$client->photoSize(
					type : '8HxbYV65UK7hFQAn',
					w : 60,
					h : 47,
					size : 43,
				),
				$client->photoCachedSize(
					type : 'WASl6C93XKOVeID2',
					w : 31,
					h : 31,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '1TCL7NmEPqalIuHJ',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'vUEGmYNdQzqROkxw',
					w : 54,
					h : 38,
					sizes : array(17),
				),
				$client->photoPathSize(
					type : 'tgqEz360VlbNBGsp',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'A3DwHr6pBdJQSbWx',
					w : 54,
					h : 46,
					size : 41,
					video_start_ts : -560758.169921875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 4272192027365971595,
					background_colors : array(46),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 9001997352084851835,
					background_colors : array(47),
				),
			),
			dc_id : 45,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 28,
					h : 71,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'jst1vhe2PEGR0ISw',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 50,
						x : 861361.03125,
						y : -220915.6572265625,
						zoom : 554901.5478515625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -993269.9326171875,
					w : 89,
					h : 23,
					preload_prefix_size : 3,
					video_start_ts : -943348.83984375,
					video_codec : 'RpTo4dhUfCsr63vJ',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 51,
					title : 'mjIfTG0zd6wg8WY5',
					performer : 'mLkjpADY5qCFK0O7',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '7WEG6JvdQ4c01YXr',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'i8XGCBW7JHyevdlh',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```