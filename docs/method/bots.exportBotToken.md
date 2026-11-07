# bots.exportBotToken

**Description** : *Export the bot token of a managed bot &raquo;; can only be called by the manager bot*

**Layer** : 229

```tl
bots.exportBotToken#bd0d99eb bot:InputUser revoke:Bool = bots.ExportedBotToken;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | The managed bot to export the token for |
| <mark>revoke</mark> | [`Bool`](type/Bool) | If boolTrue, revoke the current token and generate a new one |

---

## Result

[bots.ExportedBotToken](type/bots.ExportedBotToken)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |

---

## Example

```php
$botsExportedBotToken = $client->bots->exportBotToken(
	bot : $client->get_input_user(user : '@TakNone'),
	revoke : false,
);
```