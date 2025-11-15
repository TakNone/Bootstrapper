# account.reorderUsernames

**Description** : *Reorder usernames associated with the currently logged\-in user*

**Layer** : 216

```tl
account.reorderUsernames#ef500eab order:Vector<string> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>order</mark> | [`Vector<string>`](type/string) | The new order for active usernames. All active usernames must be specified |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **ORDER_INVALID** | `400` | The specified username order is invalid |
| **USERNAME_NOT_MODIFIED** | `400` | The username was not modified |

---

## Example

```php
$bool = $client->account->reorderUsernames(
	order : array('d1rcs6FmPNI4M9aB'),
);
```