# messages.getBotApp

**Description** : *Obtain information about a direct link Mini App*

**Layer** : 211

```tl
messages.getBotApp#34fdc5c3 app:InputBotApp hash:long = messages.BotApp;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>app</mark> | [`InputBotApp`](type/InputBotApp) | Bot app information obtained from a Direct Mini App deep link » |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |

---

## Result

[messages.BotApp](type/messages.BotApp)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_APP_BOT_INVALID** | `400` | The bot_id passed in the inputBotAppShortName constructor is invalid |
| **BOT_APP_INVALID** | `400` | The specified bot app is invalid |
| **BOT_APP_SHORTNAME_INVALID** | `400` | The specified bot app short name is invalid |

---

## Example

```php
$messagesBotApp = $client->messages->getBotApp(
	app : $client->inputBotAppID(
		id : -9011054062426588940,
		access_hash : -4282674457854861021,
	),
	hash : -156230621505585149,
);
```