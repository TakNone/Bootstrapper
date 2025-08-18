# channelAdminLogEventActionParticipantJoinByRequest

**Description** : *A new member was accepted to the chat by an admin*

**Layer** : 211

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
		link : '0DiZjGYxUQfW3zV7',
		admin_id : -5116960637518343864,
		date : 85,
		start_date : 68,
		expire_date : 45,
		usage_limit : 14,
		usage : 1,
		requested : 100,
		subscription_expired : 11,
		title : 'cxqWL6QwSI2OUTGt',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 24,
			amount : 7085036950434714635,
		),
	),
	approved_by : -7658005813027711696,
);
```