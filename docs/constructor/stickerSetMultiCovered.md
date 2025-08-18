# stickerSetMultiCovered

**Description** : *Stickerset, with multiple stickers as preview*

**Layer** : 211

```tl
stickerSetMultiCovered#3407e51b set:StickerSet covers:Vector<Document> = StickerSetCovered;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>set</mark> | [`StickerSet`](type/StickerSet) | Stickerset |
| <mark>covers</mark> | [`Vector<Document>`](type/Document) | Preview stickers |

---

## Type

[StickerSetCovered](type/StickerSetCovered)

---

## Example

```php
$stickerSetCovered = $client->stickerSetMultiCovered(
	set : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 47,
		id : 8347356593917694144,
		access_hash : 8271123356053181682,
		title : 'kxhisLtJgoMzIDYu',
		short_name : '6ndyex7M1CFXIrgj',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'ZowjV3b4SU6vlpDR',
			),
			$client->photoSize(
				type : 'n3PKAl0voYH5mj8e',
				w : 44,
				h : 85,
				size : 53,
			),
			$client->photoCachedSize(
				type : 'eFuiqMw7xA5Tp920',
				w : 63,
				h : 32,
				bytes : '?m??FLiveProto]H??',
			),
			$client->photoStrippedSize(
				type : 'eiCfZa749M8znPdK',
				bytes : 'Fm??LiveProto??k?',
			),
			$client->photoSizeProgressive(
				type : 'Q7yqRvTtgO3o1ZSF',
				w : 64,
				h : 62,
				sizes : array(84),
			),
			$client->photoPathSize(
				type : 'ZtceJYACLd1QFOaT',
				bytes : '?????LiveProtoom??',
			),
		),
		thumb_dc_id : 85,
		thumb_version : 19,
		thumb_document_id : -1182307399923600388,
		count : 76,
		hash : 17,
	),
	covers : array(
		$client->documentEmpty(
			id : 7988959019466429653,
		),
		$client->document(
			id : 4201217824189930983,
			access_hash : -4883262708131853991,
			file_reference : '#?2QLiveProto???:',
			date : 24,
			mime_type : 'AmU6IShRdNFJQKal',
			size : 5815145515023717692,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '9G7QVfXFMPk6BZSw',
				),
				$client->photoSize(
					type : 'X7V4OmjLIFqZH2ve',
					w : 76,
					h : 34,
					size : 47,
				),
				$client->photoCachedSize(
					type : '3zVBZdsEMo9tAUkb',
					w : 33,
					h : 94,
					bytes : 'o???LiveProto??m',
				),
				$client->photoStrippedSize(
					type : 'eUOdVAyZL8MEtvGq',
					bytes : '7R??LiveProto??U?',
				),
				$client->photoSizeProgressive(
					type : 'UhYOse2atxSkGPLc',
					w : 43,
					h : 15,
					sizes : array(84),
				),
				$client->photoPathSize(
					type : 'F5z6RDK8B9Z3SC7o',
					bytes : '??H??LiveProto?????',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'iRYwdWNjQAxqZT2f',
					w : 48,
					h : 70,
					size : 6,
					video_start_ts : 485278.583984375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -4350030012454903533,
					background_colors : array(70),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -1603393127430092167,
					background_colors : array(59),
				),
			),
			dc_id : 28,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 62,
					h : 41,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'iVgYXzSu5Hxpc6kW',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 33251.7021484375,
					w : 20,
					h : 59,
					preload_prefix_size : 57,
					video_start_ts : -885720.08203125,
					video_codec : '8VlTyhMfaSm0djsp',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 5,
					title : 'BFSzV8M2skTY7pOg',
					performer : 'RMrk6VyHSFT2pwXo',
					waveform : '??١-LiveProto?B??t',
				),
				$client->documentAttributeFilename(
					file_name : 'OfsJu6Dn925FGpIi',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'vcg8QlwjK5xXmaTL',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```