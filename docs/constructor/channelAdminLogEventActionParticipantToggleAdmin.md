# channelAdminLogEventActionParticipantToggleAdmin

**Description** : *The admin rights of a user were changed*

**Layer** : 218

```tl
channelAdminLogEventActionParticipantToggleAdmin#d5676710 prev_participant:ChannelParticipant new_participant:ChannelParticipant = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_participant</mark> | [`ChannelParticipant`](type/ChannelParticipant) | Previous admin rights |
| <mark>new_participant</mark> | [`ChannelParticipant`](type/ChannelParticipant) | New admin rights |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionParticipantToggleAdmin(
	prev_participant : $client->channelParticipant(
		user_id : -6004832680905072043,
		date : 37,
		subscription_until_date : 62,
	),
	new_participant : $client->channelParticipant(
		user_id : 3081867037570182578,
		date : 30,
		subscription_until_date : 34,
	),
);
```