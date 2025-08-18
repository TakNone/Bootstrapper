# updateChannelTooLong

**Description** : *There are new updates in the specified channel, the client must fetch them\.
If the difference is too long or if the channel isn&#039;t currently in the states, start fetching from the specified pts*

**Layer** : 211

```tl
updateChannelTooLong#108d941f flags:# channel_id:long pts:flags.0?int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>channel_id</mark> | [`long`](type/long) | The channel |
| **pts** | [`flags.0?int`](type/int) | The PTS |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateChannelTooLong(
	channel_id : -5752004725686120580,
	pts : 69,
);
```