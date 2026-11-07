# updateNewStickerSet

**Description** : *A new stickerset was installed*

**Layer** : 233

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
			installed_date : 83,
			id : 7207126672472647033,
			access_hash : 5640629117238668104,
			title : '5eDFHfQhNtYg0MAd',
			short_name : 'eBKniFYlXgsS4Qmp',
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'gSiNj6PeJfrylv8B',
				),
				$client->photoSize(
					type : 'jAwKtWg3hIN95o1s',
					w : 100,
					h : 94,
					size : 9,
				),
				$client->photoCachedSize(
					type : 'QCWFDvjRHp19tkBa',
					w : 0,
					h : 58,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'M3HnucXExGJN8FQs',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'R3VbWiUAvjtxCByS',
					w : 15,
					h : 66,
					sizes : array(40),
				),
				$client->photoPathSize(
					type : 'FKBas4ihEoevxunq',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 5,
			thumb_version : 40,
			thumb_document_id : 5636408997726728990,
			count : 76,
			hash : 0,
		),
		packs : array(
			$client->stickerPack(
				emoticon : 'xtmrIQJw3TRWlOS5',
				documents : array(-6982762030559406021),
			),
		),
		keywords : array(
			$client->stickerKeyword(
				document_id : -4455538484254514763,
				keyword : array('s9exgjvhZ4uMR8YE'),
			),
		),
		documents : array(
			$client->documentEmpty(
				id : 8511712112629301161,
			),
			$client->document(
				id : 4479343513816358058,
				access_hash : 2684709997830166309,
				file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				date : 84,
				mime_type : 'GP9m5Bjxy3r4KuhL',
				size : -1926296861606410346,
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'EYAU35LIJ4gaHFx8',
					),
					$client->photoSize(
						type : 'V0JQcOrDToFyt6bw',
						w : 70,
						h : 11,
						size : 42,
					),
					$client->photoCachedSize(
						type : 'u3wU6BEnFogDxcCk',
						w : 63,
						h : 28,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'mbFgaG7x0v3T1H9R',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'kiTVtZE13v8QlNjb',
						w : 13,
						h : 51,
						sizes : array(99),
					),
					$client->photoPathSize(
						type : 'tFHW547dQkCovUR1',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				video_thumbs : array(
					$client->videoSize(
						type : 'QwMnsWitNbKa7UL5',
						w : 71,
						h : 65,
						size : 18,
						video_start_ts : 1255594.65234375,
					),
					$client->videoSizeEmojiMarkup(
						emoji_id : -4102672261953895821,
						background_colors : array(91),
					),
					$client->videoSizeStickerMarkup(
						stickerset : $client->inputStickerSetEmpty(...),
						sticker_id : -8404023280574878209,
						background_colors : array(76),
					),
				),
				dc_id : 27,
				attributes : array(
					$client->documentAttributeImageSize(
						w : 44,
						h : 62,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : '2WFehikJnTxqcREa',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -495779.794921875,
						w : 92,
						h : 57,
						preload_prefix_size : 79,
						video_start_ts : 823253.0458984375,
						video_codec : 'uKldVpNLGHnEazB8',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 31,
						title : 'EYMpLlVuhg0crRzB',
						performer : 'KUCfrsREAeOFtQJh',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'Xr5n7hlaeZYmSHGb',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'z7ofPeyG0ZtCA2qx',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
		),
	),
);
```