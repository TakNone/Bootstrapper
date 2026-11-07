# stickerSetNoCovered

**Description** : *Just the stickerset information, with no previews*

**Layer** : 233

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
		installed_date : 57,
		id : -4169094509227468858,
		access_hash : 2719796278934515771,
		title : 'pgKZHCyG2wN87hfX',
		short_name : 'NRI4DA06zbqKS7up',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'u1LV3YiESntMeAbH',
			),
			$client->photoSize(
				type : 'ShsLKXj0JYcVfu9w',
				w : 93,
				h : 98,
				size : 43,
			),
			$client->photoCachedSize(
				type : 'HghP3GfS9BmWye45',
				w : 45,
				h : 8,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'bI5cVaw4dqeDuPWJ',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'eAq7TUolfLgQ1SKM',
				w : 28,
				h : 28,
				sizes : array(86),
			),
			$client->photoPathSize(
				type : 'HRYI1WyNXVObqit5',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 20,
		thumb_version : 63,
		thumb_document_id : -7399746696832404079,
		count : 14,
		hash : 0,
	),
);
```