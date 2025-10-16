# account.savedRingtones

**Description** : *A list of saved notification sounds*

**Layer** : 216

```tl
account.savedRingtones#c1e92cc5 hash:long ringtones:Vector<Document> = account.SavedRingtones;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>ringtones</mark> | [`Vector<Document>`](type/Document) | Saved notification sounds |

---

## Type

[account.SavedRingtones](type/account.SavedRingtones)

---

## Example

```php
$accountSavedRingtones = $client->account->savedRingtones(
	hash : 0,
	ringtones : array(
		$client->documentEmpty(
			id : 1024436320349696373,
		),
		$client->document(
			id : -8838546280418362587,
			access_hash : -220826692533140709,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 1,
			mime_type : 'Hm5zEWhdkPlnVqRQ',
			size : -8982409481933332608,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'Q1kSWalRBgio7GLh',
				),
				$client->photoSize(
					type : '9oiOY7nwXJFeZ31x',
					w : 54,
					h : 97,
					size : 54,
				),
				$client->photoCachedSize(
					type : 'egxus50VDNOPqfzB',
					w : 99,
					h : 52,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '1dfQXlKJGukcxhUT',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'jfcaqgWyP3Ex8Dt6',
					w : 35,
					h : 43,
					sizes : array(43),
				),
				$client->photoPathSize(
					type : 'I1gmxBrA2vWJOHUQ',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'PUNn1E0f6VKZLlhW',
					w : 4,
					h : 8,
					size : 0,
					video_start_ts : 1219941.533203125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -5651344855380692339,
					background_colors : array(58),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -584524448976255189,
					background_colors : array(45),
				),
			),
			dc_id : 94,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 31,
					h : 42,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'QvjnoU4whrOYZ9VK',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -306530.548828125,
					w : 91,
					h : 4,
					preload_prefix_size : 59,
					video_start_ts : -537440.3466796875,
					video_codec : 'sLn3bGvWXzADgOIP',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 36,
					title : 'yq4RH5lJBYdxGQAb',
					performer : '9qcgjs4pSfEU2R6l',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'imoe43BHngNGdxu6',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'jDvfzmeo4SPkRdWB',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```