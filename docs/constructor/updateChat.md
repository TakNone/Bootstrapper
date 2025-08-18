# updateChat

**Description** : *Chat \(chat and/or chatFull\) information was updated*

**Layer** : 211

```tl
updateChat#f89a6a4e chat_id:long = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chat_id</mark> | [`long`](type/long) | Chat ID |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateChat(
	chat_id : 2248922504851858574,
);
```