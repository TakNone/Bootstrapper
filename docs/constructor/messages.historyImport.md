# messages.historyImport

**Description** : *ID of a specific chat import session, click here for more info &raquo;*

**Layer** : 227

```tl
messages.historyImport#1662af0b id:long = messages.HistoryImport;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | History import ID |

---

## Type

[messages.HistoryImport](type/messages.HistoryImport)

---

## Example

```php
$messagesHistoryImport = $client->messages->historyImport(
	id : -2756385334504215202,
);
```