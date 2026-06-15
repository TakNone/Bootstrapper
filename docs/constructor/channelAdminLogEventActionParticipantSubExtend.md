# channelAdminLogEventActionParticipantSubExtend

**Description** : *A paid subscriber has extended their Telegram Star subscription &raquo;*

**Layer** : 227

```tl
channelAdminLogEventActionParticipantSubExtend#64642db3 prev_participant:ChannelParticipant new_participant:ChannelParticipant = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_participant</mark> | [`ChannelParticipant`](type/ChannelParticipant) | Same as new_participant |
| <mark>new_participant</mark> | [`ChannelParticipant`](type/ChannelParticipant) | The subscriber that extended the subscription |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionParticipantSubExtend(
	prev_participant : $client->channelParticipant(
		user_id : 3380680485661624265,
		date : 9,
		subscription_until_date : 14,
		rank : 'uXUjkOdDgYKenh54',
	),
	new_participant : $client->channelParticipant(
		user_id : -1864698127692224027,
		date : 26,
		subscription_until_date : 72,
		rank : 'pw9M24brd3UixBnL',
	),
);
```