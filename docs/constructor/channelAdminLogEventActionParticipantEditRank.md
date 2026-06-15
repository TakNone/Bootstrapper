# channelAdminLogEventActionParticipantEditRank

**Layer** : 227

```tl
channelAdminLogEventActionParticipantEditRank#5806b4ec user_id:long prev_rank:string new_rank:string = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`long`](type/long) | NOTHING |
| <mark>prev_rank</mark> | [`string`](type/string) | NOTHING |
| <mark>new_rank</mark> | [`string`](type/string) | NOTHING |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionParticipantEditRank(
	user_id : -5056526540920810379,
	prev_rank : 'tK7x5mOsyAB6GHIj',
	new_rank : 'hHmjorw13X9R0nf5',
);
```