# bots.getBotCommands

**Description** : *Obtain a list of bot commands for the specified bot scope and language code*

**Layer** : 211

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
| **USER_BOT_INVALID** | `400` | User accounts must provide the bot method parameter when calling this method. If there is no such method parameter, this method can only be invoked by bot accounts |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |

---

## Example

```php
$botCommand = $client->bots->getBotCommands(
	scope : $client->botCommandScopeDefault(),
	lang_code : 'ZnwDtOUkJB2jzxdg',
);
```