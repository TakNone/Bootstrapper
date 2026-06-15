# channelParticipant

**Description** : *Channel/supergroup participant*

**Layer** : 227

```tl
channelParticipant#1bd54456 flags:# user_id:long date:int subscription_until_date:flags.0?int rank:flags.2?string = ChannelParticipant;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>user_id</mark> | [`long`](type/long) | Participant user ID |
| <mark>date</mark> | [`int`](type/int) | Date joined |
| **subscription_until_date** | [`flags.0?int`](type/int) | If set, contains the expiration date of the current Telegram Star subscription period » for the specified participant |
| **rank** | [`flags.2?string`](type/string) | NOTHING |

---

## Type

[ChannelParticipant](type/ChannelParticipant)

---

## Example

```php
$channelParticipant = $client->channelParticipant(
	user_id : -8171673916258769003,
	date : 88,
	subscription_until_date : 57,
	rank : 'gjnM2BrxvLYqhlQI',
);
```