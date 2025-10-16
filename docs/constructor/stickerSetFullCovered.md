# stickerSetFullCovered

**Description** : *Stickerset preview with all stickers of the stickerset included\.
Currently used only for custom emoji stickersets, to avoid a further call to messages\.getStickerSet*

**Layer** : 216

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
		installed_date : 78,
		id : 633037557701945474,
		access_hash : -1332071972057885983,
		title : 'JwmKa9v4RS265iEG',
		short_name : 'QiO3jhLurMT0fAYw',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'MIJ2rxXfdWb9uFGn',
			),
			$client->photoSize(
				type : 'HgPSRarKiDbXpFUu',
				w : 13,
				h : 62,
				size : 52,
			),
			$client->photoCachedSize(
				type : '5M0H7XsuobNDw6Ky',
				w : 100,
				h : 10,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'O2sIrPwky0VAQC46',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'Asi1grfNzpuYEJHU',
				w : 45,
				h : 78,
				sizes : array(5),
			),
			$client->photoPathSize(
				type : '1ld4SZUetCKYByFX',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 50,
		thumb_version : 33,
		thumb_document_id : -1725886405701933259,
		count : 42,
		hash : 0,
	),
	packs : array(
		$client->stickerPack(
			emoticon : 'kWwxvlhpMfbateUD',
			documents : array(-3631519777777207489),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : 315724922306194360,
			keyword : array('52yHsNzfu06nAJCp'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : -7417278980135664295,
		),
		$client->document(
			id : -8219569169143892419,
			access_hash : 1219191063002205339,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 64,
			mime_type : '4KgxN2BLkqp8l1vf',
			size : -4362990002711451944,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'ZCR7IwvhMsA9pG64',
				),
				$client->photoSize(
					type : '1wqeT6EHYbflOQ7o',
					w : 0,
					h : 93,
					size : 87,
				),
				$client->photoCachedSize(
					type : 'mcpLPb8IJZU9H4fS',
					w : 43,
					h : 56,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'GPyMDhFrz6u7ZLRo',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'ExIpsvBfcm13bk65',
					w : 57,
					h : 87,
					sizes : array(86),
				),
				$client->photoPathSize(
					type : 'gSRO4Coiunea9jFN',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'aILd8zSHZOPbCprf',
					w : 100,
					h : 18,
					size : 54,
					video_start_ts : 1228846.939453125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 3799597471895046376,
					background_colors : array(63),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -6506825039632007398,
					background_colors : array(43),
				),
			),
			dc_id : 68,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 41,
					h : 92,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'm7vK2rMlZXWcy96O',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -2085339.5068359375,
					w : 85,
					h : 38,
					preload_prefix_size : 60,
					video_start_ts : -1019536.322265625,
					video_codec : 'ndcfLiRbFSOys7jA',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 41,
					title : 'C9RfDPoTu0Y4nHgK',
					performer : 'GeZfpPBRSmdba2vX',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'OHZ7A8V0xaycn62t',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'VAN9L4HbfsOowt1d',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```