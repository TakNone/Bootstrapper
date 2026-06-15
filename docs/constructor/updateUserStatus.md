# updateUserStatus

**Description** : *Contact status update*

**Layer** : 227

```tl
updateUserStatus#e5bdf8de user_id:long status:UserStatus = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`long`](type/long) | User identifier |
| <mark>status</mark> | [`UserStatus`](type/UserStatus) | New status |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateUserStatus(
	user_id : 461869622809989073,
	status : $client->userStatusEmpty(),
);
```