# channelParticipant

**Description** : *Channel/supergroup participant*

**Layer** : 211

```tl
channelParticipant#cb397619 flags:# user_id:long date:int subscription_until_date:flags.0?int = ChannelParticipant;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>user_id</mark> | [`long`](type/long) | Participant user ID |
| <mark>date</mark> | [`int`](type/int) | Date joined |
| **subscription_until_date** | [`flags.0?int`](type/int) | If set, contains the expiration date of the current Telegram Star subscription period » for the specified participant |

---

## Type

[ChannelParticipant](type/ChannelParticipant)

---

## Example

```php
$channelParticipant = $client->channelParticipant(
	user_id : 5434095363296950612,
	date : 78,
	subscription_until_date : 52,
);
```