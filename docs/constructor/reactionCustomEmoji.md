# reactionCustomEmoji

**Description** : *Custom emoji message reaction*

**Layer** : 218

```tl
reactionCustomEmoji#8935fc73 document_id:long = Reaction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>document_id</mark> | [`long`](type/long) | Custom emoji document ID |

---

## Type

[Reaction](type/Reaction)

---

## Example

```php
$reaction = $client->reactionCustomEmoji(
	document_id : 6046073008078669833,
);
```