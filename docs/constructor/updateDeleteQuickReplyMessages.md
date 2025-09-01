# updateDeleteQuickReplyMessages

**Description** : *One or more messages in a quick reply shortcut &raquo; were deleted*

**Layer** : 214

```tl
updateDeleteQuickReplyMessages#566fe7cd shortcut_id:int messages:Vector<int> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>shortcut_id</mark> | [`int`](type/int) | Quick reply shortcut ID |
| <mark>messages</mark> | [`Vector<int>`](type/int) | IDs of the deleted messages |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateDeleteQuickReplyMessages(
	shortcut_id : 38,
	messages : array(49),
);
```