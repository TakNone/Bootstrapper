# channelParticipant

**Description** : *Channel/supergroup participant*

**Layer** : 218

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
	user_id : -2486350848860909530,
	date : 93,
	subscription_until_date : 11,
);
```