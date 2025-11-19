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
		installed_date : 73,
		id : 2097265447702978277,
		access_hash : -2917003007275971401,
		title : 'jgBrAptI5SE10VPc',
		short_name : 'A0Xlh3xMvdjSy5Eo',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'jTmBebGUaLO8SXYN',
			),
			$client->photoSize(
				type : '82aeBTYn1DjEV3L4',
				w : 99,
				h : 73,
				size : 6,
			),
			$client->photoCachedSize(
				type : 'JMkpXb6fzuDswNVO',
				w : 35,
				h : 26,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'RwJrsafmOXFpdEWI',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'EpUtQwrCSxu0WVRZ',
				w : 56,
				h : 94,
				sizes : array(97),
			),
			$client->photoPathSize(
				type : 'HqWouZ8LkRTdnF1b',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 67,
		thumb_version : 5,
		thumb_document_id : 6669174511221676099,
		count : 95,
		hash : 0,
	),
	packs : array(
		$client->stickerPack(
			emoticon : 'gS4q7GKkPxrTRjO6',
			documents : array(-2828976222973677491),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : -4282965920641534831,
			keyword : array('zjk5rBJ0ZFA9Dl3q'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : -8679573803896683590,
		),
		$client->document(
			id : -6575834852915813859,
			access_hash : -2220145466820555751,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 49,
			mime_type : '5U7lK493CSwQXuv0',
			size : -5157393894382754749,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'IwZRBr5kDm1pcXgz',
				),
				$client->photoSize(
					type : 'J4gmsM0ZHfS71XID',
					w : 28,
					h : 14,
					size : 80,
				),
				$client->photoCachedSize(
					type : 'WeS9v42wRaZc1OpN',
					w : 67,
					h : 57,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '0xEliVPnBS8h3kWJ',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '5UDFGVRm2YXAIeir',
					w : 81,
					h : 54,
					sizes : array(93),
				),
				$client->photoPathSize(
					type : 'xeVfR02Lg9TZ4qMp',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'W4co7UNEBSi3aZIC',
					w : 46,
					h : 96,
					size : 41,
					video_start_ts : -1885852.6748046875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -1531035338413719861,
					background_colors : array(17),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -197902799128572610,
					background_colors : array(74),
				),
			),
			dc_id : 71,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 46,
					h : 1,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'RxzwZcT7yqBO3Q8j',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 18,
						x : -521392.703125,
						y : 1551425.748046875,
						zoom : -80860.8212890625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1417386.7431640625,
					w : 81,
					h : 12,
					preload_prefix_size : 88,
					video_start_ts : 537606.8173828125,
					video_codec : '1JZcKvwRluTGEHnL',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 96,
					title : '5CDBYucG3Wx6vqrA',
					performer : 'uFpIh5ngfsM8K7DY',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'fivPI1UHFLpd2j9s',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'ErWiyVkKD1QFJnL7',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```