# stickerSetCovered

**Description** : *Stickerset with a single sticker as preview*

**Layer** : 227

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
		installed_date : 94,
		id : -3478405053462181811,
		access_hash : -6704065002323627574,
		title : 'nAd82XQfsjYDumgE',
		short_name : '8pFEtVWi9wZlyRvm',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'UmgJxRQehyNHn3bL',
			),
			$client->photoSize(
				type : 'xqbgpVEdfXAF3LcN',
				w : 83,
				h : 69,
				size : 92,
			),
			$client->photoCachedSize(
				type : 'VNq8HaL46pDSAren',
				w : 30,
				h : 62,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'Hd49gMtpQIAqXJ5P',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'IDFvZluakHmEw2xQ',
				w : 82,
				h : 92,
				sizes : array(56),
			),
			$client->photoPathSize(
				type : 'ziksgF8IYKAmZeXQ',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 84,
		thumb_version : 75,
		thumb_document_id : -6688194937955532034,
		count : 64,
		hash : 0,
	),
	cover : $client->documentEmpty(
		id : 1697092694037162442,
	),
);
```