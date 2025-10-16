# userStatusOffline

**Description** : *The user&#039;s offline status*

**Layer** : 216

```tl
userStatusOffline#8c703f was_online:int = UserStatus;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>was_online</mark> | [`int`](type/int) | Time the user was last seen online |

---

## Type

[UserStatus](type/UserStatus)

---

## Example

```php
$userStatus = $client->userStatusOffline(
	was_online : 87,
);
```