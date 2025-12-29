# messages.stickerSet

**Description** : *Stickerset and stickers inside it*

**Layer** : 218

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
		installed_date : 33,
		id : -680782193392719266,
		access_hash : 6619611536824509502,
		title : '5W7Zdy4pRsIOFEtl',
		short_name : 'WaQ8hJu15Tcseif3',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'T9K3zG1p0X4LvMsr',
			),
			$client->photoSize(
				type : 'y3svlApUZzGWHDhO',
				w : 14,
				h : 59,
				size : 87,
			),
			$client->photoCachedSize(
				type : 'rf5KYqIOugo7F2hE',
				w : 29,
				h : 74,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'ifsNu4gLV0XmT7nr',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'uXiS846LdyEexvBV',
				w : 2,
				h : 16,
				sizes : array(55),
			),
			$client->photoPathSize(
				type : 'JorImZQDK57Csb3i',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 24,
		thumb_version : 16,
		thumb_document_id : 3670580652889694014,
		count : 43,
		hash : 0,
	),
	packs : array(
		$client->stickerPack(
			emoticon : 'uxOvj0sIhWr7T9oH',
			documents : array(-6151532633025103376),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : 3247302982109271213,
			keyword : array('BQSrjzXAuiLtkGY0'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : -4094563925751775597,
		),
		$client->document(
			id : -2411848317322526851,
			access_hash : 1836669954677085091,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 6,
			mime_type : '6ZrfSd2vQVgIAn1G',
			size : -2006318262761516480,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'yW3t4bhuxUBkrwlE',
				),
				$client->photoSize(
					type : 'OQsmGRLgZjwNrxIY',
					w : 99,
					h : 92,
					size : 86,
				),
				$client->photoCachedSize(
					type : 'T5LSGzZ41UfE6BsC',
					w : 31,
					h : 64,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'MujPRGHF4qSWokI7',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'yudjPqBlo2pgC78m',
					w : 50,
					h : 83,
					sizes : array(77),
				),
				$client->photoPathSize(
					type : 'xmzlVhqRvOkJXMnN',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'aSjYxD8mfid0h3n1',
					w : 57,
					h : 84,
					size : 10,
					video_start_ts : -722875.7333984375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -7987219726246838347,
					background_colors : array(18),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 3021325053306125203,
					background_colors : array(88),
				),
			),
			dc_id : 53,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 41,
					h : 1,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'LjbGQuAPItS6FEWc',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 76,
						x : -473557.7998046875,
						y : -780865.638671875,
						zoom : 1424834.251953125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1455078.576171875,
					w : 88,
					h : 84,
					preload_prefix_size : 87,
					video_start_ts : -162455.513671875,
					video_codec : 'DEZQ6IitUKFRapA9',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 95,
					title : 'erniIm1yxO9lpXYC',
					performer : 'Rz3EKt0nFYikdBMV',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'nz9fBZDgpuQ1R7oI',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'ELtpanowgrxfUM7i',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```