# channelParticipantSelf

**Description** : *Myself*

**Layer** : 227

```tl
channelParticipantSelf#a9478a1a flags:# via_request:flags.0?true user_id:long inviter_id:long date:int subscription_until_date:flags.1?int rank:flags.2?string = ChannelParticipant;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **via_request** | [`flags.0?true`](type/true) | Whether I joined upon specific approval of an admin |
| <mark>user_id</mark> | [`long`](type/long) | User ID |
| <mark>inviter_id</mark> | [`long`](type/long) | User that invited me to the channel/supergroup |
| <mark>date</mark> | [`int`](type/int) | When did I join the channel/supergroup |
| **subscription_until_date** | [`flags.1?int`](type/int) | If set, contains the expiration date of the current Telegram Star subscription period » for the specified participant |
| **rank** | [`flags.2?string`](type/string) | NOTHING |

---

## Type

[ChannelParticipant](type/ChannelParticipant)

---

## Example

```php
$channelParticipant = $client->channelParticipantSelf(
	via_request : true,
	user_id : 5596226805935113842,
	inviter_id : 6820097472672290325,
	date : 98,
	subscription_until_date : 52,
	rank : 'kc3149U8OQuZetIH',
);
```