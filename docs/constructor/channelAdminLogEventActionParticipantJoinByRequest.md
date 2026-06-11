# channelAdminLogEventActionParticipantJoinByRequest

**Description** : *A new member was accepted to the chat by an admin*

**Layer** : 227

```tl
channelAdminLogEventActionParticipantJoinByRequest#afb6144a invite:ExportedChatInvite approved_by:long = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | The invite link that was used to join the chat |
| <mark>approved_by</mark> | [`long`](type/long) | ID of the admin that approved the invite |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionParticipantJoinByRequest(
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'pcQlJA8DoasCN0MB',
		admin_id : 5226306756494787367,
		date : 90,
		start_date : 72,
		expire_date : 66,
		usage_limit : 85,
		usage : 9,
		requested : 32,
		subscription_expired : 91,
		title : 'tWR7oXveNAy6fpFD',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 22,
			amount : -9010869537672208895,
		),
	),
	approved_by : -4641354328855668521,
);
```