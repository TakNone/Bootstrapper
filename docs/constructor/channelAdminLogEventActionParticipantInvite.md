# channelAdminLogEventActionParticipantInvite

**Description** : *A user was invited to the group*

**Layer** : 233

```tl
channelAdminLogEventActionParticipantInvite#e31c34d8 participant:ChannelParticipant = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>participant</mark> | [`ChannelParticipant`](type/ChannelParticipant) | The user that was invited |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionParticipantInvite(
	participant : $client->channelParticipant(
		user_id : -2480869385140024109,
		date : 91,
		subscription_until_date : 11,
		rank : 'eMXbLiQPOqcjWraT',
	),
);
```