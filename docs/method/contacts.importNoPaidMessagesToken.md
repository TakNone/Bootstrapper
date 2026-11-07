# contacts.importNoPaidMessagesToken

**Layer** : 233

```tl
contacts.importNoPaidMessagesToken#35a7c6ca user_id:InputUser token:string = User;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | NOTHING |
| <mark>token</mark> | [`string`](type/string) | NOTHING |

---

## Result

[User](type/User)

---

## Example

```php
$user = $client->contacts->importNoPaidMessagesToken(
	user_id : $client->get_input_user(user : '@TakNone'),
	token : 'utrK4ylVv782Z9cS',
);
```