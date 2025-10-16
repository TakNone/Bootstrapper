# channelAdminLogEventActionParticipantInvite

**Description** : *A user was invited to the group*

**Layer** : 216

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
		user_id : -233543567264658297,
		date : 93,
		subscription_until_date : 5,
	),
);
```