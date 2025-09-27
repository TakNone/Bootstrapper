# stickerSetCovered

**Description** : *Stickerset with a single sticker as preview*

**Layer** : 214

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
		installed_date : 21,
		id : 544893972102155831,
		access_hash : -6964842235372445667,
		title : 'cY5nGIKSg6yj3MF2',
		short_name : '2GPi5dmNYEJFbZID',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'VjWIMkLybfSs31mx',
			),
			$client->photoSize(
				type : 'HMb8ACLQWhwrIgem',
				w : 80,
				h : 81,
				size : 90,
			),
			$client->photoCachedSize(
				type : 'nGVX79jmsbkNcLxp',
				w : 24,
				h : 89,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'EAohxGjdIUDgHXFR',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'Ww4kGzxlaYU9y0Cn',
				w : 4,
				h : 70,
				sizes : array(100),
			),
			$client->photoPathSize(
				type : 'cZs2Tej1GYpnX6ay',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 29,
		thumb_version : 84,
		thumb_document_id : 6057474021027247338,
		count : 5,
		hash : 0,
	),
	cover : $client->documentEmpty(
		id : -5838059273158950219,
	),
);
```