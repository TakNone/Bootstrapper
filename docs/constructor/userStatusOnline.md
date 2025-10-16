# userStatusOnline

**Description** : *Online status of the user*

**Layer** : 216

```tl
userStatusOnline#edb93949 expires:int = UserStatus;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>expires</mark> | [`int`](type/int) | Time to expiration of the current online status |

---

## Type

[UserStatus](type/UserStatus)

---

## Example

```php
$userStatus = $client->userStatusOnline(
	expires : 44,
);
```