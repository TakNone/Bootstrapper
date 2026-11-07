# account.deletePasskey

**Description** : *Delete a passkey associated to the current account, see here &raquo; for more info*

**Layer** : 233

```tl
account.deletePasskey#f5b5563f id:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`string`](type/string) | Identifier of the passkey to delete, taken from passkey.id, usually obtained using account.getPasskeys |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->account->deletePasskey(
	id : 'kZQxbtNfHgnvUocF',
);
```