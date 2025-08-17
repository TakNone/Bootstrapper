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
		installed_date : 51,
		id : -7331104747871243250,
		access_hash : 7701295621718574063,
		title : 'z7EmIt0fWy1gnPDO',
		short_name : 'Mz5tsuJ6ro8Chvan',
		thumbs : array(
			$client->photoSizeEmpty(
				type : '6hDBGnlTA8zf235Z',
			),
			$client->photoSize(
				type : 'ACyHk8nO0N97cigt',
				w : 74,
				h : 43,
				size : 58,
			),
			$client->photoCachedSize(
				type : 'Z8vxufPOWzayr50t',
				w : 77,
				h : 37,
				bytes : '??w?TLiveProto_?1',
			),
			$client->photoStrippedSize(
				type : '4zOid5aClVSkUro3',
				bytes : '4?L?vLiveProto0۫??',
			),
			$client->photoSizeProgressive(
				type : 'ARymBkj9Tzosucgr',
				w : 20,
				h : 52,
				sizes : array(50),
			),
			$client->photoPathSize(
				type : 'smFc9SrDgOHfj8PY',
				bytes : '?C?@=LiveProtor?V?K',
			),
		),
		thumb_dc_id : 41,
		thumb_version : 55,
		thumb_document_id : 1118397048742260209,
		count : 47,
		hash : 91,
	),
);
```