# updateUser

**Description** : *User \(user and/or userFull\) information was updated*

**Layer** : 222

```tl
updateUser#20529438 user_id:long = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`long`](type/long) | User ID |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateUser(
	user_id : 7795049336593805624,
);
```