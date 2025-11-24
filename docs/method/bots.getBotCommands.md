# bots.getBotCommands

**Description** : *Obtain a list of bot commands for the specified bot scope and language code*

**Layer** : 218

```tl
bots.getBotCommands#e34c0dd6 scope:BotCommandScope lang_code:string = Vector<BotCommand>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>scope</mark> | [`BotCommandScope`](type/BotCommandScope) | Command scope |
| <mark>lang_code</mark> | [`string`](type/string) | Language code |

---

## Result

[Vector<BotCommand>](type/BotCommand)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |

---

## Example

```php
$botCommand = $client->bots->getBotCommands(
	scope : $client->botCommandScopeDefault(),
	lang_code : 'rAwZfRJMVpPqiF4T',
);
```