# updateChannelTooLong

**Description** : *There are new updates in the specified channel, the client must fetch them manually by invoking updates\.getChannelDifference as specified in the documentation &raquo;*

**Layer** : 233

```tl
updateChannelTooLong#108d941f flags:# channel_id:long pts:flags.0?int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>channel_id</mark> | [`long`](type/long) | The channel |
| **pts** | [`flags.0?int`](type/int) | The PTS |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateChannelTooLong(
	channel_id : -9093701641334641635,
	pts : 12,
);
```