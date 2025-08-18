# stickerSetFullCovered

**Description** : *Stickerset preview with all stickers of the stickerset included\.
Currently used only for custom emoji stickersets, to avoid a further call to messages\.getStickerSet*

**Layer** : 211

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
		installed_date : 93,
		id : 7677877075308043013,
		access_hash : 4818093187151477026,
		title : 'SOJ4DIunTABXNlx1',
		short_name : 'ux7NrlcXWq12mYnL',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'zNjw6sECfZeSxU2R',
			),
			$client->photoSize(
				type : 'vPRyqTgG1zmfH9cx',
				w : 17,
				h : 78,
				size : 28,
			),
			$client->photoCachedSize(
				type : 'xrYGc8NEH3wknuK9',
				w : 88,
				h : 16,
				bytes : '`I&IVLiveProto?Q?Í',
			),
			$client->photoStrippedSize(
				type : 'N3FhpBwdPbql5Ui9',
				bytes : 'W???LiveProtok,o??',
			),
			$client->photoSizeProgressive(
				type : 'Hyo7Rep1iOgSCQDU',
				w : 42,
				h : 87,
				sizes : array(22),
			),
			$client->photoPathSize(
				type : 'hNzlp4moLIaqbrTv',
				bytes : '??~?LiveProto?̧??',
			),
		),
		thumb_dc_id : 69,
		thumb_version : 9,
		thumb_document_id : -6997603816615538134,
		count : 69,
		hash : 47,
	),
	packs : array(
		$client->stickerPack(
			emoticon : 'nqmgH452KJVkwbhE',
			documents : array(5428640454235897683),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : -4316612752561510783,
			keyword : array('yWZka4M57Hf2w8vh'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : 2363988256013999074,
		),
		$client->document(
			id : 3790836225360709200,
			access_hash : -6581493766771227666,
			file_reference : '????WLiveProtoI?"F?',
			date : 5,
			mime_type : 'YJkKHc8oGWi4MV3e',
			size : -8982617578154831008,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'Z7kNu4oTPcgjmpGz',
				),
				$client->photoSize(
					type : 'eAMGltgU7phnSPzm',
					w : 59,
					h : 92,
					size : 87,
				),
				$client->photoCachedSize(
					type : 'BWaAL3xpu9tmicdV',
					w : 8,
					h : 13,
					bytes : '?[?LiveProto???D',
				),
				$client->photoStrippedSize(
					type : 'JGngqjidL2f1WwHm',
					bytes : '?????LiveProto???\'',
				),
				$client->photoSizeProgressive(
					type : 'DdxkWni7P8vRsp5T',
					w : 76,
					h : 33,
					sizes : array(7),
				),
				$client->photoPathSize(
					type : 'BZRDAFEmhrotGnxz',
					bytes : '?(?$LiveProto?`?',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '5w4dx9ijhUFOCAgu',
					w : 48,
					h : 66,
					size : 8,
					video_start_ts : -1459985.0029296875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 174216858527653542,
					background_colors : array(8),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 3672916503617522450,
					background_colors : array(44),
				),
			),
			dc_id : 84,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 8,
					h : 40,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '5MEjGsqVgxyWJ0Xb',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -993016.23046875,
					w : 56,
					h : 78,
					preload_prefix_size : 32,
					video_start_ts : 794339.0283203125,
					video_codec : 'ZkY5lbdvUF7t0y4c',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 27,
					title : 'PJqihxNFX9rBY58L',
					performer : 'dGPtq0v2OLSHRIQM',
					waveform : '(A??KLiveProto?R?s',
				),
				$client->documentAttributeFilename(
					file_name : 'FUkzb4t6OIQJhavL',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'eN45iqVFfhItOBc9',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```