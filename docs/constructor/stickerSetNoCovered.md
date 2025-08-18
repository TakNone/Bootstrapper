# stickerSetNoCovered

**Description** : *Just the stickerset information, with no previews*

**Layer** : 211

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
		installed_date : 5,
		id : 5179075328878586947,
		access_hash : -1910550412233346067,
		title : 'ZkGNSYhcoe7MRvL3',
		short_name : 'oPqAQaceb26Wy1BR',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'HL0bvBzywrsRjKAt',
			),
			$client->photoSize(
				type : 'WBJkn1rQx4CT6qEs',
				w : 96,
				h : 18,
				size : 84,
			),
			$client->photoCachedSize(
				type : 'oja7OEUyVBI6GJlN',
				w : 85,
				h : 69,
				bytes : '???@.LiveProtoY?[?',
			),
			$client->photoStrippedSize(
				type : 'dy4coQipkfOulHNZ',
				bytes : '?lZ?)LiveProto??a?=',
			),
			$client->photoSizeProgressive(
				type : 'dIp81ncXfEKagPSq',
				w : 42,
				h : 50,
				sizes : array(87),
			),
			$client->photoPathSize(
				type : 'If4iBvN1zhLFx7nY',
				bytes : '??RWLiveProto?մ?',
			),
		),
		thumb_dc_id : 17,
		thumb_version : 29,
		thumb_document_id : -1035733555832185294,
		count : 49,
		hash : 48,
	),
);
```