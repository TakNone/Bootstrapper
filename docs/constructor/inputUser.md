# inputUser

**Description** : *Defines a user for further interaction*

**Layer** : 227

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
	user_id : -806623552734095269,
	access_hash : 4472311568520791299,
);
```