# account.toggleUsername

**Description** : *Activate or deactivate a purchased fragment.com username associated to the currently logged-in user*

**Layer** : 211

```tl
account.toggleUsername#58d6b376 username:string active:Bool = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>username</mark> | [`string`](type/string) | Username |
| <mark>active</mark> | [`Bool`](type/Bool) | Whether to activate or deactivate it |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **USERNAMES_ACTIVE_TOO_MUCH** | `400` | The maximum number of active usernames was reached |
| **USERNAME_INVALID** | `400` | The provided username is not valid |
| **USERNAME_NOT_MODIFIED** | `400` | The username was not modified |

---

## Example

```php
$bool = $client->account->toggleUsername(
	username : 'TakNone',
	active : $client->boolFalse(),
);
```