# messages.getCustomEmojiDocuments

**Description** : *Fetch custom emoji stickers &raquo;*

**Layer** : 211

```tl
messages.getCustomEmojiDocuments#d9ab0f54 document_id:Vector<long> = Vector<Document>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>document_id</mark> | [`Vector<long>`](type/long) | Custom emoji IDs from a messageEntityCustomEmoji |

---

## Result

[Vector<Document>](type/Document)

---

## Example

```php
$document = $client->messages->getCustomEmojiDocuments(
	document_id : array(5192114412804741094),
);
```