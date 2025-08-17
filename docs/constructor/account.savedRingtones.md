# account.savedRingtones

**Description** : *A list of saved notification sounds*

**Layer** : 211

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
	hash : 8128647540500782349,
	ringtones : array(
		$client->documentEmpty(
			id : -4667675209212511803,
		),
		$client->document(
			id : 5338047479715170478,
			access_hash : 5296826218225218742,
			file_reference : 'f?R?LiveProtoG~lp$',
			date : 80,
			mime_type : 'tagL6v78zoGkuxE5',
			size : -6193296292053761259,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'fvyTawc15FJ0xRWX',
				),
				$client->photoSize(
					type : 'wdg3OMVtkc02aHB4',
					w : 1,
					h : 92,
					size : 73,
				),
				$client->photoCachedSize(
					type : 'h8UV5z4ZAQnDoJvp',
					w : 29,
					h : 72,
					bytes : '????LiveProto?IȲ',
				),
				$client->photoStrippedSize(
					type : 'tcf3HZFr179NUjoK',
					bytes : 'Pst-^LiveProto?z?=',
				),
				$client->photoSizeProgressive(
					type : 'VSq2HNfKukDPnOTG',
					w : 43,
					h : 56,
					sizes : array(66),
				),
				$client->photoPathSize(
					type : 'M6QbB9mjq2azvfSy',
					bytes : 'i???LiveProtoЕ',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '2ojaRxHifTvg9CFD',
					w : 83,
					h : 39,
					size : 74,
					video_start_ts : 494738.3056640625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 5822240491056962908,
					background_colors : array(42),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -8263123875240879787,
					background_colors : array(41),
				),
			),
			dc_id : 25,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 67,
					h : 99,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'kyBEqCFHUgd7QlLr',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 274898.0986328125,
					w : 4,
					h : 89,
					preload_prefix_size : 68,
					video_start_ts : -717469.728515625,
					video_codec : 'AoXst9bR6Vrnfc8W',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 35,
					title : 'K1ZEAbwY2478uyia',
					performer : 'IoL2b6rUMzp75JDF',
					waveform : '???oLiveProto???S?',
				),
				$client->documentAttributeFilename(
					file_name : 'y5hQDqX2dEolRKjC',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Iq9JSnvsQdawpYFL',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```