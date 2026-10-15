# channelAdminLogEventActionParticipantToggleBan

**Description** : *The banned rights of a user were changed*

**Layer** : 229

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
		user_id : -1816404163036028978,
		date : 0,
		subscription_until_date : 59,
		rank : '1vXR28mJdSD705PA',
	),
	new_participant : $client->channelParticipant(
		user_id : -9175742926262587859,
		date : 64,
		subscription_until_date : 19,
		rank : 'Q2NFuCrBq5Mole9i',
	),
);
```