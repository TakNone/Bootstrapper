# channelAdminLogEventActionParticipantToggleBan

**Description** : *The banned rights of a user were changed*

**Layer** : 218

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
		user_id : -1001628725724858048,
		date : 49,
		subscription_until_date : 0,
	),
	new_participant : $client->channelParticipant(
		user_id : -5775767782424585206,
		date : 72,
		subscription_until_date : 14,
	),
);
```