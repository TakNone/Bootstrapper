# account.updateStatus

**Description** : *Updates online user status*

**Layer** : 211

```tl
account.updateStatus#6628562c offline:Bool = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>offline</mark> | [`Bool`](type/Bool) | If (boolTrue) is transmitted, user status will change to (userStatusOffline) |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->account->updateStatus(
	offline : $client->boolFalse(),
);
```