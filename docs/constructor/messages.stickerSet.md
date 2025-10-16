# messages.stickerSet

**Description** : *Stickerset and stickers inside it*

**Layer** : 216

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
		id : -9029036499999659290,
		access_hash : -4119839022065014321,
		title : 'lu850NXfbvMyA9IQ',
		short_name : 'vd13hwLIMDOYp7HV',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'ki8jFgH1QGuEdrwK',
			),
			$client->photoSize(
				type : 'TjNzR3av5F1I9xA0',
				w : 38,
				h : 34,
				size : 95,
			),
			$client->photoCachedSize(
				type : 'Oq0m96DHoQL1Tjuf',
				w : 40,
				h : 12,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'TjqHDsOF7gZI82hu',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : '9hEx4FB5kUGXMIDH',
				w : 100,
				h : 52,
				sizes : array(6),
			),
			$client->photoPathSize(
				type : 'JAD5v8wXOkNxnLGy',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 83,
		thumb_version : 100,
		thumb_document_id : 7608198236450140091,
		count : 10,
		hash : 0,
	),
	packs : array(
		$client->stickerPack(
			emoticon : 'rx9qMbs52jclDkVt',
			documents : array(8011655869107106900),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : 4560717060470813591,
			keyword : array('85xyrKjpws6NITqS'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : 189662536189112028,
		),
		$client->document(
			id : 3368792447124012040,
			access_hash : -413798732551893226,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 72,
			mime_type : 'yM7YeVRpxIBCr6b2',
			size : 7015454939130904689,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '4IaGOCgeDSxuKnij',
				),
				$client->photoSize(
					type : 'dNnHtiyAaOV5p3LR',
					w : 31,
					h : 31,
					size : 26,
				),
				$client->photoCachedSize(
					type : 'b8gpol5zE7TUkPrM',
					w : 31,
					h : 24,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '95IjMt6GRNKsXpYi',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'GNV6yPJxpjEOnYat',
					w : 93,
					h : 94,
					sizes : array(33),
				),
				$client->photoPathSize(
					type : 'gz5BwSbrxlo6vnMV',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'o90wbYdCnUIBGkxf',
					w : 80,
					h : 9,
					size : 40,
					video_start_ts : -1571648.6044921875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -5830460757709833257,
					background_colors : array(57),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 4381753580431819699,
					background_colors : array(84),
				),
			),
			dc_id : 16,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 89,
					h : 71,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'gyTW56NYQ1hfMjSs',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1351239.4677734375,
					w : 60,
					h : 13,
					preload_prefix_size : 75,
					video_start_ts : 1637380.3408203125,
					video_codec : 'Ecy2leLdrV7tGZ1O',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 24,
					title : '8swMYdQHeAr0S4cz',
					performer : 'Y0zT4nHBtrSPV2qE',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'nuct3FmGRQbl8T9h',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '9hkcs3lzuN0Ib4rV',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```