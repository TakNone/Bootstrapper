# bots.exportBotToken

**Layer** : 227

```tl
bots.exportBotToken#bd0d99eb bot:InputUser revoke:Bool = bots.ExportedBotToken;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | NOTHING |
| <mark>revoke</mark> | [`Bool`](type/Bool) | NOTHING |

---

## Result

[bots.ExportedBotToken](type/bots.ExportedBotToken)

---

## Example

```php
$botsExportedBotToken = $client->bots->exportBotToken(
	bot : $client->get_input_user(user : '@TakNone'),
	revoke : true,
);
```