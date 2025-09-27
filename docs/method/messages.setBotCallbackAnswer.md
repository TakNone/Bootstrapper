# messages.setBotCallbackAnswer

**Description** : *Set the callback answer to a user button press \(bots only\)*

**Layer** : 216

```tl
messages.setBotCallbackAnswer#d58f130a flags:# alert:flags.1?true query_id:long message:flags.0?string url:flags.2?string cache_time:int = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **alert** | [`flags.1?true`](type/true) | Whether to show the message as a popup instead of a toast notification |
| <mark>query_id</mark> | [`long`](type/long) | Query ID |
| **message** | [`flags.0?string`](type/string) | Popup to show |
| **url** | [`flags.2?string`](type/string) | URL to open |
| <mark>cache_time</mark> | [`int`](type/int) | Cache validity |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **MESSAGE_TOO_LONG** | `400` | The provided message is too long |
| **QUERY_ID_INVALID** | `400` | The query ID is invalid |
| **URL_INVALID** | `400` | Invalid URL provided |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |

---

## Example

```php
$bool = $client->messages->setBotCallbackAnswer(
	alert : true,
	query_id : -783961853507229024,
	message : 'eX8G9xjFrTQAtODb',
	url : 'https://docs.liveproto.dev',
	cache_time : 33,
);
```