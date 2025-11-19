# stickerSetCovered

**Description** : *Stickerset with a single sticker as preview*

**Layer** : 218

```tl
stickerSetCovered#6410a5d2 set:StickerSet cover:Document = StickerSetCovered;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>set</mark> | [`StickerSet`](type/StickerSet) | Stickerset |
| <mark>cover</mark> | [`Document`](type/Document) | Preview |

---

## Type

[StickerSetCovered](type/StickerSetCovered)

---

## Example

```php
$stickerSetCovered = $client->stickerSetCovered(
	set : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 93,
		id : 3146054874826725962,
		access_hash : 7389500213279958833,
		title : 'P8ND7FoM3SXsmc1H',
		short_name : 'BiTPr3QJoeOsj89D',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'BSkvtU5qQVdWyCns',
			),
			$client->photoSize(
				type : 'Ph5sgrRj4HWKlL8q',
				w : 38,
				h : 46,
				size : 0,
			),
			$client->photoCachedSize(
				type : 'Amo8agSXNKPwzihY',
				w : 81,
				h : 38,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : '2Xdvq10HAsYk4npz',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'jK9U2VTrp5YF0Pkq',
				w : 10,
				h : 14,
				sizes : array(90),
			),
			$client->photoPathSize(
				type : '1RANBwD42utYHeEP',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 92,
		thumb_version : 58,
		thumb_document_id : 5131935856094121431,
		count : 81,
		hash : 0,
	),
	cover : $client->documentEmpty(
		id : 7991335990612898186,
	),
);
```