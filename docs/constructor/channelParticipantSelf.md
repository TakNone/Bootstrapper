# channelParticipantSelf

**Description** : *Myself*

**Layer** : 211

```tl
channelParticipantSelf#4f607bef flags:# via_request:flags.0?true user_id:long inviter_id:long date:int subscription_until_date:flags.1?int = ChannelParticipant;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **via_request** | [`flags.0?true`](type/true) | Whether I joined upon specific approval of an admin |
| <mark>user_id</mark> | [`long`](type/long) | User ID |
| <mark>inviter_id</mark> | [`long`](type/long) | User that invited me to the channel/supergroup |
| <mark>date</mark> | [`int`](type/int) | When did I join the channel/supergroup |
| **subscription_until_date** | [`flags.1?int`](type/int) | If set, contains the expiration date of the current Telegram Star subscription period » for the specified participant |

---

## Type

[ChannelParticipant](type/ChannelParticipant)

---

## Example

```php
$channelParticipant = $client->channelParticipantSelf(
	via_request : true,
	user_id : -4829608078284736946,
	inviter_id : -6638062714768387784,
	date : 17,
	subscription_until_date : 30,
);
```