# inputUser

**Description** : *Defines a user for further interaction*

**Layer** : 211

```tl
inputUser#f21158c6 user_id:long access_hash:long = InputUser;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`long`](type/long) | User identifier |
| <mark>access_hash</mark> | [`long`](type/long) | access_hash value from the user constructor |

---

## Type

[InputUser](type/InputUser)

---

## Example

```php
$inputUser = $client->inputUser(
	user_id : 4609618562298330870,
	access_hash : 1680432913092250273,
);
```