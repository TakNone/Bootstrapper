# stickerSetNoCovered

**Description** : *Just the stickerset information, with no previews*

**Layer** : 214

```tl
stickerSetNoCovered#77b15d1c set:StickerSet = StickerSetCovered;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>set</mark> | [`StickerSet`](type/StickerSet) | Stickerset information |

---

## Type

[StickerSetCovered](type/StickerSetCovered)

---

## Example

```php
$stickerSetCovered = $client->stickerSetNoCovered(
	set : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 84,
		id : -8392337893805192704,
		access_hash : 8634666929280948517,
		title : 'wLYWMoSDxe76pHmy',
		short_name : 'V5a3Ivp8hWHRrUyD',
		thumbs : array(
			$client->photoSizeEmpty(
				type : '9Y8yGxg6zanCq4VZ',
			),
			$client->photoSize(
				type : 'S59lpkfPItw0D1bc',
				w : 50,
				h : 90,
				size : 37,
			),
			$client->photoCachedSize(
				type : 'XjWSZ5wMOvdhCi2f',
				w : 55,
				h : 23,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'icSOlqvk9IZTD0VE',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'BCKHXP8A7ystINGa',
				w : 20,
				h : 95,
				sizes : array(86),
			),
			$client->photoPathSize(
				type : 'FiEtpZW6K9nUG2jI',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 58,
		thumb_version : 97,
		thumb_document_id : 6005578024040803393,
		count : 23,
		hash : 0,
	),
);
```