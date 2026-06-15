# account.deletePasskey

**Layer** : 227

```tl
account.deletePasskey#f5b5563f id:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`string`](type/string) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->account->deletePasskey(
	id : '4oheLYnfJ9D6qc3m',
);
```