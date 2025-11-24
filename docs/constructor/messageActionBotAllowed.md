# messageActionBotAllowed

**Description** : *We have given the bot permission to send us direct messages*

**Layer** : 218

```tl
messageActionBotAllowed#c516d679 flags:# attach_menu:flags.1?true from_request:flags.3?true domain:flags.0?string app:flags.2?BotApp = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **attach_menu** | [`flags.1?true`](type/true) | We have authorized the bot to send us messages by installing the bot's attachment menu |
| **from_request** | [`flags.3?true`](type/true) | We have allowed the bot to send us messages using bots.allowSendMessage » |
| **domain** | [`flags.0?string`](type/string) | We have authorized the bot to send us messages by logging into a website via Telegram Login »; this field contains the domain name of the website on which the user has logged in |
| **app** | [`flags.2?BotApp`](type/BotApp) | We have authorized the bot to send us messages by opening the specified bot mini app |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionBotAllowed(
	attach_menu : true,
	from_request : true,
	domain : 'CFK8DJASZYoz4NEf',
	app : $client->botAppNotModified(),
);
```