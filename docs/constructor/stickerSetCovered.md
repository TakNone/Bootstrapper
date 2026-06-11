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
		installed_date : 18,
		id : -7472642677630660807,
		access_hash : -3300966276939920376,
		title : 'Gj2dEsJi4bkcq0lz',
		short_name : 'UC2wqDZ0jMRG7hV6',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'Q6ZkI1j7uMBclVHq',
			),
			$client->photoSize(
				type : 'ZGg21Sp3456BYfaj',
				w : 23,
				h : 44,
				size : 80,
			),
			$client->photoCachedSize(
				type : 'iu47ntaU9PCKszwh',
				w : 40,
				h : 49,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'RwNh6S4lys3u8Xbc',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'BefNaUZr4hKT9g6H',
				w : 66,
				h : 19,
				sizes : array(93),
			),
			$client->photoPathSize(
				type : 'lazyx9HtPDOpviMn',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 1,
		thumb_version : 48,
		thumb_document_id : -6468312520698161664,
		count : 20,
		hash : 0,
	),
	cover : $client->documentEmpty(
		id : -557398569287446087,
	),
);
```