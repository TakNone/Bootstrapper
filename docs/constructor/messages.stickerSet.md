# messages.stickerSet

**Description** : *Stickerset and stickers inside it*

**Layer** : 227

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
		installed_date : 56,
		id : -4204745540701897911,
		access_hash : 1678768566747322898,
		title : 'WrBMZHfu3gUGONwv',
		short_name : 'hbgvS1AMGwIaVFur',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'ej34a9MfhVKLDxUu',
			),
			$client->photoSize(
				type : 'Pet28rTDsM5bBQFu',
				w : 15,
				h : 73,
				size : 65,
			),
			$client->photoCachedSize(
				type : 'VgmA6uNFGLs5Tb4O',
				w : 60,
				h : 37,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'Z4t72laxehRDQOLJ',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'PVSAc6ykfuXEhRN7',
				w : 54,
				h : 91,
				sizes : array(32),
			),
			$client->photoPathSize(
				type : 'cqKzTdfRH4SWsAX2',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 13,
		thumb_version : 75,
		thumb_document_id : -1968723954745224292,
		count : 18,
		hash : 0,
	),
	packs : array(
		$client->stickerPack(
			emoticon : 'b4jTLJaNeC0SoxXf',
			documents : array(-4273351474292370471),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : 3290546041398153470,
			keyword : array('DeNmhpOsgyXSbv5d'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : -3975292420875423350,
		),
		$client->document(
			id : -1270019703390012553,
			access_hash : 6169525307878794079,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 21,
			mime_type : '8JuMzd7UXiRxpaV2',
			size : -3499246232542618184,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '2Pg1oMaTC6UFuVKq',
				),
				$client->photoSize(
					type : 'UX7BSKN9RFa0lgD5',
					w : 7,
					h : 89,
					size : 54,
				),
				$client->photoCachedSize(
					type : 'gKHapyQt62mDzB7o',
					w : 75,
					h : 30,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'MoHEGBRxp4P3dv87',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'Tk2c5byoU60jXRH4',
					w : 38,
					h : 69,
					sizes : array(100),
				),
				$client->photoPathSize(
					type : 'YE1DXrvbwL3lQNfi',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'fPFtzJMoQ1mpyleg',
					w : 56,
					h : 53,
					size : 85,
					video_start_ts : 9739.998046875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 1489687761209819609,
					background_colors : array(72),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -590303646437492670,
					background_colors : array(26),
				),
			),
			dc_id : 87,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 86,
					h : 98,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'ndhTGNzCK0c12uEt',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 75,
						x : -1685909.193359375,
						y : -1961355.498046875,
						zoom : -1828065.2802734375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -106669.544921875,
					w : 27,
					h : 24,
					preload_prefix_size : 10,
					video_start_ts : -1717770.84765625,
					video_codec : '2PraZVoYN9fktdDL',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 38,
					title : '1Q4ka5OdzDscFWoe',
					performer : 'ZeNiRyFLjDT2muEO',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'xKdnL92GfoP0VvBJ',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'hDZF5bSliCmGgMP7',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```