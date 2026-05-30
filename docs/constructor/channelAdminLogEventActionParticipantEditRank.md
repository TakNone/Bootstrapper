# channelAdminLogEventActionParticipantEditRank

**Layer** : 225

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
	user_id : 3757050369398812258,
	prev_rank : 'clJpjHbBGDrRfz2u',
	new_rank : '41KeBEL5uOgMtCcl',
);
```