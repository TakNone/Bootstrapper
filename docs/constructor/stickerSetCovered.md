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
		installed_date : 91,
		id : 1769372108008222680,
		access_hash : -2117600511764891739,
		title : 'Kk8f1yzCmHsiAoNB',
		short_name : 'IcvVdWA3R2C0rhTt',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'Dq2lcFXCNzj5t6dR',
			),
			$client->photoSize(
				type : 'mzuiXE1w3sIHUWaA',
				w : 65,
				h : 36,
				size : 54,
			),
			$client->photoCachedSize(
				type : '4bKg6MzdLumfN3vk',
				w : 38,
				h : 39,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'LvNjAfFa7X8bB9U2',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'PcDrFfRzv7V1pgne',
				w : 41,
				h : 93,
				sizes : array(22),
			),
			$client->photoPathSize(
				type : 'xKSp3AiYfD8s6mck',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 42,
		thumb_version : 77,
		thumb_document_id : -1303415438218099836,
		count : 93,
		hash : 50,
	),
	cover : $client->documentEmpty(
		id : 7132606426231339173,
	),
);
```