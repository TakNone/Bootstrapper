# channelAdminLogEventActionParticipantSubExtend

**Description** : *A paid subscriber has extended their Telegram Star subscription &raquo;*

**Layer** : 218

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
		user_id : -137564851501137342,
		date : 22,
		subscription_until_date : 24,
	),
	new_participant : $client->channelParticipant(
		user_id : -8004041961738034608,
		date : 51,
		subscription_until_date : 76,
	),
);
```