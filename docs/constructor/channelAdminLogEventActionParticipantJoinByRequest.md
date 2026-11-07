# channelAdminLogEventActionParticipantJoinByRequest

**Description** : *A new member was accepted to the chat by an admin*

**Layer** : 229

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
		link : 'n7Qvs80ILGDpPV1x',
		admin_id : -9166299766616435347,
		date : 79,
		start_date : 68,
		expire_date : 68,
		usage_limit : 37,
		usage : 48,
		requested : 47,
		subscription_expired : 61,
		title : 'ezYZPqEFn9hIswif',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 51,
			amount : 1926963243045397216,
		),
	),
	approved_by : 1328825203485915639,
);
```