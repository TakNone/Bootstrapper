# channelAdminLogEventActionParticipantToggleBan

**Description** : *The banned rights of a user were changed*

**Layer** : 216

```tl
channelAdminLogEventActionParticipantToggleBan#e6d83d7e prev_participant:ChannelParticipant new_participant:ChannelParticipant = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_participant</mark> | [`ChannelParticipant`](type/ChannelParticipant) | Old banned rights of user |
| <mark>new_participant</mark> | [`ChannelParticipant`](type/ChannelParticipant) | New banned rights of user |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionParticipantToggleBan(
	prev_participant : $client->channelParticipant(
		user_id : -2480779433092355270,
		date : 3,
		subscription_until_date : 49,
	),
	new_participant : $client->channelParticipant(
		user_id : -7265440896510319122,
		date : 2,
		subscription_until_date : 75,
	),
);
```