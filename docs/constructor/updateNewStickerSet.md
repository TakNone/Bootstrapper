# updateNewStickerSet

**Description** : *A new stickerset was installed*

**Layer** : 225

```tl
updateNewStickerSet#688a30aa stickerset:messages.StickerSet = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stickerset</mark> | [`messages.StickerSet`](type/messages.StickerSet) | The installed stickerset |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateNewStickerSet(
	stickerset : $client->messages->stickerSet(
		set : $client->stickerSet(
			archived : true,
			official : true,
			masks : true,
			emojis : true,
			text_color : true,
			channel_emoji_status : true,
			creator : true,
			installed_date : 87,
			id : 1250695851930575447,
			access_hash : -5727120623075616831,
			title : 'jhmtAZpYg2cl31q5',
			short_name : 's10RUfpa3Vk7MnjD',
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'TkXdrEgwisLBtvI2',
				),
				$client->photoSize(
					type : 'j70YlbKGyidL9kHJ',
					w : 37,
					h : 100,
					size : 59,
				),
				$client->photoCachedSize(
					type : 'WlX4RP91gfveV63I',
					w : 72,
					h : 87,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'lU8Mw6gZiE10mqzK',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'POa8LdfUG7hgSQub',
					w : 0,
					h : 47,
					sizes : array(20),
				),
				$client->photoPathSize(
					type : 'ILe17xsA5nWPcRKS',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 55,
			thumb_version : 42,
			thumb_document_id : 5144698851991299163,
			count : 34,
			hash : 0,
		),
		packs : array(
			$client->stickerPack(
				emoticon : 'jg3moMeAGELnryZK',
				documents : array(2840657388312480201),
			),
		),
		keywords : array(
			$client->stickerKeyword(
				document_id : 5414663673298545744,
				keyword : array('r61ZM0T2n8yXcuQ5'),
			),
		),
		documents : array(
			$client->documentEmpty(
				id : -5911395899486826379,
			),
			$client->document(
				id : 893351604900803861,
				access_hash : -8308773920742504650,
				file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				date : 56,
				mime_type : 'hTbod8QeHjfK5w7N',
				size : 6730268473066599590,
				thumbs : array(
					$client->photoSizeEmpty(
						type : '1dI9q2BeuT4VvMYk',
					),
					$client->photoSize(
						type : 'w1bQLnyY2GNT0iVE',
						w : 12,
						h : 97,
						size : 49,
					),
					$client->photoCachedSize(
						type : 'owviRBPIuedyqtM6',
						w : 92,
						h : 81,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'vaCRWZd32bTjIBKA',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'WGw2X8UokDJILMQl',
						w : 87,
						h : 96,
						sizes : array(10),
					),
					$client->photoPathSize(
						type : 'VmR8up6sjGySivxq',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				video_thumbs : array(
					$client->videoSize(
						type : 'kewFMaAJxpbOCqVt',
						w : 30,
						h : 82,
						size : 31,
						video_start_ts : -2020890.0849609375,
					),
					$client->videoSizeEmojiMarkup(
						emoji_id : 5754198141543112938,
						background_colors : array(50),
					),
					$client->videoSizeStickerMarkup(
						stickerset : $client->inputStickerSetEmpty(...),
						sticker_id : -204777547795228188,
						background_colors : array(93),
					),
				),
				dc_id : 8,
				attributes : array(
					$client->documentAttributeImageSize(
						w : 3,
						h : 53,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'JS16lL3uNbD7Rx4s',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 1996447.55859375,
						w : 51,
						h : 87,
						preload_prefix_size : 37,
						video_start_ts : 899273.5419921875,
						video_codec : 'Ufcg3Jp541lZ2HOY',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 100,
						title : 'lDtuQ5hT9S6kE8pV',
						performer : 'YdwOkNSMTtyvujIC',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'x2pGrF5C4W3UzLmP',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'tRjAz4TfOWE9dIH0',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
		),
	),
);
```