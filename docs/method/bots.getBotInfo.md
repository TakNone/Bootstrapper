# bots.getBotInfo

**Description** : *Get localized name, about text and description of a bot \(or of the current account, if called by a bot\)*

**Layer** : 218

```tl
bots.getBotInfo#dcd914fd flags:# bot:flags.0?InputUser lang_code:string = bots.BotInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **bot** | [`flags.0?InputUser`](type/InputUser) | If called by a user, must contain the peer of a bot we own |
| <mark>lang_code</mark> | [`string`](type/string) | Language code, if left empty this method will return the fallback about text and description |

---

## Result

[bots.BotInfo](type/bots.BotInfo)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |
| **LANG_CODE_INVALID** | `400` | The specified language code is invalid |
| **USER_BOT_INVALID** | `400` | User accounts must provide the bot method parameter when calling this method. If there is no such method parameter, this method can only be invoked by bot accounts |

---

## Example

```php
$botsBotInfo = $client->bots->getBotInfo(
	bot : $client->get_input_user(user : '@TakNone'),
	lang_code : '7cpUks4CONVwSJM8',
);
```