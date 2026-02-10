# channelAdminLogEventActionParticipantToggleBan

**Description** : *The banned rights of a user were changed*

**Layer** : 222

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
		user_id : -7823372313582957612,
		date : 74,
		subscription_until_date : 23,
	),
	new_participant : $client->channelParticipant(
		user_id : 8109956951682591913,
		date : 65,
		subscription_until_date : 58,
	),
);
```