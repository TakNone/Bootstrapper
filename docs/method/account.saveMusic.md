# account.saveMusic

**Layer** : 214

```tl
account.saveMusic#b26732a9 flags:# unsave:flags.0?true id:InputDocument after_id:flags.1?InputDocument = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **unsave** | [`flags.0?true`](type/true) | NOTHING |
| <mark>id</mark> | [`InputDocument`](type/InputDocument) | NOTHING |
| **after_id** | [`flags.1?InputDocument`](type/InputDocument) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->account->saveMusic(
	unsave : true,
	id : $client->inputDocumentEmpty(),
	after_id : $client->inputDocumentEmpty(),
);
```