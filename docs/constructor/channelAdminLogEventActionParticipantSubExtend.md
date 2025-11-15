# channelAdminLogEventActionParticipantSubExtend

**Description** : *A paid subscriber has extended their Telegram Star subscription &raquo;*

**Layer** : 216

```tl
channelAdminLogEventActionParticipantSubExtend#64642db3 prev_participant:ChannelParticipant new_participant:ChannelParticipant = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_participant</mark> | [`ChannelParticipant`](type/ChannelParticipant) | Same as new_participant |
| <mark>new_participant</mark> | [`ChannelParticipant`](type/ChannelParticipant) | The subscriber that extended the subscription |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionParticipantSubExtend(
	prev_participant : $client->channelParticipant(
		user_id : 1576712627501092352,
		date : 14,
		subscription_until_date : 19,
	),
	new_participant : $client->channelParticipant(
		user_id : -1652933279661824577,
		date : 8,
		subscription_until_date : 60,
	),
);
```