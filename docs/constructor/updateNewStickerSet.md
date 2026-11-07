# updateNewStickerSet

**Description** : *A new stickerset was installed*

**Layer** : 229

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
			installed_date : 55,
			id : -4213982244737214665,
			access_hash : 8303315482285723557,
			title : 'VDbixJLIpyqoESrU',
			short_name : '2oHF6SxNLTMU4bEs',
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'TFLfN4d96xkgOQR1',
				),
				$client->photoSize(
					type : 'pqzV2C0TeQGLS7nk',
					w : 19,
					h : 78,
					size : 93,
				),
				$client->photoCachedSize(
					type : 'BUhD7Y6MgbuLIeKA',
					w : 8,
					h : 13,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'DBtSimjWhr6dPXys',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'ce8fs2xVgb1m0ROE',
					w : 89,
					h : 0,
					sizes : array(47),
				),
				$client->photoPathSize(
					type : 'kP6Jr1Z3iLdysNEF',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 46,
			thumb_version : 88,
			thumb_document_id : 2573067856725888236,
			count : 73,
			hash : 0,
		),
		packs : array(
			$client->stickerPack(
				emoticon : '1L9jFQyVO5wqxloS',
				documents : array(2997192540992219049),
			),
		),
		keywords : array(
			$client->stickerKeyword(
				document_id : 7761210321398587744,
				keyword : array('ER4fcDaPtW3vlyek'),
			),
		),
		documents : array(
			$client->documentEmpty(
				id : -7188169339058332822,
			),
			$client->document(
				id : -2803578105477642608,
				access_hash : -2477303269788799316,
				file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				date : 80,
				mime_type : 'RHFzrphPj97X4VxQ',
				size : 7601151426627497970,
				thumbs : array(
					$client->photoSizeEmpty(
						type : '2prLXnxVZJ5I3Flf',
					),
					$client->photoSize(
						type : '56MfYZOleSoKkavi',
						w : 40,
						h : 41,
						size : 28,
					),
					$client->photoCachedSize(
						type : 'zhpWVjo2BdQRqIk6',
						w : 8,
						h : 3,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'cP8XUzB5fKeJowtp',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '6t0GRa8x9ZWUSgrP',
						w : 61,
						h : 27,
						sizes : array(50),
					),
					$client->photoPathSize(
						type : 'EQhedR0atn7kzgcs',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				video_thumbs : array(
					$client->videoSize(
						type : 'C65qzlQscNR1u0Uo',
						w : 62,
						h : 40,
						size : 79,
						video_start_ts : 1033963.697265625,
					),
					$client->videoSizeEmojiMarkup(
						emoji_id : 684975961503517449,
						background_colors : array(53),
					),
					$client->videoSizeStickerMarkup(
						stickerset : $client->inputStickerSetEmpty(...),
						sticker_id : -2492619147588442246,
						background_colors : array(21),
					),
				),
				dc_id : 50,
				attributes : array(
					$client->documentAttributeImageSize(
						w : 55,
						h : 17,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : '4lwWc5aiNRtez0Us',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -2092336.427734375,
						w : 73,
						h : 22,
						preload_prefix_size : 23,
						video_start_ts : -1312311.78515625,
						video_codec : 'mbfqCE9zjlBxuSyX',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 43,
						title : 'TxbS7zpcaN4EsrCt',
						performer : 'xJ7ze4joOYUvpb1w',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : '6ytX3b2GhSspHY7r',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'IoRzANOfEM4PCQyB',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
		),
	),
);
```