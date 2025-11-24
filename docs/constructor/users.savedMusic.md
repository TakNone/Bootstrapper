# users.savedMusic

**Description** : *List of songs currently pinned on a user&#039;s profile, see here &raquo; for more info*

**Layer** : 218

```tl
users.savedMusic#34a2f297 count:int documents:Vector<Document> = users.SavedMusic;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of songs (can be bigger than documents depending on the passed limit, and the default maximum limit in which case pagination is required) |
| <mark>documents</mark> | [`Vector<Document>`](type/Document) | Songs |

---

## Type

[users.SavedMusic](type/users.SavedMusic)

---

## Example

```php
$usersSavedMusic = $client->users->savedMusic(
	count : 90,
	documents : array(
		$client->documentEmpty(
			id : 1029955500474335355,
		),
		$client->document(
			id : 5106792411049752288,
			access_hash : 7075637603624124565,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 41,
			mime_type : 'pvF9O76xITbYUoWD',
			size : -3957807387915032404,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'gXDBNZTM72mOC5Aa',
				),
				$client->photoSize(
					type : 'JX2GHiT95WOYSpbf',
					w : 72,
					h : 23,
					size : 27,
				),
				$client->photoCachedSize(
					type : 'Y68zDxGZ32EFbtHm',
					w : 97,
					h : 52,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'Lzi7YrkqoKdvTHCe',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'khxBnqr93JfupLaw',
					w : 40,
					h : 93,
					sizes : array(49),
				),
				$client->photoPathSize(
					type : 'xR3QWN2suJgMrmqE',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'oLHPpkyJAc9ieZ05',
					w : 17,
					h : 73,
					size : 51,
					video_start_ts : -1573756.2890625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -5264219538122290450,
					background_colors : array(72),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 8901657671295543146,
					background_colors : array(33),
				),
			),
			dc_id : 12,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 52,
					h : 98,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'O5wiyk9S2rEv7gPs',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 30,
						x : -1364454.1591796875,
						y : -310729.8583984375,
						zoom : 487841.3671875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -102422.0673828125,
					w : 97,
					h : 24,
					preload_prefix_size : 41,
					video_start_ts : -1363806.181640625,
					video_codec : 'PukSHr2hvyo41j8A',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 19,
					title : '8IKJi72mRDzGHfga',
					performer : 'ZbskKc56FB3D8oJh',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'ocS0BuXaiY5W6zeh',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '1LrJsoOSMI3HXtaG',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```