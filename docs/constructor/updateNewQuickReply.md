# updateNewQuickReply

**Description** : *A new quick reply shortcut &raquo; was created*

**Layer** : 211

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
		shortcut_id : 50,
		shortcut : 'HWj34dnoiLGRXxAl',
		top_message : 13,
		count : 87,
	),
);
```