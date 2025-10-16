# contact

**Description** : *A contact of the current user that is registered in the system*

**Layer** : 216

```tl
contact#145ade0b user_id:long mutual:Bool = Contact;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`long`](type/long) | User identifier |
| <mark>mutual</mark> | [`Bool`](type/Bool) | Current user is in the user's contact list |

---

## Type

[Contact](type/Contact)

---

## Example

```php
$contact = $client->contact(
	user_id : 8168866612856676229,
	mutual : false,
);
```