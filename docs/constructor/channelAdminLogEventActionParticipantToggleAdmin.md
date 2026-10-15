# channelAdminLogEventActionParticipantToggleAdmin

**Description** : *The admin rights of a user were changed*

**Layer** : 229

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
		user_id : -970143777808752021,
		date : 81,
		subscription_until_date : 75,
		rank : 'eaVuZqmvlhD5zyKF',
	),
	new_participant : $client->channelParticipant(
		user_id : 5134478278241657691,
		date : 12,
		subscription_until_date : 10,
		rank : 'nvNK4QTtOYjUoihE',
	),
);
```