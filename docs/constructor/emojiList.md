# emojiList

**Description** : *Represents a list of custom emojis*

**Layer** : 218

```tl
emojiList#7a1e11d1 hash:long document_id:Vector<long> = EmojiList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>document_id</mark> | [`Vector<long>`](type/long) | Custom emoji IDs |

---

## Type

[EmojiList](type/EmojiList)

---

## Example

```php
$emojiList = $client->emojiList(
	hash : 0,
	document_id : array(4741455320232301912),
);
```