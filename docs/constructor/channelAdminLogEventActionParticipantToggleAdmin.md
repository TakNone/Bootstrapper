# channelAdminLogEventActionParticipantToggleAdmin

**Description** : *The admin rights of a user were changed*

**Layer** : 214

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
		user_id : 283388475121485484,
		date : 5,
		subscription_until_date : 73,
	),
	new_participant : $client->channelParticipant(
		user_id : 3826655169339147538,
		date : 80,
		subscription_until_date : 70,
	),
);
```