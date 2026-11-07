# channelParticipantSelf

**Description** : *Myself*

**Layer** : 229

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
| **rank** | [`flags.2?string`](type/string) | The participant's tag » |

---

## Type

[ChannelParticipant](type/ChannelParticipant)

---

## Example

```php
$channelParticipant = $client->channelParticipantSelf(
	via_request : true,
	user_id : 2343875552060821731,
	inviter_id : -1730025323901552184,
	date : 47,
	subscription_until_date : 100,
	rank : '4RKO0gjBHJkoDbFP',
);
```