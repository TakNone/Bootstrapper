# bots.createBot

**Layer** : 227

```tl
bots.createBot#e5b17f2b flags:# via_deeplink:flags.0?true name:string username:string manager_id:InputUser = User;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **via_deeplink** | [`flags.0?true`](type/true) | NOTHING |
| <mark>name</mark> | [`string`](type/string) | NOTHING |
| <mark>username</mark> | [`string`](type/string) | NOTHING |
| <mark>manager_id</mark> | [`InputUser`](type/InputUser) | NOTHING |

---

## Result

[User](type/User)

---

## Example

```php
$user = $client->bots->createBot(
	via_deeplink : true,
	name : 'pexqiFotlhzgL1kE',
	username : 'TakNone',
	manager_id : $client->get_input_user(user : '@TakNone'),
);
```