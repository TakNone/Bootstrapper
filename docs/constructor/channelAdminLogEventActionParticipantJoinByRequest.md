# channelAdminLogEventActionParticipantJoinByRequest

**Description** : *A new member was accepted to the chat by an admin*

**Layer** : 218

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
		link : 'vx98T4nW3VkHezGy',
		admin_id : 6780087322176951976,
		date : 32,
		start_date : 99,
		expire_date : 93,
		usage_limit : 44,
		usage : 30,
		requested : 83,
		subscription_expired : 72,
		title : 'g9sufW6rNZxQMFBJ',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 74,
			amount : 4818592539180841217,
		),
	),
	approved_by : -6891595922891266570,
);
```