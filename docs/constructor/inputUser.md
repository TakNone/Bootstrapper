# inputUser

**Description** : *Defines a user for further interaction*

**Layer** : 216

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
	user_id : 5468680864385558884,
	access_hash : 1121800244649648062,
);
```