# account.confirmBotConnection

**Layer** : 227

```tl
account.confirmBotConnection#67ed1f68 bot_id:InputUser = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot_id</mark> | [`InputUser`](type/InputUser) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->account->confirmBotConnection(
	bot_id : $client->get_input_user(user : '@TakNone'),
);
```