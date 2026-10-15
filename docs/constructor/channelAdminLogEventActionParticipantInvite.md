# channelAdminLogEventActionParticipantInvite

**Description** : *A user was invited to the group*

**Layer** : 229

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
		user_id : -8520178875955904438,
		date : 34,
		subscription_until_date : 100,
		rank : '7LKxPbSUn2VAQyHj',
	),
);
```