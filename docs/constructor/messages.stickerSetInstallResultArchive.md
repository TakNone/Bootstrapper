# messages.stickerSetInstallResultArchive

**Description** : *The stickerset was installed, but since there are too many stickersets some were archived*

**Layer** : 222

```tl
messages.stickerSetInstallResultArchive#35e410a8 sets:Vector<StickerSetCovered> = messages.StickerSetInstallResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Archived stickersets |

---

## Type

[messages.StickerSetInstallResult](type/messages.StickerSetInstallResult)

---

## Example

```php
$messagesStickerSetInstallResult = $client->messages->stickerSetInstallResultArchive(
	sets : array(
		$client->stickerSetCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 7,
				id : -7921234112214103778,
				access_hash : -6853315524669396355,
				title : '0dVbyKac9XqIiGer',
				short_name : '23AlcMXsOKimgyIG',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'hn4R8DwCUHszkZ2G',
					),
					$client->photoSize(
						type : 'DeMWYRsi4wQg8jPc',
						w : 34,
						h : 27,
						size : 7,
					),
					$client->photoCachedSize(
						type : 'BFjoKQhZucS9CUOq',
						w : 93,
						h : 27,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'qVWhIA3oG7v9Y4lf',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'zKw9StUZXlaOfMbg',
						w : 37,
						h : 44,
						sizes : array(90),
					),
					$client->photoPathSize(
						type : 'p3ZbAn6kuTHOQNY8',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 2,
				thumb_version : 59,
				thumb_document_id : 4911830696625797126,
				count : 36,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 7421573074751074745,
			),
		),
		$client->stickerSetMultiCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 43,
				id : 6588341141766511908,
				access_hash : 1785375837997234596,
				title : 'MX4yu53VEqx8pgOr',
				short_name : '7Pns2t9ZgCLpyrbV',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '4WRhUTAzbimBO8dr',
					),
					$client->photoSize(
						type : 'd27eo9EGgYLbkJxD',
						w : 35,
						h : 73,
						size : 29,
					),
					$client->photoCachedSize(
						type : 'NBidYtJQuT5E69ZA',
						w : 72,
						h : 14,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'uUZgGYRmBvVFKjyE',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'cJXYm5GKiFuhC6wl',
						w : 51,
						h : 51,
						sizes : array(47),
					),
					$client->photoPathSize(
						type : 'FY57ycGsx2iBKTa4',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 83,
				thumb_version : 52,
				thumb_document_id : -4117881374574874697,
				count : 81,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -7206660793980017293,
				),
				$client->document(
					id : -6374546753572400233,
					access_hash : 1911055445997763098,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 10,
					mime_type : 'Uiu6dISvZysmTrJV',
					size : -8230763307178505579,
					thumbs : array(
						$client->photoSizeEmpty(
							type : '9PmQtWFHiaJG8lZN',
						),
						$client->photoSize(
							type : 'AdNR0eGfCUOpvas4',
							w : 5,
							h : 10,
							size : 42,
						),
						$client->photoCachedSize(
							type : 'GvyVmfwxp09UcjaC',
							w : 21,
							h : 83,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : '8xhalRPeKrycW3Yd',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'QGskp85ZYxHJzEmr',
							w : 80,
							h : 18,
							sizes : array(5),
						),
						$client->photoPathSize(
							type : 'JT5ur7zHNC2vcbYL',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'jO7oF4DwJb2ZEKm6',
							w : 52,
							h : 76,
							size : 28,
							video_start_ts : 1885577.7509765625,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 6948719542134431718,
							background_colors : array(12),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -7601920864091917666,
							background_colors : array(25),
						),
					),
					dc_id : 32,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 18,
							h : 32,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : '45uYkXEGSiOsZFBI',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1431012.662109375,
							w : 42,
							h : 76,
							preload_prefix_size : 72,
							video_start_ts : -1743945.9921875,
							video_codec : 'hgUqQRCKB9FO3Aw5',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 74,
							title : '9Xio2RrgMHOwjcq7',
							performer : '1mw3fgikExKOR2bP',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : '12GLsiWoYtqZJfE5',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : '7XmL5zrY16MwKTtS',
							stickerset : $client->inputStickerSetEmpty(...),
						),
					),
				),
			),
		),
		$client->stickerSetFullCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 6,
				id : -8737431255803969697,
				access_hash : 1014166235147462333,
				title : 'rWOefTNKQ0mCHoy4',
				short_name : 'XcEoJLa4Qgpy7m1V',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'X37RemWs0dLnOCJ2',
					),
					$client->photoSize(
						type : 'Ycj5gZoultBWepnH',
						w : 6,
						h : 52,
						size : 89,
					),
					$client->photoCachedSize(
						type : 'XDiRJ0vFHsPVua72',
						w : 36,
						h : 8,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'ELcSw7ngHtQDZqfk',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'ivxQr0nwcWkDzBLj',
						w : 98,
						h : 67,
						sizes : array(77),
					),
					$client->photoPathSize(
						type : 'JCgfUlhKdSIkWeub',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 20,
				thumb_version : 26,
				thumb_document_id : 3360349752322555269,
				count : 16,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'SPQAUGpbYfETDjmd',
					documents : array(649803077241646164),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -176269028253078904,
					keyword : array('Bl4O81YNFm5zDjfR'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 6902528998172182861,
				),
				$client->document(
					id : -7992331551477094110,
					access_hash : -4688969758915397088,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 78,
					mime_type : 'dknLKUzSBvs2DtlY',
					size : 1359869778888871551,
					thumbs : array(
						$client->photoSizeEmpty(
							type : '0vXLmibSyAuUrVcg',
						),
						$client->photoSize(
							type : 'fNnoTR7CBjXMEh1z',
							w : 69,
							h : 38,
							size : 58,
						),
						$client->photoCachedSize(
							type : 'SEqro7GkiLumFxpz',
							w : 53,
							h : 41,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'pv5qi7T6akj340gI',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : '7maVzU9uy06K8AEk',
							w : 97,
							h : 52,
							sizes : array(16),
						),
						$client->photoPathSize(
							type : 'vtMJE5zOXk6BmQSP',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'zE9hmuI26O8J7UZj',
							w : 73,
							h : 40,
							size : 30,
							video_start_ts : 354886.4033203125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -6826903335423337842,
							background_colors : array(56),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 4625075002629715229,
							background_colors : array(32),
						),
					),
					dc_id : 57,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 98,
							h : 70,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'afSRQVI6gpcw451e',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -1617897.23828125,
							w : 86,
							h : 97,
							preload_prefix_size : 24,
							video_start_ts : 1396546.5439453125,
							video_codec : 'db7CjDm8xSXVMva2',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 12,
							title : 'ADZE3rv9JBhYzs5d',
							performer : 'QWeCEVkKvj8icz9H',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'mNiUzZBg5cL0TkuE',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'nQW94UwTA2cVRFgm',
							stickerset : $client->inputStickerSetEmpty(...),
						),
					),
				),
			),
		),
		$client->stickerSetNoCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 45,
				id : -6912624839569691592,
				access_hash : -1123318852973598251,
				title : 'Ctdk4DPKsFWqZUpg',
				short_name : 'kIjPJRy3lhGQ10EW',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'WTxsfFqaGwm64jdY',
					),
					$client->photoSize(
						type : '2QtZVWcouh0KEAlN',
						w : 98,
						h : 37,
						size : 39,
					),
					$client->photoCachedSize(
						type : 'HE3i0FJOeNWX98ky',
						w : 44,
						h : 68,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : '5HcyDefIFqCJm4Wi',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'oJitOBgKDTzv3NXb',
						w : 12,
						h : 76,
						sizes : array(71),
					),
					$client->photoPathSize(
						type : 'OMVmNlaCXc5uEK74',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 56,
				thumb_version : 30,
				thumb_document_id : -4001690180130600136,
				count : 53,
				hash : 0,
			),
		),
	),
);
```