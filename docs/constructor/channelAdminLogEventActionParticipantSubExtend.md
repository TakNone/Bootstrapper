# channelAdminLogEventActionParticipantSubExtend

**Description** : *A paid subscriber has extended their Telegram Star subscription &raquo;*

**Layer** : 214

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
		user_id : 2253156670965116276,
		date : 97,
		subscription_until_date : 0,
	),
	new_participant : $client->channelParticipant(
		user_id : -607391303214233794,
		date : 34,
		subscription_until_date : 59,
	),
);
```