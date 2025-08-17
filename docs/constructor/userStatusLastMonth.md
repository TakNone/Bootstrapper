# userStatusLastMonth

**Description** : *Online status: last seen last month*

**Layer** : 211

```tl
userStatusLastMonth#65899777 flags:# by_me:flags.0?true = UserStatus;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **by_me** | [`flags.0?true`](type/true) | If set, the exact user status of this user is actually available to us, but to view it we must first purchase a Premium subscription, or allow this user to see our exact last online status. See here » for more info |

---

## Type

[UserStatus](type/UserStatus)

---

## Example

```php
$userStatus = $client->userStatusLastMonth(
	by_me : true,
);
```