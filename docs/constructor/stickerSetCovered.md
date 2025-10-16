# stickerSetCovered

**Description** : *Stickerset with a single sticker as preview*

**Layer** : 216

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
		installed_date : 28,
		id : -6164995884201600988,
		access_hash : -2259385034603449899,
		title : 'HAyrfC8JFSbVB5G7',
		short_name : 'qnCb8WU20mySe3rl',
		thumbs : array(
			$client->photoSizeEmpty(
				type : '3O5UGjkdorDRqwnB',
			),
			$client->photoSize(
				type : 'C3WlSb9tOh6pNxse',
				w : 97,
				h : 66,
				size : 90,
			),
			$client->photoCachedSize(
				type : 'PotUKpEGZ20DcCXV',
				w : 24,
				h : 56,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'gS8o0I49xVh5bCjz',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'H4VUd5iZlvOTLYJ7',
				w : 73,
				h : 22,
				sizes : array(77),
			),
			$client->photoPathSize(
				type : 'VB2iIJMxYLvueHF7',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 57,
		thumb_version : 82,
		thumb_document_id : 3124295267754778184,
		count : 62,
		hash : 0,
	),
	cover : $client->documentEmpty(
		id : 8170758737124730239,
	),
);
```