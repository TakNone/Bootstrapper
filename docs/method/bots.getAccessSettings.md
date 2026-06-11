# bots.getAccessSettings

**Layer** : 227

```tl
bots.getAccessSettings#213853a3 bot:InputUser = bots.AccessSettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | NOTHING |

---

## Result

[bots.AccessSettings](type/bots.AccessSettings)

---

## Example

```php
$botsAccessSettings = $client->bots->getAccessSettings(
	bot : $client->get_input_user(user : '@TakNone'),
);
```