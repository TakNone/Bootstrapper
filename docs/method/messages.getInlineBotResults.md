# messages.getInlineBotResults

**Description** : *Query an inline bot*

**Layer** : 216

```tl
messages.getInlineBotResults#514e999d flags:# bot:InputUser peer:InputPeer geo_point:flags.0?InputGeoPoint query:string offset:string = messages.BotResults;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | The bot to query |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The currently opened chat |
| **geo_point** | [`flags.0?InputGeoPoint`](type/InputGeoPoint) | The geolocation, if requested |
| <mark>query</mark> | [`string`](type/string) | The query |
| <mark>offset</mark> | [`string`](type/string) | The offset within the results, will be passed directly as-is to the bot |

---

## Result

[messages.BotResults](type/messages.BotResults)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INLINE_DISABLED** | `400` | This bot can't be used in inline mode |
| **BOT_INVALID** | `400` | This is not a valid bot |
| **BOT_RESPONSE_TIMEOUT** | `400` | A timeout occurred while fetching data from the bot |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `406` | You haven't joined this channel/supergroup |
| **INPUT_USER_DEACTIVATED** | `400` | The specified user was deleted |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **Timeout** | `-503` | Timeout while fetching data |

---

## Example

```php
$messagesBotResults = $client->messages->getInlineBotResults(
	bot : $client->inputUserEmpty(),
	peer : $client->inputPeerEmpty(),
	geo_point : $client->inputGeoPointEmpty(),
	query : 'c1jdhWVKopxZ3mEt',
	offset : 'rEetYWVSFlms8kBA',
);
```