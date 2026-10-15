# stickerSetMultiCovered

**Description** : *Stickerset, with multiple stickers as preview*

**Layer** : 229

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
		installed_date : 42,
		id : 3484230687057836711,
		access_hash : 5812371867836469513,
		title : 'ajlKsByt9nQ0Xbvw',
		short_name : 'vT2XklYNDWBg4n83',
		thumbs : array(
			$client->photoSizeEmpty(
				type : '0sLeaRQkO8UPNDlg',
			),
			$client->photoSize(
				type : 'Rtw0IKpPVfNOX9DY',
				w : 17,
				h : 22,
				size : 8,
			),
			$client->photoCachedSize(
				type : 'PMr9uFZoQsjwJAcW',
				w : 44,
				h : 53,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'Sk8AKgTDw0G5Mdv2',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 't39gVIHWYE0mOflK',
				w : 35,
				h : 31,
				sizes : array(93),
			),
			$client->photoPathSize(
				type : 'h1Di0UAzNsVHJESg',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 84,
		thumb_version : 7,
		thumb_document_id : 4480945260758582100,
		count : 10,
		hash : 0,
	),
	covers : array(
		$client->documentEmpty(
			id : 1533741416413577442,
		),
		$client->document(
			id : -4097267892228922935,
			access_hash : 569479951933517234,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 19,
			mime_type : 'dVMFsoeNWnjY1AgO',
			size : -5360568827662540985,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'owcdACypBi9TPY35',
				),
				$client->photoSize(
					type : 'HDK2ingEBF1WuI4S',
					w : 25,
					h : 78,
					size : 83,
				),
				$client->photoCachedSize(
					type : 'BTOVtau3IK7nl4PJ',
					w : 90,
					h : 72,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'YNenMGTjPo3x6zqL',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'JQaiMsy4R5zGj2Hl',
					w : 42,
					h : 75,
					sizes : array(91),
				),
				$client->photoPathSize(
					type : 'xjKvZU7dqCnsNQJ5',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'zyFLOjoE6VC0Wx93',
					w : 33,
					h : 34,
					size : 86,
					video_start_ts : -1180134.794921875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -1990138276627225193,
					background_colors : array(26),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -8958350461006723273,
					background_colors : array(3),
				),
			),
			dc_id : 69,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 99,
					h : 81,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'zZLbe9Xkmvn6Yous',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 70,
						x : 716333.0947265625,
						y : 1334113.234375,
						zoom : 1308220.306640625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1290810.578125,
					w : 74,
					h : 50,
					preload_prefix_size : 29,
					video_start_ts : -367614.5048828125,
					video_codec : 'BbjtmQ3yCTohrpwK',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 15,
					title : 'Qf38xRKU4cAszwlv',
					performer : 'PNs9xibkryX8BZzL',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'scxemqdy09THjORD',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'LCwR36vufFXTN9Hy',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```