# channelAdminLogEventActionParticipantInvite

**Description** : *A user was invited to the group*

**Layer** : 225

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
		user_id : 3302513357470531483,
		date : 38,
		subscription_until_date : 56,
		rank : 'EwAGWzxMPsmuNpX3',
	),
);
```