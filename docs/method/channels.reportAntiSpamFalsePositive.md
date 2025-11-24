# channels.reportAntiSpamFalsePositive

**Description** : *Report a native antispam false positive*

**Layer** : 218

```tl
channels.reportAntiSpamFalsePositive#a850a693 channel:InputChannel msg_id:int = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Supergroup ID |
| <mark>msg_id</mark> | [`int`](type/int) | Message ID that was mistakenly deleted by the native antispam system, taken from the admin log |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |

---

## Example

```php
$bool = $client->channels->reportAntiSpamFalsePositive(
	channel : $client->get_input_channel(channel : '@LiveProto'),
	msg_id : 2,
);
```