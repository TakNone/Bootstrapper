# stickerSetCovered

**Description** : *Stickerset with a single sticker as preview*

**Layer** : 211

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
		installed_date : 1,
		id : 4193556992889393145,
		access_hash : -1435972694665640494,
		title : 'lPURMsTYFazeBkQG',
		short_name : 'RfbYSmj74tN0DdHQ',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'BA4zLsXiTQfrHa3x',
			),
			$client->photoSize(
				type : 'rlB8s2J7ZN5kE4wb',
				w : 75,
				h : 57,
				size : 92,
			),
			$client->photoCachedSize(
				type : 'Sm29jlnxEdgZh1Xk',
				w : 63,
				h : 26,
				bytes : '??NLiveProtoג?-W',
			),
			$client->photoStrippedSize(
				type : 'RlEr6FHjP3CSYUhD',
				bytes : '?y?zLiveProto???R?',
			),
			$client->photoSizeProgressive(
				type : '4dt5r0gzihjp9qRS',
				w : 16,
				h : 73,
				sizes : array(98),
			),
			$client->photoPathSize(
				type : 'g7IRHQilBCbKPAVY',
				bytes : '
?rpzLiveProto?[X?$',
			),
		),
		thumb_dc_id : 71,
		thumb_version : 33,
		thumb_document_id : -3981792516647953427,
		count : 1,
		hash : 20,
	),
	cover : $client->documentEmpty(
		id : 5498139778162134057,
	),
);
```