# messages.botApp

**Description** : *Contains information about a direct link Mini App*

**Layer** : 211

```tl
messages.botApp#eb50adf5 flags:# inactive:flags.0?true request_write_access:flags.1?true has_settings:flags.2?true app:BotApp = messages.BotApp;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **inactive** | [`flags.0?true`](type/true) | Whether the web app was never used by the user, and confirmation must be asked from the user before opening it |
| **request_write_access** | [`flags.1?true`](type/true) | The bot is asking permission to send messages to the user: if the user agrees, set the write_allowed flag when invoking messages.requestAppWebView |
| **has_settings** | [`flags.2?true`](type/true) | Deprecated flag, can be ignored |
| <mark>app</mark> | [`BotApp`](type/BotApp) | Bot app information |

---

## Type

[messages.BotApp](type/messages.BotApp)

---

## Example

```php
$messagesBotApp = $client->messages->botApp(
	inactive : true,
	request_write_access : true,
	has_settings : true,
	app : $client->botAppNotModified(),
);
```