# channelAdminLogEventActionParticipantToggleAdmin

**Description** : *The admin rights of a user were changed*

**Layer** : 222

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
		user_id : -5382818392358785463,
		date : 35,
		subscription_until_date : 53,
	),
	new_participant : $client->channelParticipant(
		user_id : -9106502034410341544,
		date : 79,
		subscription_until_date : 81,
	),
);
```