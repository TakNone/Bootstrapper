# contactStatus

**Description** : *Contact status: online / offline*

**Layer** : 233

```tl
contactStatus#16d9703b user_id:long status:UserStatus = ContactStatus;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`long`](type/long) | User identifier |
| <mark>status</mark> | [`UserStatus`](type/UserStatus) | Online status |

---

## Type

[ContactStatus](type/ContactStatus)

---

## Example

```php
$contactStatus = $client->contactStatus(
	user_id : -3646248178523518566,
	status : $client->userStatusEmpty(),
);
```