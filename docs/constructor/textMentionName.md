# textMentionName

**Layer** : 227

```tl
textMentionName#1a9fbfc text:RichText user_id:long = RichText;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`RichText`](type/RichText) | NOTHING |
| <mark>user_id</mark> | [`long`](type/long) | NOTHING |

---

## Type

[RichText](type/RichText)

---

## Example

```php
$richText = $client->textMentionName(
	text : $client->textEmpty(),
	user_id : -4549323090711068156,
);
```