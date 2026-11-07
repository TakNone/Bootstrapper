# bots.removeUsername

**Layer** : 233

```tl
bots.removeUsername#c704147d bot:InputUser username:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | NOTHING |
| <mark>username</mark> | [`string`](type/string) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->bots->removeUsername(
	bot : $client->get_input_user(user : '@TakNone'),
	username : 'TakNone',
);
```