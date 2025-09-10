# updateUserName

**Description** : *Changes the user&#039;s first name, last name and username*

**Layer** : 214

```tl
updateUserName#a7848924 user_id:long first_name:string last_name:string usernames:Vector<Username> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`long`](type/long) | User identifier |
| <mark>first_name</mark> | [`string`](type/string) | New first name. Corresponds to the new value of real_first_name field of the userFull constructor |
| <mark>last_name</mark> | [`string`](type/string) | New last name. Corresponds to the new value of real_last_name field of the userFull constructor |
| <mark>usernames</mark> | [`Vector<Username>`](type/Username) | Usernames |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateUserName(
	user_id : -4550099030368062027,
	first_name : 'Tak',
	last_name : 'None',
	usernames : array(
		$client->username(
			editable : true,
			active : true,
			username : 'TakNone',
		),
	),
);
```