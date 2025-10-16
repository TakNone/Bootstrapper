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
		user_id : -3323875154530804571,
		date : 47,
		subscription_until_date : 53,
	),
	new_participant : $client->channelParticipant(
		user_id : 5825800358824550706,
		date : 60,
		subscription_until_date : 1,
	),
);
```