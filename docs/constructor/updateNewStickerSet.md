# updateNewStickerSet

**Description** : *A new stickerset was installed*

**Layer** : 218

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
			installed_date : 49,
			id : 7479519765625922680,
			access_hash : 5224830085379423662,
			title : 'peVqdr381mfNPQa6',
			short_name : 'Ga6OrASjpexbTNVB',
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'fjJPuAUg9Tv58SFG',
				),
				$client->photoSize(
					type : 'qCzfJMAHojsU6hvY',
					w : 35,
					h : 86,
					size : 13,
				),
				$client->photoCachedSize(
					type : 'nHu3X7VG5xWwhOsY',
					w : 93,
					h : 55,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'RHoBXP6cxL5iCtJd',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'U6g21oQZamAS9JE5',
					w : 19,
					h : 79,
					sizes : array(98),
				),
				$client->photoPathSize(
					type : 'o1NRSgHDI8LqsmK0',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 87,
			thumb_version : 8,
			thumb_document_id : 1500795442550214916,
			count : 7,
			hash : 0,
		),
		packs : array(
			$client->stickerPack(
				emoticon : 'voD1u9M4AwWVEn0h',
				documents : array(3903116292869129655),
			),
		),
		keywords : array(
			$client->stickerKeyword(
				document_id : -392485079986491760,
				keyword : array('Lsvlgrc0bDxJuijt'),
			),
		),
		documents : array(
			$client->documentEmpty(
				id : 846989116413795883,
			),
			$client->document(
				id : -3681017914099128477,
				access_hash : -4852627241792823331,
				file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				date : 22,
				mime_type : 'NmIgY4XlRwr9cBvD',
				size : 4971903592074010140,
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'dsCNoQw6HBSp9ZMT',
					),
					$client->photoSize(
						type : 'eCf28swOI7EiVJvz',
						w : 88,
						h : 14,
						size : 18,
					),
					$client->photoCachedSize(
						type : 'uHfeLmBz4gO89lR2',
						w : 61,
						h : 90,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'ADLvjmGHBO9rsInx',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'FfoClcqdQYOJzZmS',
						w : 12,
						h : 46,
						sizes : array(59),
					),
					$client->photoPathSize(
						type : 'k8oXuM0f1VHTNWAx',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				video_thumbs : array(
					$client->videoSize(
						type : '8hviyHbSNdLMsYDP',
						w : 82,
						h : 38,
						size : 70,
						video_start_ts : -1989351.3486328125,
					),
					$client->videoSizeEmojiMarkup(
						emoji_id : -5979968557866983342,
						background_colors : array(57),
					),
					$client->videoSizeStickerMarkup(
						stickerset : $client->inputStickerSetEmpty(...),
						sticker_id : 8068833703522112271,
						background_colors : array(16),
					),
				),
				dc_id : 45,
				attributes : array(
					$client->documentAttributeImageSize(
						w : 47,
						h : 30,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'ov3ULIYxPDXirTcf',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -204444.2158203125,
						w : 55,
						h : 79,
						preload_prefix_size : 32,
						video_start_ts : 311004.3544921875,
						video_codec : 'YndRT0acHlJP2BUq',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 92,
						title : 'eGK48skd3vQmto97',
						performer : 'FLuvx1dQaI8XiMUB',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'TBMFp3vNIiRAQXoS',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : '6D4SAmKzvyboJZBu',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
		),
	),
);
```