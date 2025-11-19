# messages.botCallbackAnswer

**Description** : *Callback answer sent by the bot in response to a button press*

**Layer** : 218

```tl
messages.botCallbackAnswer#36585ea4 flags:# alert:flags.1?true has_url:flags.3?true native_ui:flags.4?true message:flags.0?string url:flags.2?string cache_time:int = messages.BotCallbackAnswer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **alert** | [`flags.1?true`](type/true) | Whether an alert should be shown to the user instead of a toast notification |
| **has_url** | [`flags.3?true`](type/true) | Whether an URL is present |
| **native_ui** | [`flags.4?true`](type/true) | Whether to show games in WebView or in native UI |
| **message** | [`flags.0?string`](type/string) | Alert to show |
| **url** | [`flags.2?string`](type/string) | URL to open |
| <mark>cache_time</mark> | [`int`](type/int) | For how long should this answer be cached |

---

## Type

[messages.BotCallbackAnswer](type/messages.BotCallbackAnswer)

---

## Example

```php
$messagesBotCallbackAnswer = $client->messages->botCallbackAnswer(
	alert : true,
	has_url : true,
	native_ui : true,
	message : 'KaA4Wf7BRSOn89Xk',
	url : 'https://docs.liveproto.dev',
	cache_time : 93,
);
```