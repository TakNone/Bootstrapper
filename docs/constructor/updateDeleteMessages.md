# updateDeleteMessages

**Description** : *Messages were deleted*

**Layer** : 218

```tl
updateDeleteMessages#a20db0e5 messages:Vector<int> pts:int pts_count:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>messages</mark> | [`Vector<int>`](type/int) | List of identifiers of deleted messages |
| <mark>pts</mark> | [`int`](type/int) | New quality of actions in a message box |
| <mark>pts_count</mark> | [`int`](type/int) | Number of generated events |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateDeleteMessages(
	messages : array(20),
	pts : 71,
	pts_count : 60,
);
```