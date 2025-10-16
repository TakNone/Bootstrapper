# channelAdminLogEventActionParticipantToggleAdmin

**Description** : *The admin rights of a user were changed*

**Layer** : 216

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
		user_id : -111174758508994205,
		date : 19,
		subscription_until_date : 60,
	),
	new_participant : $client->channelParticipant(
		user_id : -2801582382482864106,
		date : 27,
		subscription_until_date : 6,
	),
);
```