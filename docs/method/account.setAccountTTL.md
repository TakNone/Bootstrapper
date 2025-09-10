# account.setAccountTTL

**Description** : *Set account self\-destruction period*

**Layer** : 214

```tl
account.setAccountTTL#2442485e ttl:AccountDaysTTL = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>ttl</mark> | [`AccountDaysTTL`](type/AccountDaysTTL) | Time to live in days |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **TTL_DAYS_INVALID** | `400` | The provided TTL is invalid |

---

## Example

```php
$bool = $client->account->setAccountTTL(
	ttl : $client->accountDaysTTL(
		days : 34,
	),
);
```