# bots.editAccessSettings

**Layer** : 225

```tl
bots.editAccessSettings#31813cd8 flags:# restricted:flags.0?true bot:InputUser add_users:flags.1?Vector<InputUser> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **restricted** | [`flags.0?true`](type/true) | NOTHING |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | NOTHING |
| **add_users** | [`flags.1?Vector<InputUser>`](type/InputUser) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->bots->editAccessSettings(
	restricted : true,
	bot : $client->get_input_user(user : '@TakNone'),
	add_users : array($client->get_input_user(user : '@TakNone')),
);
```