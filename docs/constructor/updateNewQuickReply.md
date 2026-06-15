# updateNewQuickReply

**Description** : *A new quick reply shortcut &raquo; was created*

**Layer** : 227

```tl
updateNewQuickReply#f53da717 quick_reply:QuickReply = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>quick_reply</mark> | [`QuickReply`](type/QuickReply) | Quick reply shortcut |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateNewQuickReply(
	quick_reply : $client->quickReply(
		shortcut_id : 15,
		shortcut : 'wWx2GKCSlz6hsQU5',
		top_message : 61,
		count : 15,
	),
);
```