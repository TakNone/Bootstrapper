# updateUser

**Description** : *User \(user and/or userFull\) information was updated*

**Layer** : 214

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
	user_id : -3806237998923392928,
);
```