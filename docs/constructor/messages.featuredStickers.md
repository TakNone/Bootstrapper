# messages.featuredStickers

**Description** : *Featured stickersets*

**Layer** : 227

```tl
messages.featuredStickers#be382906 flags:# premium:flags.0?true hash:long count:int sets:Vector<StickerSetCovered> unread:Vector<long> = messages.FeaturedStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **premium** | [`flags.0?true`](type/true) | Whether this is a premium stickerset |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>count</mark> | [`int`](type/int) | Total number of featured stickers |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Featured stickersets |
| <mark>unread</mark> | [`Vector<long>`](type/long) | IDs of new featured stickersets |

---

## Type

[messages.FeaturedStickers](type/messages.FeaturedStickers)

---

## Example

```php
$messagesFeaturedStickers = $client->messages->featuredStickers(
	premium : true,
	hash : 0,
	count : 48,
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
				installed_date : 44,
				id : 4998933306533202204,
				access_hash : -3685176555871499036,
				title : '6nK3QWO9fURkDXCd',
				short_name : 'Ti1uZUWw78GJeM6L',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'fp1jeQNaboh6I7wZ',
					),
					$client->photoSize(
						type : 'huSDOpQBz90HeUYP',
						w : 12,
						h : 2,
						size : 90,
					),
					$client->photoCachedSize(
						type : 'xW4IrdieRlUN0fG8',
						w : 18,
						h : 52,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'z7NwfvoB2K1b9cUr',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'KEcV6TaR7h9b2WoL',
						w : 87,
						h : 68,
						sizes : array(10),
					),
					$client->photoPathSize(
						type : 'kOuHVpUSB9tPi21T',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 46,
				thumb_version : 97,
				thumb_document_id : 3509767313903806157,
				count : 36,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 5438695819498013770,
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
				installed_date : 50,
				id : 8706719190214357512,
				access_hash : -8102158473717472744,
				title : '23vDX17xUHgdVpYy',
				short_name : 'ok9DL4MbnNJTSIpP',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'SZMHCBevhElcGjsy',
					),
					$client->photoSize(
						type : 'AYV5rws2ZeydTnmJ',
						w : 46,
						h : 18,
						size : 99,
					),
					$client->photoCachedSize(
						type : 'ZQDF1tq3ygXzPvJB',
						w : 2,
						h : 74,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'xnb62Ug8yAofRzWl',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'WAw6PCfSFBDXGEri',
						w : 83,
						h : 42,
						sizes : array(42),
					),
					$client->photoPathSize(
						type : 'DXehadMgjvu0nU7s',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 45,
				thumb_version : 22,
				thumb_document_id : -936480042494542840,
				count : 51,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 3557564707382157113,
				),
				$client->document(
					id : 329338760042250656,
					access_hash : -1360162191708394187,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 95,
					mime_type : 'QEuScZNPhq0z5KOv',
					size : 2268528405690677161,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'eqclSCs9P2zUTY10',
						),
						$client->photoSize(
							type : 'avTmqOG6ghYfHZ1u',
							w : 90,
							h : 30,
							size : 42,
						),
						$client->photoCachedSize(
							type : 'OGeJvxXnAaDY4p1o',
							w : 27,
							h : 0,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'dHKA3vnPj6RQuD0S',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : '40ZiJAeb5m6oWjgK',
							w : 37,
							h : 26,
							sizes : array(87),
						),
						$client->photoPathSize(
							type : 'atW9iQ48wpHoucjK',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'QaBnjU0d5NJFfyot',
							w : 7,
							h : 54,
							size : 92,
							video_start_ts : -1334235.623046875,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 4398573230554861187,
							background_colors : array(34),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -9219613267053494844,
							background_colors : array(37),
						),
					),
					dc_id : 66,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 4,
							h : 63,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'EWAj6kwyN3M728D1',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -727971.5400390625,
							w : 79,
							h : 71,
							preload_prefix_size : 87,
							video_start_ts : 1361809.30078125,
							video_codec : 'agl6IhBbT38kfFZu',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 63,
							title : '83bkPmInxolBOWYe',
							performer : 'qVKuQlSeT6vGIAoc',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'Y78f4WXuxnDj90Ti',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'Gs68WckPgANFDSUY',
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
				installed_date : 10,
				id : -1164957289998810387,
				access_hash : 4342001909865279615,
				title : '1PboEZIyY4ilWRnv',
				short_name : 'ZSruogH3EFx7R1V0',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '1UPJXt3CEh0oHqZ9',
					),
					$client->photoSize(
						type : '6Y5XNdsWRbL1f0Bc',
						w : 97,
						h : 21,
						size : 93,
					),
					$client->photoCachedSize(
						type : '8usbxDZyWitpaMCe',
						w : 44,
						h : 24,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'qvzJf7Dtlg4T0Wk6',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'lir5tsEHVoROXfY3',
						w : 92,
						h : 64,
						sizes : array(1),
					),
					$client->photoPathSize(
						type : 'bQwWiHGZ27SuPC3y',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 65,
				thumb_version : 14,
				thumb_document_id : -5681604312884434437,
				count : 21,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'zycjpJTK0Y7ketXu',
					documents : array(9197694198013874974),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -732526823062912720,
					keyword : array('hSv0n38J1I697BWx'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 398837381137281278,
				),
				$client->document(
					id : 5228874770657923339,
					access_hash : -7420422691961833815,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 4,
					mime_type : 'LQFXcayxwVPuRJOK',
					size : -4980887187953046360,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'LAHnTEKf052q86Q1',
						),
						$client->photoSize(
							type : 'EpKkP2aGSrqwY5U1',
							w : 9,
							h : 6,
							size : 86,
						),
						$client->photoCachedSize(
							type : 'gOaZGvVKRr8fyshQ',
							w : 92,
							h : 5,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : '9XJbe1amUjEZTWRO',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'hVi7acO5zKQAPj01',
							w : 21,
							h : 71,
							sizes : array(15),
						),
						$client->photoPathSize(
							type : 'TJ8HAio4Mvk7Pshm',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'syAp10zlV3BqG8hf',
							w : 9,
							h : 90,
							size : 41,
							video_start_ts : 1354244.158203125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -909178258672888858,
							background_colors : array(35),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -156102058923228283,
							background_colors : array(95),
						),
					),
					dc_id : 57,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 8,
							h : 70,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'n6qk0M1rLGjluFPJ',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -1407810.3359375,
							w : 45,
							h : 12,
							preload_prefix_size : 83,
							video_start_ts : -1786096.4423828125,
							video_codec : 'atSYlEpWLI0u5iBU',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 75,
							title : 'hfUH58FIRv4r9Qct',
							performer : 'm3nLkXjyaAFIe20c',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'xqnFAKV397bTHes1',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'fXxcp0w74Bnr52el',
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
				installed_date : 41,
				id : -6542717719378043974,
				access_hash : 7572233485438577175,
				title : 'FadobZ2OSyX1WlgG',
				short_name : 'lQcbYyHsvWN6IeaR',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'wtRKXscvB3W64JTn',
					),
					$client->photoSize(
						type : 'BLJ8A6F4jxOP2HG7',
						w : 57,
						h : 23,
						size : 84,
					),
					$client->photoCachedSize(
						type : '45Uch03KTdGBomFn',
						w : 83,
						h : 56,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'b1MQ7fDKVhRZpIPT',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'iYQgutEwpHJXA8nd',
						w : 20,
						h : 80,
						sizes : array(59),
					),
					$client->photoPathSize(
						type : 'nkU9TsezIuG5c8rC',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 54,
				thumb_version : 97,
				thumb_document_id : 1035598549071764158,
				count : 34,
				hash : 0,
			),
		),
	),
	unread : array(1626250420849004025),
);
```