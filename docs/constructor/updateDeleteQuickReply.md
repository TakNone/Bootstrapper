# updateDeleteQuickReply

**Description** : *A quick reply shortcut » was deleted. This will not emit updateDeleteQuickReplyMessages updates, even if all the messages in the shortcut are also deleted by this update*

**Layer** : 211

```tl
updateDeleteQuickReply#53e6f1ec shortcut_id:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>shortcut_id</mark> | [`int`](type/int) | ID of the quick reply shortcut that was deleted |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateDeleteQuickReply(
	shortcut_id : 49,
);
```