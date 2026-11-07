# bots.addUsername

**Layer** : 233

```tl
bots.addUsername#3501c08a bot:InputUser username:string = Bool;
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
$bool = $client->bots->addUsername(
	bot : $client->get_input_user(user : '@TakNone'),
	username : 'TakNone',
);
```